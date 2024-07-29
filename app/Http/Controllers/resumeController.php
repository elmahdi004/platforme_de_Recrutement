<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class resumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docs'
        ]);
        $file = $request->file('file');
        $path = Storage::putFileAs('resume',$file,$file->getClientOriginalName());
        $user = Auth::guard('candidates')->user()->id;
        Candidate::find($user)->update([
            'cv' => $file->getClientOriginalName(),
            'extension' =>$file->getClientOriginalExtension()
        ]);
        // return response(['path' => $path,'name' => basename($path)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
    public function destroy()
    {
        $user = Auth::guard('candidates')->user()->id;
        $oldResume = Candidate::find($user);
        Storage::delete('resume/'.$oldResume->cv);
        Candidate::find($user)->update([
            'cv' => '',
            'extension' => ''
        ]);
    }
}
