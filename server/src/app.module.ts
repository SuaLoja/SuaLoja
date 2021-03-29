import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TypeOrmConfig } from './config/typeorm.config';
import { AuthController } from './modules/auth/auth.controller';
import { AuthModule } from './modules/auth/auth.module';
import { ProductsModule } from './modules/products/products.module';
import { StoresModule } from './modules/stores/stores.module';

@Module({
  imports: [
    TypeOrmModule.forRoot(TypeOrmConfig),
    ProductsModule,
    StoresModule,
    AuthModule,
  ],
  controllers: [AuthController],
})
export class AppModule {}
