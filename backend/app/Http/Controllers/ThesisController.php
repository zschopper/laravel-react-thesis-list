<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Thesis::all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $thesis = new Thesis();
        $thesis->fill($request->all());
        $thesis->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $thesis = Thesis::findOrFail($id);
        return $thesis;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $thesis = Thesis::findOrFail($id);
        $thesis->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $thesis = Thesis::findOrFail($id);
        $ret = $thesis->toArray();
        $thesis->delete();
        return $ret;
    }
}
