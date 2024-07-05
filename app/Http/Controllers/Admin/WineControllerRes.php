<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWineRequest;
use App\Http\Requests\UpdateWineRequest;
use App\Models\Aroma;
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
        $aromas = Aroma::all();

        return view('wines.create', compact('aromas'));
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
        if ($request->has('aromas')) {
            $newWine->aromas()->attach($request->aromas);
        }
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
        $aromas = Aroma::all();

        return view ('wines.edit', compact('wine', 'aromas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWineRequest $request, Wine $wine)
    {
        $data = $request->validated();
        $wine->update($data);
        $wine->aromas()->sync($request->aromas);
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
