import {
  Body,
  Controller,
  Delete,
  Get,
  Param,
  Post,
  Put,
  ValidationPipe
} from '@nestjs/common'
import { CreateStoreDTO } from './dto/create-store.dto'
import { UpdateStoreDTO } from './dto/update-store.dto'
import { Store } from './store.entity'
import { StoresService } from './stores.service'

@Controller('stores')
export class StoresController {
  constructor(private storesService: StoresService) {}

  @Get()
  findAll(): Promise<Store[]> {
    return this.storesService.findAll()
  }

  @Get('/:id')
  findOne(@Param('id') id: string): Promise<Store> {
    return this.storesService.findOne(id)
  }

  @Post()
  create(@Body(ValidationPipe) createStoreDTO: CreateStoreDTO): Promise<Store> {
    return this.storesService.create(createStoreDTO)
  }

  @Put('/:id')
  update(
    @Param('id') id: string,
    @Body(ValidationPipe) updateStoreDTO: UpdateStoreDTO
  ): Promise<Store> {
    return this.storesService.update(id, updateStoreDTO)
  }

  @Delete('/:id')
  delete(@Param('id') id: string): Promise<void> {
    return this.storesService.delete(id)
  }
}
