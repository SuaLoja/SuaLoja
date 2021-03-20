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
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';
import { Product } from './product.entity';
import { ProductsService } from './products.service';

@Controller('products')
export class ProductsController {
  constructor(private productsService: ProductsService) {}

  @Get()
  getAllProducts(): Promise<Product[]> {
    return this.productsService.getAllProducts();
  }

  @Get('/:id')
  getProductById(@Param('id') id: string): Promise<Product> {
    return this.productsService.getProductById(id);
  }

  @Post()
  createProduct(
    @Body(ValidationPipe) createProductDto: CreateProductDTO,
  ): Promise<Product> {
    return this.productsService.createProduct(createProductDto);
  }

  @Put('/:id')
  updateProduct(
    @Param('id') id: string,
    @Body(ValidationPipe) updateProductDTO: UpdateProductDTO,
  ): Promise<Product> {
    return this.productsService.updateProduct(id, updateProductDTO);
  }

  @Delete('/:id')
  deleteProduct(@Param('id') id: string): Promise<void> {
    return this.productsService.deleteProduct(id);
  }
}
