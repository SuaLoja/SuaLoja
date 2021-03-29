import { EntityRepository, Repository } from 'typeorm';
import { SignUpDTO } from './dto/signup.dto';
import { User } from './user.entity';

@EntityRepository(User)
export class UsersRepository extends Repository<User> {
  async signUp(signUpDTO: SignUpDTO): Promise<void> {
    const { firstName, lastName, email, password } = signUpDTO;

    const user = new User();
    user.firstName = firstName;
    user.lastName = lastName;
    user.email = email;
    user.password = password;

    await user.save();
  }
}
