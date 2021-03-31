import { Heading, useColorModeValue } from "@chakra-ui/react";

export function NavLogo() {
  return (
    <Heading
      size="md"
      fontWeight={600}
      color={useColorModeValue("gray.600", "gray.200")}
    >
      SuaLoja
    </Heading>
  );
}
