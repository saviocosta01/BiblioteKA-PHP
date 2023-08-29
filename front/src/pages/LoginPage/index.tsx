import { TextField, Button } from "@mui/material";
import { Link } from "react-router-dom";

export const LoginPage = () => {
  return (
    <main className="w-full h-screen flex items-center justify-center">
      <section className="bg-white flex flex-col w-4/5 h-4/5 rounded-2xl md:w-2/3 md:flex-row md:h-2/4">
        <div className="h-2/4 bg-black w-full md:h-full"></div>
        <form className="w-full flex flex-col gap-5 p-5 md:h-full justify-center">
          <h2>login</h2>
          <TextField id="outlined-basic" label="Email" variant="outlined" />
          <TextField id="outlined-basic" label="Senha" variant="outlined" />
          <div className="flex gap-5 items-center">
            <Button variant="contained">Entar</Button>

            <Link to={"/register"}>
              <Button variant="contained">Registrar</Button>
            </Link>
          </div>
        </form>
      </section>
    </main>
  );
};
