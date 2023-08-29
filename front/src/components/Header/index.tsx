import { VscThreeBars } from "react-icons/vsc";
import { useState } from "react";
import { Button } from "@mui/material";
import { NavBar } from "../Nav";

export const Header = () => {
  const [isInfos, setIsInfos] = useState<boolean>(false);
  return (
    <div className="flex flex-col justify-center items-center">
    <header className="bg-white w-full h-auto flex items-center justify-between px-10 ">
      <div className="w-full h-12 flex items-center justify-between px-10">
        <h2>library</h2>
        <VscThreeBars
          className="cursor-pointer md:hidden"
          onClick={() => setIsInfos(!isInfos)}
        />
      </div>
        <nav className="hidden gap-5 md:flex">
          <Button variant="contained">Home</Button>
          <Button variant="contained">Login</Button>
        </nav>
    </header>
    {
        isInfos && <NavBar />
    }
    </div>
  );
};
