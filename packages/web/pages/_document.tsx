import React from 'react'
import Document, { Html, Head, Main, NextScript } from 'next/document'

class SuaLojaDocument extends Document {
  render(): React.ReactElement {
    return (
      <Html lang="pt-br">
        <Head />
        <body className="font-inter antialiased bg-white text-gray-900 tracking-tight">
          <Main />
          <NextScript />
        </body>
      </Html>
    )
  }
}

export default SuaLojaDocument
