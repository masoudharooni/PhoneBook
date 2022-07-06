<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Utilities\View;

class HomeController
{
    private object $contact;
    public function __construct()
    {
        $this->contact = new Contact();
    }
    public function index()
    {
        $data = $this->contact->get();
        View::include('home.index', $data);
    }
}
