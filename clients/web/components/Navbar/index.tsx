import { Button, Flex, Spacer, Stack } from '@chakra-ui/react';
import { ThemeSwitcher } from '../ThemeSwitcher';
import { NavLink } from './NavLink';
import { NavLogo } from './NavLogo';

export const Navbar: React.FC = () => {
  return (
    <Flex width="100%" alignItems="center">
      <NavLogo />
      <Spacer />
      <Spacer /* Just to all links be in the center, will be removed later */ />
      <Stack direction="row" spacing={4}>
        <NavLink text="Sobre" />
        <NavLink text="Funcionalidades" />
        <NavLink text="Documentação" />
      </Stack>
      <Spacer />
      <Stack direction="row" spacing={4}>
        <Button fontSize="sm" fontWeight={600} variant="ghost">
          Login
        </Button>
        <Button
          fontSize="sm"
          fontWeight={600}
          color="white"
          bg="brand.400"
          _hover={{
            bg: 'brand.300',
          }}
        >
          Registrar-se
        </Button>
        <ThemeSwitcher variant="ghost" />
      </Stack>
    </Flex>
  );
};
