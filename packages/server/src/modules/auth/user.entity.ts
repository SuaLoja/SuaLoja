import { BaseEntity, Column, Entity, PrimaryGeneratedColumn } from 'typeorm'
import { hash } from 'bcryptjs'

@Entity('users')
export class User extends BaseEntity {
  @PrimaryGeneratedColumn('uuid')
  id: string

  @Column()
  name: string

  @Column({
    unique: true
  })
  email: string

  @Column()
  password: string

  @Column()
  salt: string

  async validatePassword(password: string): Promise<boolean> {
    const hashedPassword = await hash(password, this.salt)

    return hashedPassword === this.password
  }
}
