import { TypeOrmModuleOptions } from '@nestjs/typeorm'

const { DB_HOST, DB_PORT, DB_USER, DB_PASS, DB_NAME } = process.env

export const TypeOrmConfig: TypeOrmModuleOptions = {
  type: 'postgres',
  host: DB_HOST || 'localhost',
  port: Number(DB_PORT) || 5432,
  username: DB_USER || 'postgres',
  password: DB_PASS || 'postgres',
  database: DB_NAME || 'sualoja',
  entities: [`${__dirname}/../**/*.entity.{js,ts}`],
  synchronize: true
}
