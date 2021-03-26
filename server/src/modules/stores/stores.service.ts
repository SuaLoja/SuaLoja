import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { EntityNotFoundException } from 'src/exceptions/entity-not-found.exception';
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

  async findAll(): Promise<Store[]> {
    return await this.storesRepository.find();
  }

  async findOne(id: string): Promise<Store> {
    const store = await this.storesRepository.findOne(id);

    if (!store) {
      throw new EntityNotFoundException('store', id);
    }

    return store;
  }

  async create(createStoreDTO: CreateStoreDTO): Promise<Store> {
    return this.storesRepository.createStore(createStoreDTO);
  }

  async update(id: string, updateStoreDTO: UpdateStoreDTO): Promise<Store> {
    return this.storesRepository.updateStore(id, updateStoreDTO);
  }

  async delete(id: string): Promise<void> {
    const storesDeleted = await this.storesRepository.delete(id);

    if (!storesDeleted.affected) {
      throw new EntityNotFoundException('store', id);
    }
  }
}
