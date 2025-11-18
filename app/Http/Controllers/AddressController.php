<?php

namespace App\Http\Controllers;

use App\Models\Address;

class AddressController extends Controller
{
    public function index() {
        return Address::all();
    }
}
