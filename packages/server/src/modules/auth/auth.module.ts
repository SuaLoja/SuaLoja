import { Module } from '@nestjs/common'
import { JwtModule } from '@nestjs/jwt'
import { PassportModule } from '@nestjs/passport'
import { TypeOrmModule } from '@nestjs/typeorm'
import { AuthController } from './auth.controller'
import { AuthService } from './auth.service'
import { JwtStrategy } from './jwt.strategy'
import { UsersRepository } from './users.repository'

@Module({
  providers: [AuthService, JwtStrategy],
  controllers: [AuthController],
  imports: [
    PassportModule.register({
      defaultStrategy: 'jwt'
    }),
    JwtModule.register({
      secret: 'sualoja',
      signOptions: {
        expiresIn: 3600
      }
    }),
    TypeOrmModule.forFeature([UsersRepository])
  ],
  exports: [JwtStrategy, PassportModule]
})
export class AuthModule {}
