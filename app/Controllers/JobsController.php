<?php

namespace App\Controllers;

class JobsController extends BaseController
{
    public function index(): string
    {
        return view('templates/header').view('jobslisting').view('templates/footer');
    }
}
