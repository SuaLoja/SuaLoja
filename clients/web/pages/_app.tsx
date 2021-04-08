import React from 'react';
import type { AppProps } from 'next/app';
import 'tailwindcss/tailwind.css';

function SuaLojaApp({ Component, pageProps }: AppProps) {
  return <Component {...pageProps} />;
}

export default SuaLojaApp;
