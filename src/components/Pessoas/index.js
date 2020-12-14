import React from 'react'

const Pessoas = ({pessoas, removerPessoas}) => {
    return (
        <li className="list-group-item">
            {pessoas.nome} {pessoas.sobrenome}
            <a href="#" onClick={() => removerPessoas(pessoas.id)}> Excluir</a>    
        </li>
    )
}   

export default Pessoas
