/* eslint-disable react/jsx-props-no-spreading */
import {
  Avatar,
  Box,
  Button,
  Divider,
  Flex,
  FlexProps,
  Heading,
  Text,
  useColorModeValue,
} from '@chakra-ui/react';
import {
  BiBasket,
  BiCog,
  BiCollection,
  BiLogOut,
  BiUser,
} from 'react-icons/bi';

export const DashboardLayout: React.FC<FlexProps> = (props) => {
  const { children } = props;

  return (
    <Flex>
      <Flex
        direction="column"
        width={64}
        h="100vh"
        paddingX={4}
        paddingY={8}
        borderRight="1px"
        background={useColorModeValue('white', 'gray.800')}
        borderColor={useColorModeValue('gray.200', 'gray.600')}
      >
        <Heading size="lg">Victor Shop</Heading>

        <Flex
          direction="column"
          justifyContent="space-between"
          marginTop={12}
          flex={1}
        >
          <Box>
            <Button
              fontWeight="medium"
              leftIcon={<BiBasket />}
              paddingX={4}
              variant="outline"
              width="100%"
              justifyContent="flex-start"
              color={useColorModeValue('gray.600', 'gray.50')}
            >
              <Text marginX={2}>Produtos</Text>
            </Button>

            <Button
              marginTop={5}
              fontWeight="medium"
              leftIcon={<BiCollection />}
              paddingX={4}
              variant="outline"
              width="100%"
              justifyContent="flex-start"
              color={useColorModeValue('gray.600', 'gray.50')}
            >
              <Text marginX={2}>Categorias</Text>
            </Button>

            <Button
              marginTop={5}
              fontWeight="medium"
              leftIcon={<BiCog />}
              paddingX={4}
              variant="outline"
              width="100%"
              justifyContent="flex-start"
              color={useColorModeValue('gray.600', 'gray.50')}
            >
              <Text marginX={2}>Configurações</Text>
            </Button>

            <Divider marginY={6} />

            <Button
              fontWeight="medium"
              leftIcon={<BiUser />}
              paddingX={4}
              variant="outline"
              width="100%"
              justifyContent="flex-start"
              color={useColorModeValue('gray.600', 'gray.50')}
            >
              <Text marginX={2}>Conta</Text>
            </Button>

            <Button
              marginTop={5}
              fontWeight="medium"
              leftIcon={<BiLogOut />}
              paddingX={4}
              variant="outline"
              width="100%"
              justifyContent="flex-start"
              color={useColorModeValue('gray.600', 'gray.50')}
            >
              <Text marginX={2}>Sair</Text>
            </Button>
          </Box>

          <Flex alignItems="center" paddingX={4} marginX={-2}>
            <Avatar
              size="md"
              marginX={2}
              objectFit="cover"
              name="Victor Guedes"
            />
            <Text marginX={2} fontWeight="medium">
              Victor Guedes
            </Text>
          </Flex>
        </Flex>
      </Flex>
      <Flex width="100vw" {...props}>
        {children}
      </Flex>
    </Flex>
  );
};
