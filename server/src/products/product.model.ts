export interface Product {
  readonly id: string;
  slug?: string;
  name: string;
  description: string;
  price: number;
}
