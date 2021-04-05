import { Button } from '@chakra-ui/react';

interface SidebarButtonProps {
  icon: React.ReactElement;
  label: string;
}

export const SidebarButton: React.FC<SidebarButtonProps> = (props) => {
  const { icon, label } = props;

  return (
    <Button justifyContent="flex-start" leftIcon={icon} variant="ghost">
      {label}
    </Button>
  );
};
