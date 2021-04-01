import { Flex } from '@chakra-ui/react';
import Head from 'next/head';
import { Footer } from '../components/Footer';
import { Hero } from '../components/Hero';
import { Navbar } from '../components/Navbar';

export default function Home() {
  return (
    <div>
      <Head>
        <title>SuaLoja</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Flex
        marginX={56}
        marginY={3.5}
        direction="column"
        minHeight="calc(100vh - 72px)"
      >
        <Navbar />
        <Hero />
      </Flex>
      <Footer />
    </div>
  );
}
