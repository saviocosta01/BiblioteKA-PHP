import {createContext} from "react"
import { TChildren, TContext, TUsers } from "./@types"
import { api } from "../service/api"
import { useNavigate } from "react-router-dom"
import { toast } from "react-toastify"

export const UserContext = createContext<TContext>({} as TContext)

export const UserProvider = ({children}: TChildren) => {

    const navigate = useNavigate()

    const RegisterResponse = async(data: TUsers) => {
        try{
            await api.post("/users", data)
            toast.success("Conta criada com sucesso")
            navigate("/login")

        }catch(err){
            console.log(err)
        }
    }

    return(
        <UserContext.Provider value={{RegisterResponse}}>
            {children}
        </UserContext.Provider>
    )
}