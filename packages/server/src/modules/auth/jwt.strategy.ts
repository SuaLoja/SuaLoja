import { Injectable, UnauthorizedException } from '@nestjs/common'
import { PassportStrategy } from '@nestjs/passport'
import { InjectRepository } from '@nestjs/typeorm'
import { Strategy, ExtractJwt } from 'passport-jwt'
import { JwtPayload } from './interfaces/jwt-payload.interface'
import { User } from './user.entity'
import { UsersRepository } from './users.repository'

@Injectable()
export class JwtStrategy extends PassportStrategy(Strategy) {
  constructor(
    @InjectRepository(UsersRepository)
    private userRepository: UsersRepository
  ) {
    super({
      jwtFromRequest: ExtractJwt.fromAuthHeaderAsBearerToken(),
      secretOrKey: 'sualoja'
    })
  }

  async validate(payload: JwtPayload): Promise<User> {
    const { id } = payload
    const user = await this.userRepository.findOne(id)

    if (!user) {
      throw new UnauthorizedException()
    }

    return user
  }
}
