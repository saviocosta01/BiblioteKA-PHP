import {Routes, Route} from "react-router-dom"
import { DashboardPage } from "./pages/DashboardPage"
import { LoginPage } from "./pages/LoginPage"
import { RegisterPage } from "./pages/RegisterPage"

export const Router = () => {
    return(
        <Routes>
            <Route path="/" element={<DashboardPage />}/>
            <Route path="/login" element={<LoginPage />}/>
            <Route path="/register" element={<RegisterPage />}/>
        </Routes>
    )
}
