


export type TChildren = {
    children: React.ReactNode
}

export type TUsers = {
    name: string,
    email: string,
    password: string,
    address: string,
    category: string
}



export type TContext = {
    RegisterResponse: (data: TUsers) => Promise<void>
}