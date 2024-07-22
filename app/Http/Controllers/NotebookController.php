<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;
use App\Models\Verse;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notebook = Notebook::paginate(20);
        return view('notebook.index', compact('notebook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $month = strtolower(date('F'));
        $currentDay = date('j');
        $verses = Verse::where('month', strtolower($month))->where('day', $currentDay)->orderBy('day')->get()->groupBy('day');

        return view('notebook.create', compact('verse', 'currentDay', 'verses', 'month'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
