import { Body, Controller, Post, ValidationPipe } from '@nestjs/common';
import { CreateStoreDTO } from './dto/create-store.dto';
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
}
