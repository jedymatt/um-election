<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDepartmentRequest;
use App\Http\Requests\Admin\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $departments = Department::orderBy('name')->get();
        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDepartmentRequest $request
     * @return Application|Factory|View
     */
    public function store(StoreDepartmentRequest $request)
    {
        Department::create($request->validated());

        return redirect()->route('admin.departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Department $department
     * @return Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Department $department
     * @return Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDepartmentRequest $request
     * @param Department $department
     * @return Response
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Department $department
     * @return Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
