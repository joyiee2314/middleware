<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 100,
            'quantity' => 50,
            'category' => 'Category A'
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 150,
            'quantity' => 30,
            'category' => 'Category B'
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 200,
            'quantity' => 20,
            'category' => 'Category A'
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json ([
            "message" => "Display product with ID:" . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json ([
            "message" => "Product with ID: " . $id ." update successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json ([
            "message" => "Product with ID: " . $id ." deleted successfully"
        ]);
    }
}

