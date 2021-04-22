import {
  ConflictException,
  Injectable,
  InternalServerErrorException,
  UnauthorizedException
} from '@nestjs/common'
import { JwtService } from '@nestjs/jwt'
import { InjectRepository } from '@nestjs/typeorm'
import { SignInDTO } from './dto/signin.dto'
import { SignUpDTO } from './dto/signup.dto'
import { JwtPayload } from './interfaces/jwt-payload.interface'
import { User } from './user.entity'
import { UsersRepository } from './users.repository'

@Injectable()
export class AuthService {
  constructor(
    @InjectRepository(UsersRepository)
    private usersRepository: UsersRepository,
    private jwtSerivce: JwtService
  ) {}

  async signUp(signUpDto: SignUpDTO): Promise<void> {
    const user: Omit<
      User,
      'password' | 'salt'
    > = await this.usersRepository.signUp(signUpDto)

    try {
      user.acessKey = this.jwtSerivce.sign({ id: user.id })
      await user.save()
    } catch (error) {
      if (error.code === '23505') {
        // duplicated email
        throw new ConflictException('An user with same email already exists')
      } else {
        throw new InternalServerErrorException(error)
      }
    }
  }

  async signIn(signInDto: SignInDTO): Promise<JwtPayload> {
    const payload = await this.usersRepository.validateUserPassword(signInDto)

    if (!payload) {
      throw new UnauthorizedException('Invalid credentials')
    }

    return payload
  }
}
