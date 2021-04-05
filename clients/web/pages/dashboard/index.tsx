import {
  Avatar,
  AvatarBadge,
  Box,
  Button,
  Divider,
  Flex,
  Heading,
  IconButton,
  Popover,
  PopoverArrow,
  PopoverBody,
  PopoverContent,
  PopoverTrigger,
  Portal,
  Stack,
} from '@chakra-ui/react';
import { FiLogOut, FiSettings, FiShoppingCart, FiTrash } from 'react-icons/fi';
import { HiDotsHorizontal } from 'react-icons/hi';
import { BaseLayout } from '../../layouts/BaseLayout';

export default function Dashboard() {
  return (
    <>
      <BaseLayout marginY={16} direction="row">
        <Flex direction="column">
          <Stack spacing={4} direction="row" alignItems="center">
            <Avatar size="md" name="Victor Guedes" bg="teal.500" />
            <Heading size="md">Victor Guedes</Heading>
          </Stack>
          <Stack marginTop={10}>
            <Button
              justifyContent="flex-start"
              leftIcon={<FiShoppingCart />}
              variant="ghost"
            >
              Lojas
            </Button>
            <Button
              justifyContent="flex-start"
              leftIcon={<FiSettings />}
              variant="ghost"
            >
              Configurações
            </Button>
            <Divider />
            <Button
              justifyContent="flex-start"
              leftIcon={<FiLogOut />}
              variant="ghost"
            >
              Sair
            </Button>
            <Divider />
          </Stack>
        </Flex>
        <Flex direction="column" marginLeft={24}>
          <Heading size="lg">Lojas</Heading>
          <Stack marginTop={10}>
            <Flex
              borderWidth="1px"
              borderRadius="lg"
              direction="column"
              minW="xs"
              as="a"
              href="#"
            >
              <Stack
                spacing={4}
                padding={4}
                direction="row"
                alignItems="center"
              >
                <Avatar size="sm" name="Victor Shop" bg="cyan.500">
                  <AvatarBadge boxSize={4} bg="green.500" />
                </Avatar>
                <Heading size="sm">Victor Shop</Heading>
              </Stack>
              <Divider />

              <Stack
                spacing={6}
                padding={4}
                direction="row"
                alignItems="center"
                justifyContent="space-between"
              >
                <Box
                  fontWeight="semibold"
                  as="h4"
                  lineHeight="tight"
                  isTruncated
                  color="gray.500"
                  marginLeft={4}
                >
                  1000 visitas/mes
                </Box>
                <Popover size="sm">
                  <PopoverTrigger>
                    <IconButton
                      aria-label="Opções da loja"
                      icon={<HiDotsHorizontal />}
                      variant="ghost"
                      size="sm"
                    />
                  </PopoverTrigger>
                  <Portal>
                    <PopoverContent>
                      <PopoverArrow />
                      <PopoverBody>
                        <Button
                          justifyContent="flex-start"
                          leftIcon={<FiTrash />}
                          variant="ghost"
                          width="100%"
                        >
                          Excluir loja
                        </Button>
                      </PopoverBody>
                    </PopoverContent>
                  </Portal>
                </Popover>
              </Stack>
            </Flex>
          </Stack>
        </Flex>
      </BaseLayout>
    </>
  );
}
