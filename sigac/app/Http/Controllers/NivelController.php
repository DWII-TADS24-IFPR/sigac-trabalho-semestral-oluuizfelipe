<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $niveis = Nivel::orderBy('nome')->paginate(10);
        return view('admin.niveis.index', compact('niveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.niveis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255|unique:niveis,nome',
        ]);

        Nivel::create($validatedData);
        return redirect()->route('admin.niveis.index')
                        ->with('success', 'Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nivel $nivel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nivel $nivel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nivel $nivel)
    {
        //
    }
}
