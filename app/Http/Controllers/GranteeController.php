<?php

namespace App\Http\Controllers;

use App\Models\Grantee;
use Illuminate\Http\Request;

class GranteeController extends Controller
{
    public function index()
    {
        $grantees = Grantee::all();
        return view('grantees.index', compact('grantees'));
    }

    public function create()
    {
        return view('grantees.create');
    }

    public function store(Request $request)
    {
        Grantee::create($request->all());
        return redirect()->route('grantees.index');
    }

    public function show($id)
    {
        $grantee = Grantee::findOrFail($id);
        return view('grantees.show', compact('grantee'));
    }

    public function edit($id)
    {
        $grantee = Grantee::findOrFail($id);
        return view('grantees.edit', compact('grantee'));
    }

    public function update(Request $request, $id)
    {
        $grantee = Grantee::findOrFail($id);
        $grantee->update($request->all());
        return redirect()->route('grantees.index');
    }

    public function destroy($id)
    {
        $grantee = Grantee::findOrFail($id);
        $grantee->delete();
        return redirect()->route('grantees.index');
    }
}
