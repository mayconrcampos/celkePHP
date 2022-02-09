import React from "react";
import { Route, Routes, Link } from "react-router-dom";
import { Cadastrar } from "./pages/Cadastrar";
import { Home } from "./pages/Home"

export default function App() {

  return (
    <div className="App">

        
  
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/cadastrar" element={<Cadastrar />}/> 
        </Routes>

        
    </div>
  );
}

