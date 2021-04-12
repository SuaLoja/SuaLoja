import { IsEmail, MaxLength, MinLength } from 'class-validator'

export class SignInDTO {
  @IsEmail()
  email: string

  @MinLength(8)
  @MaxLength(20)
  password: string
}
