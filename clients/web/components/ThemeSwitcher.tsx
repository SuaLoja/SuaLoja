/* eslint-disable react/jsx-props-no-spreading */

import { IconButton, useColorMode } from '@chakra-ui/react';
import React from 'react';
import { FiMoon, FiSun } from 'react-icons/fi';

export const ThemeSwitcher: React.FC = (props) => {
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
