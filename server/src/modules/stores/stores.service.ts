import { Injectable, NotFoundException } from '@nestjs/common';
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

  async getAllStores(): Promise<Store[]> {
    return await this.storesRepository.find();
  }

  async getStoreById(id: string): Promise<Store> {
    const store = await this.storesRepository.findOne(id);

    if (!store) {
      throw new NotFoundException(`No store found with the id "${id}"`);
    }

    return store;
  }

  async createStore(createStoreDTO: CreateStoreDTO): Promise<Store> {
    return this.storesRepository.createStore(createStoreDTO);
  }

  async updateStore(
    id: string,
    updateStoreDTO: UpdateStoreDTO,
  ): Promise<Store> {
    return this.storesRepository.updateStore(id, updateStoreDTO);
  }

  async deleteStore(id: string): Promise<void> {
    const storesDeleted = await this.storesRepository.delete(id);

    if (!storesDeleted.affected) {
      throw new NotFoundException(`No store found with the id "${id}"`);
    }
  }
}
