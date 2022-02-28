<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreElectionRequest;
use App\Http\Requests\UpdateElectionRequest;
use App\Models\Election;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use function view;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.elections.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.elections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreElectionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreElectionRequest $request)
    {
        return redirect()->route('admin.elections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Election $election
     * @return Application|Factory|View
     */
    public function show(Election $election)
    {
        return view('admin.elections.show', compact('election'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Election $election
     * @return Application|Factory|View
     */
    public function edit(Election $election)
    {
        return view('admin.elections.edit', compact('election'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateElectionRequest $request
     * @param Election $election
     * @return RedirectResponse
     */
    public function update(UpdateElectionRequest $request, Election $election)
    {
        return redirect()->route('admin.elections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Election $election
     * @return RedirectResponse
     */
    public function destroy(Election $election)
    {
        return redirect()->route('admin.elections.index');
    }
}
