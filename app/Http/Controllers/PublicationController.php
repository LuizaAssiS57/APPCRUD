<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::all();

        return view("publication.index", ["publications"=> $publications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PublicationCategory::all();
        return view("publication.create", ["categories"=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publication = new Publication();

        $publication->title = $request["title"];
        $publication->description = $request["description"];
        $publication->category_id = $request["category"];

        if($request->hasFile('file')){
            $fileName = now()->timestamp . '.' . $request->file('file')->getClientOriginalExtension();

            $request->file('file')->storeAs('upload', $fileName,'public');

            $publication->file = $fileName;
        }

        $publication->save();

        return redirect(route('publication.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
