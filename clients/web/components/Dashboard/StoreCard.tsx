import {
  Avatar,
  Badge,
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
import { FiTrash } from 'react-icons/fi';
import { HiDotsHorizontal } from 'react-icons/hi';

interface StoreCardProps {
  storeName: string;
  isActive: boolean;
}

export const StoreCard: React.FC<StoreCardProps> = (props) => {
  const { storeName, isActive } = props;

  return (
    <Flex
      borderWidth="1px"
      borderRadius="lg"
      direction="column"
      minW="xs"
      as="a"
    >
      <Stack spacing={4} padding={4} direction="row" alignItems="center">
        <Avatar size="sm" name={storeName} bg="cyan.500" />
        <Heading size="sm">{storeName}</Heading>
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
          {isActive ? (
            <Badge borderRadius="full" px="2" colorScheme="green">
              Ativa
            </Badge>
          ) : (
            <Badge borderRadius="full" px="2" colorScheme="red">
              Desativada
            </Badge>
          )}
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
  );
};
