<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produtos extends BaseController
{
    protected $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function index()
    {
        $data['produtos'] = $this->produtoModel->findAll();
        return view('produtos/index', $data);
    }

    public function create()
    {
        return view('produtos/create');
    }

    public function store()
    {
        $this->produtoModel->save([
            'nome' => $this->request->getPost('nome'),
            'preco' => $this->request->getPost('preco'),
        ]);

        return redirect()->to('/produtos/listar');
    }

    public function edit($id)
    {
        $data['produto'] = $this->produtoModel->find($id);
        return view('produtos/edit', $data);
    }

    public function update($id)
    {
        $this->produtoModel->save([
            'id' => $id,
            'nome' => $this->request->getPost('nome'),
            'preco' => $this->request->getPost('preco'),
        ]);

        return redirect()->to('/produtos/listar');
    }

    public function delete($id)
    {
        $this->produtoModel->delete($id);
        return redirect()->to('/produtos/listar');
    }
}