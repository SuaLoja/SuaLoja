import dynamic from 'next/dynamic';

const ReactAdmin = dynamic(
  () => import('../../components/Dashboard/ReactAdmin'),
  {
    ssr: false,
  },
);

export default function Dashboard() {
  return <ReactAdmin />;
}
