<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Contact;

class ContactController extends BaseController
{
    protected $contact;
    function __construct()
    {
        $this->contact = new Contact();
    }

    public function index()
    {
        $data['contacts'] = $this->contact->findAll();
        return view('contacts/index', $data);
    }

    public function create()
    {
        $this->contact->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect('contact')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $this->contact->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect('contact')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $this->contact->delete($id);
        return redirect('contact')->with('success', 'Data berhasil dihapus');
    }
}
