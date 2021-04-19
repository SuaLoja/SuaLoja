import React from 'react'
import type { AppProps } from 'next/app'
import { Provider } from 'next-auth/client'
import '../styles/style.scss'
import '@tailwindcss/custom-forms/dist/custom-forms.min.css'

function SuaLojaApp({ Component, pageProps }: AppProps): React.ReactElement {
  return (
    <Provider session={pageProps.session}>
      <Component {...pageProps} />
    </Provider>
  )
}

export default SuaLojaApp
