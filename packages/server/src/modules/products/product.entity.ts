import { BaseEntity, Column, Entity, PrimaryGeneratedColumn } from 'typeorm'

@Entity('products')
export class Product extends BaseEntity {
  @PrimaryGeneratedColumn('uuid')
  readonly id: string

  @Column({
    unique: true
  })
  slug?: string

  @Column()
  name: string

  @Column()
  description: string

  @Column()
  price: number

  @Column({
    default: true
  })
  avaliable: boolean
}
