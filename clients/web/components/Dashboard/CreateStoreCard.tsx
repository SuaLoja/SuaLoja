import { Flex, Heading, Icon } from '@chakra-ui/react';
import { FiPlus } from 'react-icons/fi';

export const CreateStoreCard: React.FC = () => {
  return (
    <Flex
      borderWidth="2px"
      borderRadius="lg"
      borderStyle="dashed"
      direction="row"
      alignItems="center"
      justifyContent="center"
      minW="xs"
      as="a"
    >
      <Icon as={FiPlus} w={8} h={8} />
      <Heading marginLeft={2} size="md">
        Criar loja
      </Heading>
    </Flex>
  );
};
