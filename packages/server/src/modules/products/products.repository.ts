import { InternalServerErrorException } from '@nestjs/common'
import { EntityNotFoundException } from 'src/exceptions/entity-not-found.exception'
import { EntityRepository, Repository } from 'typeorm'
import { CreateProductDTO } from './dto/create-product.dto'
import { UpdateProductDTO } from './dto/update-product.dto'
import { Product } from './product.entity'

@EntityRepository(Product)
export class ProductsRepository extends Repository<Product> {
  async createProduct(createProductDto: CreateProductDTO): Promise<Product> {
    const { name, description, price } = createProductDto

    const product = new Product()
    product.name = name
    product.description = description
    product.price = price
    product.slug = this.generateSlug(product.name)

    try {
      product.save()
    } catch (error) {
      throw new InternalServerErrorException(error)
    }

    return product
  }

  async updateProduct(
    id: string,
    updateProductDTO: UpdateProductDTO
  ): Promise<Product> {
    const product = await this.findOne(id)

    if (!product) {
      throw new EntityNotFoundException('product', id)
    }

    Object.assign(product, updateProductDTO)

    try {
      await product.save()
    } catch (error) {
      throw new InternalServerErrorException(error)
    }

    return product
  }

  async updateProductAvaliability(
    id: string,
    avaliable: boolean
  ): Promise<Product> {
    const product = await this.findOne(id)

    if (!product) {
      throw new EntityNotFoundException('product', id)
    }

    product.avaliable = avaliable

    try {
      await product.save()
    } catch (error) {
      throw new InternalServerErrorException(error)
    }

    return product
  }

  private generateSlug(name: string): string {
    return name.split(' ').join('-').toLowerCase()
  }
}
