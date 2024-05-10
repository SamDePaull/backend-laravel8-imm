<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        $bootcamps = Bootcamp::all();
        return view('bootcamps.index', compact('bootcamps'));
    }

    public function create()
    {
        return view('bootcamps.create');
    }

    public function store(Request $request)
    {
        Bootcamp::create($request->all());
        return redirect()->route('bootcamps.index');
    }

    public function show($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        return view('bootcamps.show', compact('bootcamp'));
    }

    public function edit($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        return view('bootcamps.edit', compact('bootcamp'));
    }

    public function update(Request $request, $id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->update($request->all());
        return redirect()->route('bootcamps.index');
    }

    public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        return redirect()->route('bootcamps.index');
    }
}
