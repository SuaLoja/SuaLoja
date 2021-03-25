import {
  BaseEntity,
  Column,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
} from 'typeorm';
import { Store } from '../stores/store.entity';

@Entity('products')
export class Product extends BaseEntity {
  @PrimaryGeneratedColumn('uuid')
  readonly id: string;

  @ManyToOne((type) => Store, (store) => store.products, { eager: false })
  store: Store;

  @Column({
    unique: true,
  })
  slug?: string;

  @Column()
  name: string;

  @Column()
  description: string;

  @Column()
  price: number;

  @Column({
    default: true,
  })
  avaliable: boolean;
}
