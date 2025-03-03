<?php

namespace App\Controllers;

use App\Models\PedidoModel;
use App\Models\ClienteModel;
use App\Models\ProdutoModel;

class Pedidos extends BaseController
{
    protected $pedidoModel;
    protected $clienteModel;
    protected $produtoModel;

    public function __construct()
    {
        $this->pedidoModel = new PedidoModel();
        $this->clienteModel = new ClienteModel();
        $this->produtoModel = new ProdutoModel();
    }

    public function index()
    {
        $data['pedidos'] = $this->pedidoModel->findAll();
        return view('pedidos/index', $data);
    }

    public function create()
    {
        $data['clientes'] = $this->clienteModel->findAll();
        $data['produtos'] = $this->produtoModel->findAll();
        return view('pedidos/create', $data);
    }

    public function store()
    {
        $produto = $this->produtoModel->find($this->request->getPost('produto_id'));
        $total = $produto['preco'] * $this->request->getPost('quantidade');

        $this->pedidoModel->save([
            'cliente_id' => $this->request->getPost('cliente_id'),
            'produto_id' => $this->request->getPost('produto_id'),
            'quantidade' => $this->request->getPost('quantidade'),
            'total' => $total,
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/pedidos');
    }

    public function edit($id)
    {
        $data['pedido'] = $this->pedidoModel->find($id);
        $data['clientes'] = $this->clienteModel->findAll();
        $data['produtos'] = $this->produtoModel->findAll();
        return view('pedidos/edit', $data);
    }

    public function update($id)
    {
        $produto = $this->produtoModel->find($this->request->getPost('produto_id'));
        $total = $produto['preco'] * $this->request->getPost('quantidade');

        $this->pedidoModel->save([
            'id' => $id,
            'cliente_id' => $this->request->getPost('cliente_id'),
            'produto_id' => $this->request->getPost('produto_id'),
            'quantidade' => $this->request->getPost('quantidade'),
            'total' => $total,
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/pedidos');
    }

    public function delete($id)
    {
        $this->pedidoModel->delete($id);
        return redirect()->to('/pedidos');
    }
}