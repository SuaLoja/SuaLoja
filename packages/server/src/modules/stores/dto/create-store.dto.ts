import { IsString } from 'class-validator'

export class CreateStoreDTO {
  @IsString()
  name: string
}
