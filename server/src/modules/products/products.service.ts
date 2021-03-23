import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';
import { Product } from './product.entity';
import { ProductsRepository } from './products.repository';

@Injectable()
export class ProductsService {
  constructor(
    @InjectRepository(ProductsRepository)
    private productsRepository: ProductsRepository,
  ) {}

  async getAllProducts(): Promise<Product[]> {
    return this.productsRepository.find();
  }

  async getProductById(id: string): Promise<Product> {
    const product = await this.productsRepository.findOne(id);

    if (!product) {
      throw new NotFoundException(`No product found with the id "${id}"`);
    }

    return product;
  }

  async createProduct(createProductDto: CreateProductDTO): Promise<Product> {
    return this.productsRepository.createProduct(createProductDto);
  }

  async updateProduct(
    id: string,
    updateProductDTO: UpdateProductDTO,
  ): Promise<Product> {
    return this.productsRepository.updateProduct(id, updateProductDTO);
  }

  async updateProductAvaliability(
    id: string,
    avaliable: boolean,
  ): Promise<Product> {
    return this.productsRepository.updateProductAvaliability(id, avaliable);
  }

  async deleteProduct(id: string): Promise<void> {
    const productsDeleted = await this.productsRepository.delete(id);

    if (!productsDeleted.affected) {
      throw new NotFoundException(`No product found with the id "${id}"`);
    }
  }
}
