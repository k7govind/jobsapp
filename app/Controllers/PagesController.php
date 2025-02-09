<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class PagesController extends BaseController
{
    public function index(): string
    {
        if(uri_string('about')) {
            return view('templates/header').view('pages/about').view('templates/footer');
        } else if(uri_string('contact')) {
            return view('templates/header').view('pages/contact').view('templates/footer');
        } else {
            throw new PageNotFoundException("Searched Page not Found, Please provide valid URL.");
        }
    }
}
