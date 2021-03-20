import {
  InternalServerErrorException,
  NotFoundException,
} from '@nestjs/common';
import { EntityRepository, Repository } from 'typeorm';
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';
import { Product } from './product.entity';

@EntityRepository(Product)
export class ProductsRepository extends Repository<Product> {
  async createProduct(createProductDto: CreateProductDTO): Promise<Product> {
    const { name, description, price } = createProductDto;

    const product = new Product();
    product.name = name;
    product.description = description;
    product.price = price;
    product.slug = this.generateSlug(product.name);

    try {
      product.save();
    } catch (error) {
      throw new InternalServerErrorException(error);
    }

    return product;
  }

  async updateProduct(
    id: string,
    updateProductDTO: UpdateProductDTO,
  ): Promise<Product> {
    const product = await this.findOne({
      where: {
        id,
      },
    });

    if (!product) {
      throw new NotFoundException(`No product found with the id "${id}"`);
    }

    Object.assign(product, updateProductDTO);

    try {
      await product.save();
    } catch (error) {
      throw new InternalServerErrorException(error);
    }

    return product;
  }

  private generateSlug(name: string): string {
    return name.split(' ').join('-').toLowerCase();
  }
}
