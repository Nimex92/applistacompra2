<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('./categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        // Ejemplo de enviar una notificación emergente de éxito
        session()->flash('popup_notification', [
            'message' => '¡Operación exitosa!',
            'type' => 'success',
        ]);

        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Category $category)
    {
        //Retrieve the endpoint id from the request
        
        $category = Category::find($category->id);
        $category->delete();
        return redirect()->route('categories');
    }
}
