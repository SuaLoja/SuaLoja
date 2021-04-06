import { Avatar, Divider, Flex, Heading, Stack } from '@chakra-ui/react';
import { FiLogOut, FiSettings, FiShoppingCart } from 'react-icons/fi';
import { CreateStoreCard } from '../../components/Dashboard/CreateStoreCard';
import { SidebarButton } from '../../components/Dashboard/SidebarButton';
import { StoreCard } from '../../components/Dashboard/StoreCard';
import { BaseLayout } from '../../layouts/BaseLayout';

export default function Dashboard() {
  return (
    <>
      <BaseLayout marginY={16} direction="row">
        <Flex direction="column">
          <Stack spacing={4} direction="row" alignItems="center">
            <Avatar size="md" name="Victor Guedes" bg="brand.500" />
            <Heading size="md">Victor Guedes</Heading>
          </Stack>
          <Stack marginTop={10}>
            <SidebarButton icon={<FiShoppingCart />} label="Lojas" />
            <SidebarButton icon={<FiSettings />} label="Configurações" />
            <Divider />
            <SidebarButton icon={<FiLogOut />} label="Sair" />
            <Divider />
          </Stack>
        </Flex>
        <Flex direction="column" marginLeft={24}>
          <Heading size="lg">Lojas</Heading>
          <Stack marginTop={10} spacing={4} direction="row">
            <StoreCard storeName="Victor Shop" isActive={false} />
            <CreateStoreCard />
          </Stack>
        </Flex>
      </BaseLayout>
    </>
  );
}
