import { Text } from '@chakra-ui/react';

interface UnderlinedTextProps {
  text: string;
  bgColor: string;
}

export const UnderlinedText: React.FC<UnderlinedTextProps> = (props) => {
  return (
    <Text
      as="span"
      position="relative"
      _after={{
        content: "''",
        width: 'full',
        height: '25%',
        position: 'absolute',
        bottom: 1,
        left: 0,
        bg: props.bgColor,
        zIndex: -1,
      }}
    >
      {props.text}
    </Text>
  );
};
