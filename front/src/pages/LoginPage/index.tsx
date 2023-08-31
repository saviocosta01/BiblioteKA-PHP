import { TextField, Button } from "@mui/material";
import { Link } from "react-router-dom";
import { Header } from "../../components/Header";

export const LoginPage = () => {
  return (
    <>
    <Header />
    <main className="w-full h-screen flex justify-center mt-5">
      <section className="bg-white flex flex-col w-4/5 h-4/5 rounded-2xl md:w-2/3 md:flex-row md:h-2/4">
        <div className="h-2/4 bg-black w-full md:h-full"></div>
        <form className="w-full flex flex-col gap-5 p-5 md:h-full justify-center">
          <h2>Login</h2>
          <TextField id="outlined-basic" label="Email" variant="outlined" />
          <TextField id="outlined-basic" label="Senha" variant="outlined" />
          <div className="flex gap-5 items-center">
            <Button variant="contained">Login</Button>

            <Link to={"/register"}>
              <Button variant="contained">Register</Button>
            </Link>
          </div>
        </form>
      </section>
    </main>
    </>
  );
};
