import {
  InternalServerErrorException,
  NotFoundException,
} from '@nestjs/common';
import { EntityRepository, Repository } from 'typeorm';
import { CreateStoreDTO } from './dto/create-store.dto';
import { UpdateStoreDTO } from './dto/update-store.dto';
import { Store } from './store.entity';

@EntityRepository(Store)
export class StoresRepository extends Repository<Store> {
  async createStore(createStoreDTO: CreateStoreDTO): Promise<Store> {
    const { name } = createStoreDTO;

    const store = new Store();
    store.name = name;

    try {
      store.save();
    } catch (error) {
      throw new InternalServerErrorException(error);
    }

    return store;
  }

  async updateStore(
    id: string,
    updateStoreDTO: UpdateStoreDTO,
  ): Promise<Store> {
    const store = await this.findOne(id);

    if (!store) {
      throw new NotFoundException(`No store found with the id "${id}"`);
    }

    Object.assign(store, updateStoreDTO);

    try {
      await store.save();
    } catch (error) {
      throw new InternalServerErrorException(error);
    }

    return store;
  }
}
