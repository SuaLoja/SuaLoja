import { Injectable, NotFoundException } from '@nestjs/common';
import { v1 as uuid } from 'uuid';
import { Product } from './product.model';
import { CreateProductDTO } from './dto/create-product.dto';
import { UpdateProductDTO } from './dto/update-product.dto';

@Injectable()
export class ProductsService {
  private products: Product[] = [];

  createProduct(createProductDto: CreateProductDTO): Product {
    const { name, description, price } = createProductDto;

    const product: Product = {
      id: uuid(),
      name,
      description,
      price,
    };
    product.slug = this.generateSlug(product.name);

    this.products.push(product);
    return product;
  }

  updateProduct(id: string, updateProductDTO: UpdateProductDTO): Product {
    const product = this.products.find((product) => product.id === id);

    if (!product) {
      throw new NotFoundException(`No product found with the id "${id}"`);
    }

    Object.assign(product, updateProductDTO);
    return product;
  }

  deleteProduct(id: string): void {
    this.products = this.products.filter((product) => product.id !== id);
  }

  private generateSlug(name: string): string {
    return name.split(' ').join('-').toLowerCase();
  }
}
