import {
  Box,
  Button,
  Container,
  Heading,
  Image,
  Stack,
  Text,
} from '@chakra-ui/react';
import { HiArrowNarrowRight } from 'react-icons/hi';

export const Hero: React.FC = () => {
  return (
    <Container maxW="7xl">
      <Stack align="center" spacing={10} py={28} direction="row">
        <Stack flex={1} spacing={10}>
          <Heading lineHeight={1.1} fontWeight={600} fontSize="5xl">
            <Text as="span" color="brand.400">
              Sua loja completa
            </Text>
            <br />
            <Text
              as="span"
              position="relative"
              _after={{
                content: "''",
                width: 'full',
                height: '25%',
                position: 'absolute',
                bottom: 1,
                left: 0,
                bg: 'brand.400',
                zIndex: -1,
              }}
            >
              em minutos!
            </Text>
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
            bg="brand.400"
            _hover={{ bg: 'brand.300' }}
            rightIcon={<HiArrowNarrowRight />}
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
};
