import {
  Box,
  Heading,
  IconButton,
  Spacer,
  Stack,
  useColorModeValue,
} from "@chakra-ui/react";
import { FaGithub } from "react-icons/fa";

export function Footer() {
  return (
    <Box bg={useColorModeValue("gray.50", "gray.900")} marginTop={100}>
      <Stack
        direction="row"
        spacing={4}
        py={4}
        justify="space-between"
        align="center"
        marginX={56}
      >
        <Heading fontWeight={500} size="sm">
          SuaLoja {new Date().getFullYear()}
        </Heading>
        <Spacer />
        <IconButton
          aria-label="Github"
          icon={<FaGithub />}
          bg="teal.400"
          _hover={{ bg: "teal.300" }}
          color="white"
          as="a"
          href="https://github.com/SuaLoja"
          target="__blank"
        />
      </Stack>
    </Box>
  );
}
