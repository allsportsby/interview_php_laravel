<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class ThirdPartySupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(file_get_contents(resource_path('data/suppliers.json')),200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
