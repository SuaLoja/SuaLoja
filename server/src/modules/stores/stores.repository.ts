import { InternalServerErrorException } from '@nestjs/common';
import { EntityRepository, Repository } from 'typeorm';
import { CreateStoreDTO } from './dto/create-store.dto';
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
}
