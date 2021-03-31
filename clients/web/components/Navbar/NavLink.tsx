import { Link, useColorModeValue } from "@chakra-ui/react";

interface NavLinkProps {
  text: string;
}

export function NavLink(props: NavLinkProps) {
  return (
    <Link fontWeight={500} color={useColorModeValue("gray.600", "gray.200")}>
      {props.text}
    </Link>
  );
}
