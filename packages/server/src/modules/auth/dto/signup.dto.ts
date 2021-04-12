import { IsEmail, IsString, MaxLength, MinLength } from 'class-validator'

export class SignUpDTO {
  @IsString()
  name: string

  @IsEmail()
  email: string

  @MinLength(8)
  @MaxLength(20)
  password: string
}
