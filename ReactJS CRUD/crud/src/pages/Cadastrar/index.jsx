import estilo from "./Cadastrar.module.css";
import React, { useState, useEffect } from "react";
//import {Table, Titulo} from "./styles";

export const Cadastrar = () => {

  const [produto, setProduto] = useState({
      titulo: "",
      descricao: ""
  })

  const valorInput = (e) => setProduto({...produto, [e.target.name]:e.target.value})


  const cadastrarProduto = async e => {
      e.preventDefault()
      console.log(produto.titulo)
      console.log(produto.descricao)
  }

  return (
    <div>
      <h1 className={estilo.titulo}>Cadastrar</h1>
     <form onSubmit={cadastrarProduto}>
        <label>Título</label>
        <input type="text" name="titulo" placeholder="Digite o título do produto" onChange={valorInput}/><br /><br />
        <label>Descrição</label>
        <input type="text" name="descricao" placeholder="Digite a descrição" onChange={valorInput}/><br /><br />

        <button type="submit">Cadastrar</button>
     </form>
    </div>
  );
}


