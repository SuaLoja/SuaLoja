import { Column, Entity, PrimaryGeneratedColumn } from 'typeorm';

@Entity('products')
export class Product {
  @PrimaryGeneratedColumn('uuid')
  readonly id: string;

  @Column()
  slug?: string;

  @Column()
  name: string;

  @Column()
  description: string;

  @Column()
  price: number;
}
