import { Body, Controller, Post, ValidationPipe } from '@nestjs/common';
import { ProductsService } from './products.service';
import { Product } from './product.model';
import { CreateProductDTO } from './dto/create-product.dto';

@Controller('products')
export class ProductsController {
  constructor(private productsService: ProductsService) {}

  @Post()
  createProduct(
    @Body(ValidationPipe) createProductDto: CreateProductDTO,
  ): Product {
    return this.productsService.createProduct(createProductDto);
  }
}
