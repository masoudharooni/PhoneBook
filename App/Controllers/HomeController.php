<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private object $contact;
    public function __construct()
    {
        $this->contact = new Contact();
    }
    public function index()
    {
        $contacts = $this->contact->get();
    }
}
