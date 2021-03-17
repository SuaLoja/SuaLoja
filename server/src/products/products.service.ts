import { Injectable } from '@nestjs/common';
import { v1 as uuid } from 'uuid';
import { Product } from './product.model';
import { CreateProductDTO } from './dto/create-product.dto';

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

  private generateSlug(name: string): string {
    return name.split(' ').join('-').toLowerCase();
  }
}
