import { ChakraProvider } from "@chakra-ui/react";
import Theme from "../assets/Theme";
import { Fonts } from "../assets/Fonts";

function MyApp({ Component, pageProps }) {
  return (
    <ChakraProvider theme={Theme}>
      <Fonts />
      <Component {...pageProps} />
    </ChakraProvider>
  );
}

export default MyApp;
