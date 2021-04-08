import React from 'react';
import type { AppProps } from 'next/app';
import 'tailwindcss/tailwind.css';
import '../styles/styles.css';

function SuaLojaApp({ Component, pageProps }: AppProps) {
  return <Component {...pageProps} />;
}

export default SuaLojaApp;
