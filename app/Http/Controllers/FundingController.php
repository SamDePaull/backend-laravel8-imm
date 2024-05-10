<?php

namespace App\Http\Controllers;

use App\Models\Funding;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    public function index()
    {
        $fundings = Funding::all();
        return view('fundings.index', compact('fundings'));
    }

    public function create()
    {
        return view('fundings.create');
    }

    public function store(Request $request)
    {
        Funding::create($request->all());
        return redirect()->route('fundings.index');
    }

    public function show($id)
    {
        $funding = Funding::findOrFail($id);
        return view('fundings.show', compact('funding'));
    }

    public function edit($id)
    {
        $funding = Funding::findOrFail($id);
        return view('fundings.edit', compact('funding'));
    }

    public function update(Request $request, $id)
    {
        $funding = Funding::findOrFail($id);
        $funding->update($request->all());
        return redirect()->route('fundings.index');
    }

    public function destroy($id)
    {
        $funding = Funding::findOrFail($id);
        $funding->delete();
        return redirect()->route('fundings.index');
    }
}

