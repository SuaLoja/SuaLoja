import { Body, Controller, Post, ValidationPipe } from '@nestjs/common'
import { AuthService } from './auth.service'
import { SignInDTO } from './dto/signin.dto'
import { SignUpDTO } from './dto/signup.dto'

@Controller('auth')
export class AuthController {
  constructor(private authService: AuthService) {}

  @Post('/signup')
  signUp(@Body(ValidationPipe) signUpDTO: SignUpDTO): Promise<void> {
    return this.authService.signUp(signUpDTO)
  }

  @Post('/signin')
  signIn(
    @Body(ValidationPipe) signInDto: SignInDTO
  ): Promise<{ acessToken: string }> {
    return this.authService.signIn(signInDto)
  }
}
