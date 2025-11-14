<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|digits:4|integer',
            'preco' => 'required|numeric',
        ]);

        Carro::create($request->all());
        return redirect()->route('carros.index');
    }

    public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|digits:4|integer',
            'preco' => 'required|numeric',
        ]);

        $carro->update($request->all());
        return redirect()->route('carros.index');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index');
    }
}
