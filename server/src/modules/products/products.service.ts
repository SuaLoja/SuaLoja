import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { EntityNotFoundException } from 'src/exceptions/entity-not-found.exception';
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

  async findAll(): Promise<Product[]> {
    return this.productsRepository.find();
  }

  async findOne(id: string): Promise<Product> {
    const product = await this.productsRepository.findOne(id);

    if (!product) {
      throw new EntityNotFoundException('product', id);
    }

    return product;
  }

  async create(createProductDto: CreateProductDTO): Promise<Product> {
    return this.productsRepository.createProduct(createProductDto);
  }

  async update(
    id: string,
    updateProductDTO: UpdateProductDTO,
  ): Promise<Product> {
    return this.productsRepository.updateProduct(id, updateProductDTO);
  }

  async updateAvaliability(id: string, avaliable: boolean): Promise<Product> {
    return this.productsRepository.updateProductAvaliability(id, avaliable);
  }

  async delete(id: string): Promise<void> {
    const productsDeleted = await this.productsRepository.delete(id);

    if (!productsDeleted.affected) {
      throw new EntityNotFoundException('product', id);
    }
  }
}
