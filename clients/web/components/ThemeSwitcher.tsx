import { IconButton, useColorMode } from '@chakra-ui/react';
import { FiMoon, FiSun } from 'react-icons/fi';

export const ThemeSwitcher = (props) => {
  const { colorMode, toggleColorMode } = useColorMode();

  return (
    <IconButton
      aria-label="Theme Switcher"
      icon={colorMode === 'dark' ? <FiMoon /> : <FiSun />}
      isRound
      onMouseDown={toggleColorMode}
      {...props}
    />
  );
};
