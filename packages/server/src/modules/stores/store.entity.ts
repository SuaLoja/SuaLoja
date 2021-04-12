import { BaseEntity, Column, Entity, PrimaryGeneratedColumn } from 'typeorm'

@Entity('stores')
export class Store extends BaseEntity {
  @PrimaryGeneratedColumn('uuid')
  readonly id: string

  @Column()
  name: string
}
