import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { CreateStoreDTO } from './dto/create-store.dto';
import { UpdateStoreDTO } from './dto/update-store.dto';
import { Store } from './store.entity';
import { StoresRepository } from './stores.repository';

@Injectable()
export class StoresService {
  constructor(
    @InjectRepository(StoresRepository)
    private storesRepository: StoresRepository,
  ) {}

  async createStore(createStoreDTO: CreateStoreDTO): Promise<Store> {
    return this.storesRepository.createStore(createStoreDTO);
  }

  async updateStore(
    id: string,
    updateStoreDTO: UpdateStoreDTO,
  ): Promise<Store> {
    return this.storesRepository.updateStore(id, updateStoreDTO);
  }
}
