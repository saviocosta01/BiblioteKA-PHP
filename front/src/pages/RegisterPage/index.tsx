import { TextField, Button } from "@mui/material";
import { Link } from "react-router-dom";
import { Header } from "../../components/Header";
import { useForm } from "react-hook-form";
import { useContext } from "react";
import { UserContext } from "../../context/UserContext";
import { TUsers } from "../../context/@types";

export const RegisterPage = () => {
  const { RegisterResponse } = useContext(UserContext);
  const { register, handleSubmit } = useForm<TUsers>();

  return (
    <>
      <Header />
      <main className="w-full h-screen flex justify-center mt-5">
        <section className="bg-white flex flex-col w-4/5 h-full rounded-2xl md:w-2/3 md:flex-row md:h-4/6">
          <div className="h-2/5 bg-black w-full md:h-full"></div>
          <form
            className="w-full h-2/4 flex flex-col gap-5 p-5 md:h-full justify-center"
            onSubmit={handleSubmit(RegisterResponse)}
          >
            <h2>Registrar</h2>
            <TextField
              id="outlined-basic"
              label="Nome"
              variant="outlined"
              {...register("name")}
            />
            <TextField
              id="outlined-basic"
              label="Email"
              variant="outlined"
              {...register("email")}
            />
            <TextField
              id="outlined-basic"
              label="Senha"
              variant="outlined"
              {...register("password")}
            />
            <TextField
              id="outlined-basic"
              label="Endereço"
              variant="outlined"
              {...register("address")}
            />
            <TextField
              id="outlined-basic"
              label="Categoria"
              variant="outlined"
              {...register("category")}
            />
            <div className="flex gap-5 items-center">
              <Button variant="contained" type="submit">
                Registar
              </Button>

              <Link to={"/login"}>
                <Button variant="contained" type="button">
                  login
                </Button>
              </Link>
            </div>
          </form>
        </section>
      </main>
    </>
  );
};
