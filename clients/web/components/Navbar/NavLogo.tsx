import { Heading, useColorModeValue } from '@chakra-ui/react';

export const NavLogo: React.FC = () => {
  return (
    <Heading
      size="md"
      fontWeight={600}
      color={useColorModeValue('gray.600', 'gray.200')}
    >
      SuaLoja
    </Heading>
  );
};
