import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TypeOrmConfig } from './config/typeorm.config';
import { ProductsModule } from './modules/products/products.module';

@Module({
  imports: [TypeOrmModule.forRoot(TypeOrmConfig), ProductsModule],
})
export class AppModule {}
