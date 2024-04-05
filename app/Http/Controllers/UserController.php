<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'age' => 30,
                'city' => 'New York',
                'country' => 'USA'
            ],
            [
                'id' => 2,
                'name' => 'Alice Smith',
                'email' => 'alice@example.com',
                'age' => 25,
                'city' => 'London',
                'country' => 'UK'
            ],
            [
                'id' => 3,
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com',
                'age' => 40,
                'city' => 'Paris',
                'country' => 'France'
            ]
        ];
         return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
