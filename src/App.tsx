import React from 'react';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Layout from './_root/layout';
import Home from './_root/pages/Home';

function App() {
  return (
    <BrowserRouter>
      <Layout>
        <Routes>
          <Route path="/" element={<Home />} />
        </Routes>
      </Layout>
    </BrowserRouter>
  );
}

export default App;
