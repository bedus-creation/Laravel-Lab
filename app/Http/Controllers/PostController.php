<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PostController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show($id)
    {
        return Product::with('attributes')->find($id);
    }
    public function edit($id)
    {
        $data = Product::with('attributes')->find($id);
        return view('edit', compact('data'));
    }
    public function store(Request $request)
    {
        $product = Product::create(['name' => 'Allen Khawas', 'details' => 'He is highly intellegence/.']);
        $data = collect($request->keys)->zip($request->values)
            ->map(function ($item) {
                return [
                    "key" => $item[0],
                    "value" => $item[1]
                ];
            });
        $data->each(function ($item) use ($product) {
            $product->attributes()->create($item);
        });
        return redirect()->to('posts/' . $product->id);
    }
}
