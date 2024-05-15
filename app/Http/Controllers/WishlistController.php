<?php

namespace App\Http\Controllers;

use App\Models\deseos;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        // Recupera la cantidad de elementos en la lista de deseos
        $count_wishlist_items = Wishlist::count();

        // Retorna la vista pasando la variable $count_wishlist_items
        return view('wishlist.index', ['count_wishlist_items' => $count_wishlist_items]);
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
    public function show(deseos $deseos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(deseos $deseos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, deseos $deseos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(deseos $deseos)
    {
        //
    }
}
