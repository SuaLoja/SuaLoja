import React from 'react';
import Head from 'next/head';

export default function Home() {
  return (
    <div>
      <Head>
        <title>SuaLoja</title>
        <link rel="icon" href="/favicon.ico" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet"
        />
      </Head>

      <body className="tracking-tighter bg-white">
        <div className="flex flex-col min-h-screen">
          <header className="fixed w-full z-30  text-gray-500 hover:text-gray-800">
            <div className="max-w-6xl ml-auto mr-auto pl-5 pr-5">
              <div className="flex items-center justify-between h-16">
                <div className="flex-shrink-0 mr-4">
                  <a href="/" className="block outline-none">
                    <svg
                      className="w-8 h-8"
                      viewBox="0 0 32 32"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <defs>
                        <radialGradient
                          cx="21.152%"
                          cy="86.063%"
                          fx="21.152%"
                          fy="86.063%"
                          r="79.941%"
                          id="header-logo"
                        >
                          <stop stopColor="#4FD1C5" offset="0%" />
                          <stop stopColor="#81E6D9" offset="25.871%" />
                          <stop stopColor="#338CF5" offset="100%" />
                        </radialGradient>
                      </defs>
                      <rect
                        width="32"
                        height="32"
                        rx="16"
                        fill="url(#header-logo)"
                        fillRule="nonzero"
                      />
                    </svg>
                  </a>
                </div>
                <nav className="flex-grow flex">
                  <ul className="flex flex-wrap items-center justify-end flex-grow">
                    <li>
                      <a
                        href="/"
                        className="flex items-center pt-2 pb-2 outline-none pr-5 pl-5"
                      >
                        Sobre
                      </a>
                    </li>
                    <li>
                      <a
                        href="/"
                        className="flex items-center pt-2 pb-2 outline-none pr-5 pl-5"
                      >
                        Documentação
                      </a>
                    </li>
                    <li>
                      <a
                        href="/"
                        className="flex items-center pt-2 pb-2 outline-none pr-5 pl-5"
                      >
                        Changelog
                      </a>
                    </li>
                  </ul>
                  <ul className="flex flex-wrap items-center justify-end flex-grow">
                    <li>
                      <a
                        href="/"
                        className="font-medium pl-5 pr-2 pt-3 pb-3 flex items-center "
                      >
                        Sign in
                      </a>
                    </li>
                    <li>
                      <a
                        href="/"
                        className="p-2 shadow-md font-medium py-1 px-4 flex items-center justify-center border-2 rounded-sm bg-gray-900 ml-3 text-gray-200 hover:bg-gray-800 border-black"
                        style={{
                          padding: '.4rem 1rem',
                          borderRadius: '.25rem',
                        }}
                      >
                        <span>Sign up</span>
                        <svg
                          className="w-3 h-3 fill-current flex-shrink-0 ml-2 -mr-1 text-gray-400"
                          viewBox="0 0 12 12"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                            fillRule="nonzero"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </header>
          <main className="flex-grow">
            <section className="relative">
              <div className="max-w-6xl ml-auto mr-auto px-6">
                <div className="pb-20 pt-40">
                  <div className="text-center pb-16">
                    <h1 className="text-8xl font-extrabold leading-2 tracking-tighter mb-4 ">
                      {'Crie sua própria loja '}
                      <span
                        className="bg-clip-text bg-gradient-to-r from-[#338cf5] to-[#4fd1c5]"
                        style={{
                          WebkitTextFillColor: 'transparent',
                        }}
                      >
                        facilmente
                      </span>
                    </h1>
                    <div className="max-w-3xl ml-auto mr-auto">
                      <p className="text-[1.3rem] mb-8 text-gray-500">
                        Crie uma página virtual para seu negócio, coloque seus
                        produtos, customize e comece a vender. Tudo isso de
                        graça e sem nenhuma taxa.
                      </p>
                      <div className="ml-auto mr-auto max-w-none flex justify-center">
                        <div>
                          <a
                            href="/"
                            className="py-3 px-8 border-4 shadow-lg inline-flex items-center border-transparent leading-5 bg-[#0070f4] w-auto mb-0 outline-none text-white rounded font-medium"
                          >
                            Criar loja grátis
                          </a>
                        </div>
                        <div>
                          <a
                            href="/"
                            className="py-3 px-8 border-4 shadow-lg inline-flex items-center border-transparent ml-4  leading-5 bg-[#191919] text-white rounded font-medium"
                          >
                            Saiba mais
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
        </div>
      </body>
    </div>
  );
}
