import React from 'react'
import { GetServerSidePropsContext } from 'next'
import { getCsrfToken, signIn } from 'next-auth/client'
import { Field, Form, Formik } from 'formik'
import * as yup from 'yup'
import Header from '../components/Header'

const signinSchema = yup.object().shape({
  email: yup.string().email('Email inválido.').required('Campo obrigatório.'),
  password: yup.string().required('Campo obrigatório.'),
  csrfToken: yup.string()
})

export default function SignIn({
  csrfToken
}: {
  csrfToken: string
}): React.ReactElement {
  return (
    <div className="flex flex-col min-h-screen overflow-hidden">
      <Header />

      <main className="flex-grow">
        <section className="bg-gradient-to-b from-gray-100 to-white">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <div className="pt-32 pb-12 md:pt-40 md:pb-20">
              <div className="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                <h1 className="h1">
                  Bem vindo de volta. Faça login em sua conta.
                </h1>
              </div>
              <div className="max-w-sm mx-auto">
                <Formik
                  initialValues={{
                    email: '',
                    password: '',
                    csrfToken
                  }}
                  validationSchema={signinSchema}
                  onSubmit={async values => {
                    signIn('sualoja', values)
                  }}
                >
                  {({ errors, touched }) => (
                    <Form>
                      <div className="flex flex-wrap -mx-3 mb-4">
                        <Field name="csrfToken" type="hidden" />
                        <div className="w-full px-3">
                          <label
                            className="block text-gray-800 text-sm font-medium mb-1"
                            htmlFor="email"
                          >
                            Email
                          </label>
                          <Field
                            name="email"
                            className="form-input w-full text-gray-800"
                            placeholder="Digite seu email"
                          />
                          {errors.email && touched.email ? (
                            <span className="text-red-600 text-sm">
                              {errors.email}
                            </span>
                          ) : null}
                        </div>
                      </div>
                      <div className="flex flex-wrap -mx-3 mb-4">
                        <div className="w-full px-3">
                          <div className="flex justify-between">
                            <label
                              className="block text-gray-800 text-sm font-medium mb-1"
                              htmlFor="password"
                            >
                              Senha
                            </label>
                            <a
                              href="reset-password"
                              className="text-sm font-medium text-blue-600 hover:underline"
                            >
                              Tendo problemas pra entrar?
                            </a>
                          </div>
                          <Field
                            name="password"
                            type="password"
                            className="form-input w-full text-gray-800"
                            placeholder="Digite sua senha"
                          />
                          {errors.password && touched.password ? (
                            <span className="text-red-600 text-sm">
                              {errors.password}
                            </span>
                          ) : null}
                        </div>
                      </div>
                      <div className="flex flex-wrap -mx-3 mb-4">
                        <div className="w-full px-3">
                          <div className="flex justify-between">
                            <label className="flex items-center">
                              <input
                                type="checkbox"
                                className="form-checkbox"
                              />
                              <span className="text-gray-600 ml-2">
                                Mantenha-me conectado
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div className="flex flex-wrap -mx-3 mt-6">
                        <div className="w-full px-3">
                          <button
                            className="btn text-white bg-blue-600 hover:bg-blue-700 w-full"
                            type="submit"
                          >
                            Entrar
                          </button>
                        </div>
                      </div>
                    </Form>
                  )}
                </Formik>
                <div className="flex items-center my-6">
                  <div
                    className="border-t border-gray-300 flex-grow mr-3"
                    aria-hidden="true"
                  />
                  <div className="text-gray-600 italic">Ou</div>
                  <div
                    className="border-t border-gray-300 flex-grow ml-3"
                    aria-hidden="true"
                  />
                </div>
                <div className="text-gray-600 text-center mt-6">
                  Não possui uma conta?{' '}
                  <a
                    href="/signup"
                    className="text-blue-600 hover:underline transition duration-150 ease-in-out"
                  >
                    Crie uma gratuitamente
                  </a>
                  .
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  )
}

export async function getServerSideProps(
  context: GetServerSidePropsContext
): Promise<{ props: { csrfToken: string } }> {
  return {
    props: {
      csrfToken: await getCsrfToken(context)
    }
  }
}
