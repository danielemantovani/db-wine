<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWineRequest;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineControllerRes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $winesObj = Wine::all();

        return view('wines.index', compact('winesObj'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWineRequest $request)
    {
        $data = $request->validated();
        $newWine = new Wine();
        $newWine->fill($data);
        $newWine->save();
        return redirect()->route('wines.show', ['wine' => $newWine->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        return view ('wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wine $wine)
    {
        $data = $request->all();
        $wine->update($data);
        return redirect()->route('wines.show', ['wine' => $wine->id])->with('message', 'Il vino '. $wine->wine .' è stato modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();
        return redirect()->route('wines.index')->with('message', 'Il vino '. $wine->wine .' è stato cancellato');
    }
}
