<?php

// benerin routenya
namespace App\Controllers\Admin;

// benerin routenya "BaseController"
use App\Controllers\BaseController;

// jangan lupa ganti nama classnya samain kayak nama filenya
class User extends BaseController
{
    public function index(): string
    {
        return "ini bagian admin!";
    }
}

// bikin routes baru untuk admin di app>Config>routes.php
