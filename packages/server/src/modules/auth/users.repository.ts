import { ConflictException, InternalServerErrorException } from '@nestjs/common'
import { genSalt, hash } from 'bcryptjs'
import { EntityRepository, Repository } from 'typeorm'
import { SignInDTO } from './dto/signin.dto'
import { SignUpDTO } from './dto/signup.dto'
import { JwtPayload } from './interfaces/jwt-payload.interface'
import { User } from './user.entity'

@EntityRepository(User)
export class UsersRepository extends Repository<User> {
  async signUp(signUpDTO: SignUpDTO): Promise<User> {
    const { name, email, password } = signUpDTO

    const user = new User()
    user.name = name
    user.email = email
    user.salt = await genSalt()
    user.password = await this.hashPassword(password, user.salt)

    return user
  }

  async validateUserPassword(signInDTO: SignInDTO): Promise<JwtPayload> {
    const { email, password } = signInDTO
    const user = await this.findOne({ email })

    if (user && (await user.validatePassword(password))) {
      delete user.password
      delete user.salt

      return user
    }

    return null
  }

  private async hashPassword(password: string, salt: string): Promise<string> {
    return hash(password, salt)
  }
}
