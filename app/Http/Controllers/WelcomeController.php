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
      return view('welcome/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = request()->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|string|max:255',
        //     'short_description' => 'required|string|max:255',
        //     'description' => 'required|string|max:500',
        //     'count_days' => 'required|integer',
        // ])

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $welcome = Tour::find($id);
        return view('welcome/show', ['tour' => Tour::find($id)]);
    }

    /**
     * Show the form for editing the specified resource
     */
    public function edit(string $id)
    {
        $welcome = Tour::find($id);
        return view('tour/edit', ['tour' => $welcome]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name' => 'required|string|max:255',
        ]);
        Welcome::where('id', $id)->update($data);
        $Welcome=Tour::all($data);
        return view('tour/tour', ['tours'=>$tour]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $welcome = Tour::find($id);
        $welcome->delete();
        $welcome=Tour::all();
        return view('tour/tour', ['tours'=>$tours]);
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
