<?php

namespace App\Http\Controllers;

use App\Models\Grant;
use Illuminate\Http\Request;

class GrantController extends Controller
{
    public function index()
    {
        $grants = Grant::all();
        return view('grants.index', compact('grants'));
    }

    public function create()
    {
        return view('grants.create');
    }

    public function store(Request $request)
    {
        Grant::create($request->all());
        return redirect()->route('grants.index');
    }

    public function show($id)
    {
        $grant = Grant::findOrFail($id);
        return view('grants.show', compact('grant'));
    }

    public function edit($id)
    {
        $grant = Grant::findOrFail($id);
        return view('grants.edit', compact('grant'));
    }

    public function update(Request $request, $id)
    {
        $grant = Grant::findOrFail($id);
        $grant->update($request->all());
        return redirect()->route('grants.index');
    }

    public function destroy($id)
    {
        $grant = Grant::findOrFail($id);
        $grant->delete();
        return redirect()->route('grants.index');
    }
}
