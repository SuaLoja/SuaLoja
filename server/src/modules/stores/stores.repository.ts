import { EntityRepository, Repository } from 'typeorm';
import { Store } from './store.entity';

@EntityRepository(Store)
export class StoresRepository extends Repository<Store> {}
