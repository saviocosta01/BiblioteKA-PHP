import { Button } from "@mui/material";
import { Link } from "react-router-dom";

export const NavBar = () => {
  return (
    <nav className="flex bg-white w-3/4 h-20 mt-3 gap-5 justify-center items-center rounded-2xl md:hidden">
      <Link to={"/"}>
        <Button variant="contained">Home</Button>
      </Link>
      <Link to={"/login"}>
        <Button variant="contained">Login</Button>
      </Link>
    </nav>
  );
};
