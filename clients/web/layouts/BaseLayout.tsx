/* eslint-disable react/jsx-props-no-spreading */

import { Flex, FlexProps } from '@chakra-ui/react';

export const BaseLayout: React.FC<FlexProps> = (props) => {
  const { children } = props;

  return (
    <Flex marginX={56} marginY={3.5} direction="column" {...props}>
      {children}
    </Flex>
  );
};
