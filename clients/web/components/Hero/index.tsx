import {
  Box,
  Button,
  Container,
  Heading,
  Image,
  Stack,
  Text,
} from "@chakra-ui/react";
import { UnderlinedText } from "./UnderlinedText";

export default function Hero() {
  return (
    <Container maxW="7xl">
      <Stack align="center" spacing={10} py={28} direction="row">
        <Stack flex={1} spacing={10}>
          <Heading lineHeight={1.1} fontWeight={600} fontSize="5xl">
            <Text as="span" color="teal.400">
              Sua loja completa
            </Text>
            <br />
            <UnderlinedText bgColor="teal.400" text="em minutos!" />
          </Heading>
          <Text fontSize="xl" color="gray.500">
            Crie uma página virtual para seu negócio, coloque seus produtos,
            customize e comece a vender. Tudo isso de graça e sem nenhuma taxa.
          </Text>
          <Button
            size="lg"
            px={6}
            color="white"
            width="100%"
            bg="teal.400"
            _hover={{ bg: "teal.300" }}
          >
            Crie sua loja
          </Button>
        </Stack>
        <Box
          height="300px"
          rounded="2xl"
          boxShadow="2xl"
          width="full"
          overflow="hidden"
          flex={1}
        >
          <Image
            alt="Hero Image"
            fit="cover"
            width="100%"
            height="100%"
            src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34"
          />
        </Box>
      </Stack>
    </Container>
  );
}
