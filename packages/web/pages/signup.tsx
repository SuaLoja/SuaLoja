import React from 'react'
import { AxiosError } from 'axios'
import { Field, Form, Formik } from 'formik'
import * as yup from 'yup'
import Message from '../components/Form/Message'
import Header from '../components/Header'
import api from '../config/api'

const signupSchema = yup.object().shape({
  name: yup
    .string()
    .required('Campo obrigatório.')
    .min(2, 'Nome muito pequeno.'),
  email: yup.string().email('Email inválido.').required('Campo obrigatório.'),
  password: yup
    .string()
    .min(8, 'A senha é muito fraca!')
    .max(20, 'A senha é muito grande!')
    .required('Campo obrigatório.')
})

export default function SignUp(): React.ReactElement {
  return (
    <div className="flex flex-col min-h-screen overflow-hidden">
      <Header />

      <main className="flex-grow">
        <section className="bg-gradient-to-b from-gray-100 to-white">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <div className="pt-32 pb-12 md:pt-40 md:pb-20">
              <div className="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                <h1 className="h1">Crie sua conta gratuitamente.</h1>
              </div>
              <div className="max-w-sm mx-auto">
                <Message
                  text="Esse email já está cadastrado."
                  color="red-500"
                />
                <Formik
                  initialValues={{
                    name: '',
                    email: '',
                    password: ''
                  }}
                  validationSchema={signupSchema}
                  onSubmit={async values => {
                    await api
                      .post('/auth/signup', values)
                      .catch((error: AxiosError) => {
                        if (error.response.status === 403) {
                          // Set message to visible here
                        }
                      })
                  }}
                >
                  {({ errors, touched }) => (
                    <Form>
                      <div className="flex flex-wrap -mx-3 mb-4">
                        <div className="w-full px-3">
                          <label
                            className="block text-gray-800 text-sm font-medium mb-1"
                            htmlFor="name"
                          >
                            Nome
                          </label>
                          <Field
                            name="name"
                            className="form-input w-full text-gray-800 focus:ring-inset-red-600"
                            placeholder="Digite seu nome"
                          />
                          {errors.name && touched.name ? (
                            <span className="text-red-600 text-sm">
                              {errors.name}
                            </span>
                          ) : null}
                        </div>
                      </div>
                      <div className="flex flex-wrap -mx-3 mb-4">
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
                          <label
                            className="block text-gray-800 text-sm font-medium mb-1"
                            htmlFor="password"
                          >
                            Senha
                          </label>
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
                      <div className="flex flex-wrap -mx-3 mt-6">
                        <div className="w-full px-3">
                          <button
                            className="btn text-white bg-blue-600 hover:bg-blue-700 w-full"
                            type="submit"
                          >
                            Enviar
                          </button>
                        </div>
                      </div>
                    </Form>
                  )}
                </Formik>
                <div className="text-sm text-gray-500 text-center mt-3">
                  Ao criar uma conta, você concorda com os{' '}
                  <a className="underline" href="#0">
                    termos e condições
                  </a>
                  .
                </div>
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
                  <a
                    href="/signin"
                    className="text-blue-600 hover:underline transition duration-150 ease-in-out"
                  >
                    Faça login
                  </a>
                  , caso já possuir uma conta.
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  )
}
