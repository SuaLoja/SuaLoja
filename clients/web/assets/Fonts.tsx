import { Global } from "@emotion/react";

export function Fonts() {
  return (
    <Global
      styles={` 
        @import 
          url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap');
      `}
    ></Global>
  );
}