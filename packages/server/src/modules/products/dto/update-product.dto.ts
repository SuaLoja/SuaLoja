import { IsNumber, IsString, IsOptional } from 'class-validator'

export class UpdateProductDTO {
  @IsOptional()
  @IsString()
  name: string

  @IsOptional()
  @IsString()
  description: string

  @IsOptional()
  @IsNumber()
  price: number
}
