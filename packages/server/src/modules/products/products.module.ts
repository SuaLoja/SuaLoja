import { Module } from '@nestjs/common'
import { TypeOrmModule } from '@nestjs/typeorm'
import { ProductsController } from './products.controller'
import { ProductsRepository } from './products.repository'
import { ProductsService } from './products.service'

@Module({
  providers: [ProductsService],
  controllers: [ProductsController],
  imports: [TypeOrmModule.forFeature([ProductsRepository])]
})
export class ProductsModule {}
