import { NextApiRequest, NextApiResponse } from 'next'
import NextAuth, { NextAuthOptions } from 'next-auth'
import Providers from 'next-auth/providers'

const options: NextAuthOptions = {
  providers: [
    Providers.Credentials({
      id: 'sualoja',
      name: 'SuaLoja Provider',
      credentials: {
        email: {
          label: 'Email',
          type: 'email'
        },
        password: {
          label: 'Senha',
          type: 'password'
        }
      },
      async authorize(credentials) {
        const user = { name: 'Victor', email: 'victor@hotmail.com' } // Use API here
        return user
      }
    })
  ],
  session: {
    jwt: true
  }
}

export default (
  req: NextApiRequest,
  res: NextApiResponse
): Promise<void> | void => NextAuth(req, res, options)
