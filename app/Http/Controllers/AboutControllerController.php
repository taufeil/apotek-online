<?php

namespace App\Http\Controllers;

use App\Models\AboutController;
use Illuminate\Http\Request;

class AboutControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about.index', [
            'title' => 'about'
        ]);
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
    public function show(AboutController $aboutController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutController $aboutController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutController $aboutController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutController $aboutController)
    {
        //
    }
}
