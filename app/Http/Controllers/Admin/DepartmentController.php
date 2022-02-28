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
use Illuminate\Support\Facades\Gate;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('name')->get();
        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDepartmentRequest $request
     * @return \Illuminate\Http\RedirectResponse
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
     * @return Application|Factory|View
     */
    public function show(Department $department)
    {
        return view('admin.departments.show', compact('department'));
    }
}
