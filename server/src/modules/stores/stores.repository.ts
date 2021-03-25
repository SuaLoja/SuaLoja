import { InternalServerErrorException } from '@nestjs/common';
import { EntityNotFoundException } from 'src/exceptions/entity-not-found.exception';
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
      throw new EntityNotFoundException('store', id);
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
