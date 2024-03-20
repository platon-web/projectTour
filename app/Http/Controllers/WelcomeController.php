<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Post;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $tours = Tour::all();
      return view('welcome', ['tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('welcome/show', ['tour' => Tour::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function category()
    // {
    //     $categories = Category::all();
    //     return view('welcome.category', ['categories' => $categories]);
    // }
    public function showCategory() {
        return view('welcome.category', ['categories' => Category::all()]);
    }
    public function showPost() {
        return view('welcome.post', ['posts' => Post::all()]);
    }
  
}
