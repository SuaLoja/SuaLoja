import { AxiosError } from 'axios'
import { NextApiRequest, NextApiResponse } from 'next'
import NextAuth, { NextAuthOptions } from 'next-auth'
import Providers from 'next-auth/providers'
import api from '../../../config/api'

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
        const user = await api
          .post('/auth/signin', credentials)
          .then(response => response.data)
          .catch((error: AxiosError) => {
            if (!error.response) {
              throw new Error('Erro no servidor')
            }

            throw new Error(error.response.data.message)
          })

        if (!user) {
          return null
        }

        return user
      }
    })
  ],
  session: {
    jwt: true
  },
  pages: {
    signIn: '/signin',
    error: '/signin'
  }
}

export default (
  req: NextApiRequest,
  res: NextApiResponse
): Promise<void> | void => NextAuth(req, res, options)
