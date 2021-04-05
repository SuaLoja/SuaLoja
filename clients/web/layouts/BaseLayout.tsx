/* eslint-disable react/jsx-props-no-spreading */

import { Flex } from '@chakra-ui/react';

interface BaseLayoutProps {
  minHeight: string;
}

export const BaseLayout: React.FC<BaseLayoutProps> = (props) => {
  const { children } = props;

  return (
    <Flex marginX={56} marginY={3.5} direction="column" {...props}>
      {children}
    </Flex>
  );
};
