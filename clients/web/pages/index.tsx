import Head from "next/head";
import { Flex } from "@chakra-ui/react";
import { Navbar } from "../components/Navbar";
import Hero from "../components/Hero";

export default function Home() {
  return (
    <div>
      <Head>
        <title>SuaLoja</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Flex marginX={56} marginY={3.5} direction="column">
        <Navbar />
        <Hero />
      </Flex>
    </div>
  );
}