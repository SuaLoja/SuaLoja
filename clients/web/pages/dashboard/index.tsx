import { Heading } from '@chakra-ui/react';
import { DashboardLayout } from '../../layouts/DashboardLayout';

export default function Dashboard() {
  return (
    <DashboardLayout justifyContent="center">
      <Heading size="xl">Index of dashboard</Heading>
    </DashboardLayout>
  );
}
