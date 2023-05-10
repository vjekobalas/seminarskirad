<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    /*before ordering by position
     public function index()
    {
        $menus = Menu::paginate(10);
        $menuNames = Menu::pluck('name')->toArray(); // get an array of all menu names
        return view('menus.index', compact('menus', 'menuNames'));
    }
    */
        public function index()
    {
        $menus = Menu::orderBy('position')->paginate(10);
        $menuNames = Menu::pluck('name', 'position');
        return view('menus.index', compact('menus', 'menuNames'));
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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
