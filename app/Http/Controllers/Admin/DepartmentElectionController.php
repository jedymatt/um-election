<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Election;
use Illuminate\Http\Request;

class DepartmentElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function index(Department $department)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function create(Department $department)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Department $department)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department, Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department, Election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department, Election $election)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department, Election $election)
    {
        //
    }
}
