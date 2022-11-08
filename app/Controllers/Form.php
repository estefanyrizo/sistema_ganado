<?php

namespace App\Controllers;

use Config\Services;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('login', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
        ];        

        if (! $this->validate($rules)) {
            return view('signin', [
                'login' => $this->validator,
            ]);
        }

        return view('success');
    }
}