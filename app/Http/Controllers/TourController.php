<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour/tour', ['tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('tour/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
           'name' => 'required|string|max:255',
           'price' => 'required|integer',
           'short_description' => 'required|string|max:255',
           'description' => 'required|string|max:500',
           'image_path' => 'required|file|image|mimes:jpg,png,jpeg',
           'count_days' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            $path = $file->store('images','public');

            $data['image'] = $path;
        }

        Tour::create($data);

        return view('tour/tour', ['tours' => Tour::All()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tour = Tour::find($id);
        return view('tour/show', ['tour' => $tour]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tour = Tour::find($id);
        return view('tour/edit', ['tour' => $tour]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $data = request()->validate([
           'name' => 'required|string|max:255',
       ]);
       Tour::where('id', $id)->update($data);
       $tour=Tour::all($data);
       return view('tour/tour', ['tours'=>$tour]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $tour = Tour::find($id);
       $tour->delete();
       $tours=Tour::all();
       return view('tour/tour', ['tours'=>$tours]);
    }
}
