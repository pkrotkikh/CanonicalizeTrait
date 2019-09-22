<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Test Canonicalize Trait
     *
     * @return mixed
     */
    public function index()
    {
        $dataForCreating = [
            'name' => 'John Doe',
            'email' => 'JohnDoe@gmail.com',
            'password' => encrypt('Johndoe1978'),
        ];
        $user = User::create($dataForCreating);

        $dataForUpdating = [
            'name' => 'Sebastian Lagua',
        ];

        $user->update($dataForUpdating);

        return $user;
    }
}
