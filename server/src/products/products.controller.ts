import {
  Body,
  Controller,
  Delete,
  Get,
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

  @Get()
  getAllTasks(): Product[] {
    return this.productsService.getAllProducts();
  }

  @Get('/:id')
  getProductById(@Param('id') id: string): Product {
    return this.productsService.getProductById(id);
  }

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

  @Delete('/:id')
  deleteProduct(@Param('id') id: string): void {
    this.productsService.deleteProduct(id);
  }
}
