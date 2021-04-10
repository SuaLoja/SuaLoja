import React from 'react';
import type { AppProps } from 'next/app';
import '../styles/style.scss';

function SuaLojaApp({ Component, pageProps }: AppProps): React.ReactElement {
  return <Component {...pageProps} />;
}

export default SuaLojaApp;
