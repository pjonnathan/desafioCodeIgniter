<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Clientes extends BaseController
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        $data['clientes'] = $this->clienteModel->findAll();
        return view('clientes/index', $data);
    }

    public function create()
    {
        return view('clientes/create');
    }

    public function store()
    {
        $this->clienteModel->save([
            'CPF_CNPJ' => $this->request->getPost('CPF_CNPJ'),
            'NOME_RAZAO_SOCIAL' => $this->request->getPost('NOME_RAZAO_SOCIAL'),
        ]);

        return redirect()->to('/clientes/listar/');
    }

    public function edit($id)
    {
        $data['cliente'] = $this->clienteModel->find($id);
        return view('clientes/edit', $data);
    }

    public function update($id)
    {
        $this->clienteModel->save([
            'id' => $id,
            'CPF_CNPJ' => $this->request->getPost('CPF_CNPJ'),
            'NOME_RAZAO_SOCIAL' => $this->request->getPost('NOME_RAZAO_SOCIAL'),
        ]);

        return redirect()->to('/clientes/listar/');
    }

    public function delete($id)
    {
        $this->clienteModel->delete($id);
        return redirect()->to('/clientes/listar/');
    }
}