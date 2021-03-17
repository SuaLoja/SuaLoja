import {
  Body,
  Controller,
  Param,
  Post,
  Put,
  ValidationPipe,
} from '@nestjs/common';
import { ProductsService } from './products.service';
import { Product } from './product.model';
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';

@Controller('products')
export class ProductsController {
  constructor(private productsService: ProductsService) {}

  @Post()
  createProduct(
    @Body(ValidationPipe) createProductDto: CreateProductDTO,
  ): Product {
    return this.productsService.createProduct(createProductDto);
  }

  @Put('/:id')
  updateProduct(
    @Param('id') id: string,
    @Body(ValidationPipe) updateProductDTO: UpdateProductDTO,
  ): Product {
    return this.productsService.updateProduct(id, updateProductDTO);
  }
}
