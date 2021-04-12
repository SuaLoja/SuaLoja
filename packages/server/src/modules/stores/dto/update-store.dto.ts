import { IsOptional, IsString } from 'class-validator'

export class UpdateStoreDTO {
  @IsOptional()
  @IsString()
  name: string
}
