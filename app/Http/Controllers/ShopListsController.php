<?php

namespace App\Http\Controllers;

use App\Models\ShopLists;
use Illuminate\Http\Request;

class ShopListsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shoplists.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShopLists $shopLists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopLists $shopLists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShopLists $shopLists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopLists $shopLists)
    {
        //
    }
}
