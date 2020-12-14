import React from 'react'

const FormularioNome = ({adicionar}) => {

    const [nome, setNome] = React.useState('');
    const [sobrenome, setSobrenome] = React.useState('');

    function submeterForm(e){
        e.preventDefault();

        adicionar(nome, sobrenome)

        setNome('');
        setSobrenome('');
    }
    

    return (
        <form onSubmit={submeterForm}> 
            <div className="form-group">
                <label htmlFor="nome">Nome:</label>
                <input type="text" className="form-control" id="nome" name="nome" value={nome}
                onChange={e => setNome(e.target.value)}/>
            </div>

            <div className="form-group">
                <label htmlFor="sobrenome">Sobrenome:</label>
                <input type="text" className="form-control" id="sobrenome" name="sobrenome" value={sobrenome}
                onChange={e => setSobrenome(e.target.value)}/>
            </div>    
            <br />
            
            <button type="submit" className="btn btn-secondary">Salvar</button>
        </form>
    )
}

export default FormularioNome
