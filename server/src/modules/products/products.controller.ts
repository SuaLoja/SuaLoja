import {
  Body,
  Controller,
  Delete,
  Get,
  Param,
  ParseBoolPipe,
  Patch,
  Post,
  Put,
  ValidationPipe,
} from '@nestjs/common';
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';
import { Product } from './product.entity';
import { ProductsService } from './products.service';

@Controller('products')
export class ProductsController {
  constructor(private productsService: ProductsService) {}

  @Get()
  findAll(): Promise<Product[]> {
    return this.productsService.findAll();
  }

  @Get('/:id')
  findOne(@Param('id') id: string): Promise<Product> {
    return this.productsService.findOne(id);
  }

  @Post()
  create(
    @Body(ValidationPipe) createProductDto: CreateProductDTO,
  ): Promise<Product> {
    return this.productsService.create(createProductDto);
  }

  @Put('/:id')
  update(
    @Param('id') id: string,
    @Body(ValidationPipe) updateProductDTO: UpdateProductDTO,
  ): Promise<Product> {
    return this.productsService.update(id, updateProductDTO);
  }

  @Patch('/:id/avaliable')
  updateAvaliability(
    @Param('id') id: string,
    @Body('avaliable', ParseBoolPipe) avaliable: boolean,
  ): Promise<Product> {
    return this.productsService.updateAvaliability(id, avaliable);
  }

  @Delete('/:id')
  delete(@Param('id') id: string): Promise<void> {
    return this.productsService.delete(id);
  }
}
