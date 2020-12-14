import React from 'react';
import uuid from 'react-uuid';
import FormularioNome from '../../components/formulario';
import Pessoas from '../../components/Pessoas';



const Sobrenome = () => {
    const [dados, setDados] = React.useState([]);
    
    function adicionarPessoas(nome, sobrenome){
        const id = uuid();
        setDados([...dados, {id, nome, sobrenome}]);

    }




    function removerPessoas(id){
        setDados(dados.filter((dado) => dado.id !== id));
    }

    return (
        <div>
            <h1>Lista de Pessoas</h1>

                    <ul className="list-group">
                {dados.map((dado) => (
                    <Pessoas key={dado.id} pessoas={dado} removerPessoas={removerPessoas} />
                ))}
            </ul>




      
            <hr />

            <FormularioNome adicionar={adicionarPessoas} />

        </div>
    )
}

export default Sobrenome
