import { Injectable, UnauthorizedException } from '@nestjs/common'
import { InjectRepository } from '@nestjs/typeorm'
import { SignInDTO } from './dto/signin.dto'
import { SignUpDTO } from './dto/signup.dto'
import { JwtPayload } from './interfaces/jwt-payload.interface'
import { UsersRepository } from './users.repository'

@Injectable()
export class AuthService {
  constructor(
    @InjectRepository(UsersRepository)
    private usersRepository: UsersRepository
  ) {}

  signUp(signUpDto: SignUpDTO): Promise<void> {
    return this.usersRepository.signUp(signUpDto)
  }

  async signIn(signInDto: SignInDTO): Promise<JwtPayload> {
    const payload = await this.usersRepository.validateUserPassword(signInDto)

    if (!payload) {
      throw new UnauthorizedException('Invalid credentials')
    }

    return payload
  }
}
