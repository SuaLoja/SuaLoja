import { ConflictException, InternalServerErrorException } from '@nestjs/common'
import { genSalt, hash } from 'bcryptjs'
import { JwtPayload } from 'src/modules/auth/interfaces/jwt-payload.interface'
import { EntityRepository, Repository } from 'typeorm'
import { SignInDTO } from './dto/signin.dto'
import { SignUpDTO } from './dto/signup.dto'
import { User } from './user.entity'

@EntityRepository(User)
export class UsersRepository extends Repository<User> {
  async signUp(signUpDTO: SignUpDTO): Promise<void> {
    const { name, email, password } = signUpDTO

    const user = new User()
    user.name = name
    user.email = email
    user.salt = await genSalt()
    user.password = await this.hashPassword(password, user.salt)

    try {
      await user.save()
    } catch (error) {
      if (error.code === '23505') {
        // duplicated email
        throw new ConflictException('An user with same email already exists')
      } else {
        throw new InternalServerErrorException()
      }
    }
  }

  async validateUserPassword(signInDTO: SignInDTO): Promise<JwtPayload> {
    const { email, password } = signInDTO
    const user = await this.findOne({ email })

    if (user && (await user.validatePassword(password))) {
      return {
        name: user.name,
        email: user.email
      }
    }

    return null
  }

  private async hashPassword(password: string, salt: string): Promise<string> {
    return hash(password, salt)
  }
}
