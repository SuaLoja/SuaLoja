import Head from 'next/head';
import { BaseLayout } from '../layouts/BaseLayout';
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

      <BaseLayout minHeight="calc(100vh - 72px)">
        <Navbar />
        <Hero />
      </BaseLayout>
      <Footer />
    </div>
  );
}
