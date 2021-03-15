import { Body, Controller, Post } from '@nestjs/common';
import { ProductsService } from './products.service';
import { Product } from './product.model';

@Controller('products')
export class ProductsController {
  constructor(private productsService: ProductsService) {}

  @Post()
  createProduct(
    @Body('name') name: string,
    @Body('description') description: string,
    @Body('price') price: number,
  ): Product {
    return this.productsService.createProduct(name, description, price);
  }
}
