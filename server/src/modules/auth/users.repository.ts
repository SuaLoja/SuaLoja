import { ConflictException } from '@nestjs/common';
import { EntityRepository, Repository } from 'typeorm';
import { SignUpDTO } from './dto/signup.dto';
import { User } from './user.entity';

@EntityRepository(User)
export class UsersRepository extends Repository<User> {
  async signUp(signUpDTO: SignUpDTO): Promise<void> {
    const { name, email, password } = signUpDTO;

    const user = new User();
    user.name = name;
    user.email = email;
    user.password = password;

    try {
      await user.save();
    } catch (error) {
      if (error.code === '23505') {
        // duplicated email
        throw new ConflictException('An user with same email already exists');
      }
    }
  }
}
