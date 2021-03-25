import {
  Body,
  Controller,
  Delete,
  Param,
  Post,
  Put,
  ValidationPipe,
} from '@nestjs/common';
import { CreateStoreDTO } from './dto/create-store.dto';
import { UpdateStoreDTO } from './dto/update-store.dto';
import { Store } from './store.entity';
import { StoresService } from './stores.service';

@Controller('stores')
export class StoresController {
  constructor(private storesService: StoresService) {}

  @Post()
  createStore(
    @Body(ValidationPipe) createStoreDTO: CreateStoreDTO,
  ): Promise<Store> {
    return this.storesService.createStore(createStoreDTO);
  }

  @Put('/:id')
  updateStore(
    @Param('id') id: string,
    @Body(ValidationPipe) updateStoreDTO: UpdateStoreDTO,
  ): Promise<Store> {
    return this.storesService.updateStore(id, updateStoreDTO);
  }

  @Delete('/:id')
  deleteStore(@Param('id') id: string): Promise<void> {
    return this.storesService.deleteStore(id);
  }
}
