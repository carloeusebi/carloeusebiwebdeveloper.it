<?php

namespace App\Http\Controllers\Dsp\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dsp\TagRequest;
use App\Models\Dsp\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tag::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        $data = $request->all();
        $tag = Tag::create($data);

        return $tag;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, string $id)
    {
        $data = $request->all();
        $tag = Tag::find($id);
        $tag->update($data);

        return $tag;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::destroy($id);
    }
}
