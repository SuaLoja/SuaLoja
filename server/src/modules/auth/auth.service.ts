import { Injectable, UnauthorizedException } from '@nestjs/common';
import { JwtService } from '@nestjs/jwt';
import { InjectRepository } from '@nestjs/typeorm';
import { SignInDTO } from './dto/signin.dto';
import { SignUpDTO } from './dto/signup.dto';
import { UsersRepository } from './users.repository';

@Injectable()
export class AuthService {
  constructor(
    @InjectRepository(UsersRepository)
    private usersRepository: UsersRepository,
    private jwtSerivce: JwtService,
  ) {}

  signUp(signUpDto: SignUpDTO): Promise<void> {
    return this.usersRepository.signUp(signUpDto);
  }

  async signIn(signInDto: SignInDTO): Promise<{ acessToken: string }> {
    const payload = await this.usersRepository.validateUserPassword(signInDto);

    if (!payload) {
      throw new UnauthorizedException('Invalid credentials');
    }

    const acessToken = this.jwtSerivce.sign(payload);

    return {
      acessToken,
    };
  }
}
