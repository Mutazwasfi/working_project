<?php

namespace App\Http\Controllers;

use App\Models\working_project;
use Illuminate\Http\Request;

class WorkingProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = working_project::all();
        return view('index', ['records' => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name' => 'required|max:255',
        'qty' => 'required|numeric',
        'price' => 'required|decimal:0,2',
        'description' => 'nullable',
        ]);

        $result = working_project::create($request->all());
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\working_project  $working_project
     * @return \Illuminate\Http\Response
     */
    public function show(working_project $working_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\working_project  $working_project
     * @return \Illuminate\Http\Response
     */
    public function edit(working_project $working_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\working_project  $working_project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, working_project $working_project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\working_project  $working_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(working_project $working_project)
    {
        //
    }
}
