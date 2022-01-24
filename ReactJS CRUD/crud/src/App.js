import React from "react";
import { Route, Routes, Link } from "react-router-dom";
import { Home } from "./pages/Home"

export default function App() {

  return (
    <div className="App">
  
        <Routes>
          <Route path="/" element={<Home />} />
        </Routes>
    </div>
  );
}

