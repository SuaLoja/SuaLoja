import {
  BaseEntity,
  Column,
  Entity,
  OneToMany,
  PrimaryGeneratedColumn,
} from 'typeorm';
import { Product } from '../products/product.entity';

@Entity('stores')
export class Store extends BaseEntity {
  @PrimaryGeneratedColumn('uuid')
  readonly id: string;

  @Column()
  name: string;

  @OneToMany((type) => Product, (product) => product.store, { eager: true })
  products: Product[];
}
