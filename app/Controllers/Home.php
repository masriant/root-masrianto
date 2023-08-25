<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('auth/login');
    }
    public function register(): string
    {
        return view('auth/register');
    }
    public function forgot(): string
    {
        return view('auth/forgot');
    }
    public function user(): string
    {
        return view('user/index');
    }
    public function data(): string
    {
        return view('user/data');
    }
}
