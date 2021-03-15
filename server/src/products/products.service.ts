import { Injectable } from '@nestjs/common';
import { v1 as uuid } from 'uuid';
import { Product } from './product.model';

@Injectable()
export class ProductsService {
  private products: Product[] = [];

  createProduct(name: string, description: string, price: number): Product {
    const product: Product = {
      id: uuid(),
      slug: null,
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
