import { NotFoundException } from '@nestjs/common'

export class EntityNotFoundException extends NotFoundException {
  constructor(entityName: string, id: string, message?: string) {
    super(`An ${entityName} with ID "${id}" was not found`, message)
  }
}
