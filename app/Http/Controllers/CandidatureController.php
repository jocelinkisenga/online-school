<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use Auth;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatures = Candidature::orderBy('id','desc')->get();
        
        return view('admin.review',['candidatures'=>$candidatures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user_id = Auth::user()->id;
        Candidature::create(['user_id' =>$user_id]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function update(int $id)
    {
        $candidature_update = Candidature::find($id);
       
        $candidature_update->update(['confirmed'=>1]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidature $candidature)
    {
        //
    }
}
