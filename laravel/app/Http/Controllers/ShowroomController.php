<?php

namespace GTImports\Http\Controllers;

use Session;
use GTImports\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showroom = Showroom::orderBy('created_at', 'desc')->get();
        return view('showroom.index', ['showroom' => $showroom]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('showroom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'price' => 'required|integer',
            'miles' => 'required|integer',
            'kilometres' => 'required|integer',
            'model' => 'required|string',
            'chassis' => 'required|string|max:10',
            'manufacture' => 'required|integer',
            'color' => 'required|string|max:30',
            'fueltype' => 'required|string',
            'transmission' => 'required',
            'exteriorfeature' => 'string',
            'interiorfeature' => 'string',
            'safetyfeature' => 'string',
            'audiofeature' => 'string',
        ]);

        Showroom::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'price' => $request['price'],
            'miles' => $request['miles'],
            'kilometres' => $request['kilometres'],
            'model' => $request['model'],
            'chassis' => $request['chassis'],
            'manufacture' => $request['manufacture'],
            'color' => $request['color'],
            'fueltype' => $request['fueltype'],
            'transmission' => $request['transmission'],
            'exteriorfeature' => $request['exteriorfeature'],
            'interiorfeature' => $request['interiorfeature'],
            'safetyfeature' => $request['safetyfeature'],
            'audiofeature' => $request['audiofeature'],
        ]);

        Session::flash('success_msg', 'Gebruiker successvol toegevoegd!');

        return redirect()->route('showroom.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showroom.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showroom = Showroom::find($id);

        return view('showroom.edit', ['showroom' => $showroom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'price' => 'integer',
            'miles' => 'integer',
            'kilometres' => 'integer',
            'model' => 'string',
            'chassis' => 'string|max:10',
            'manufacture' => 'integer',
            'color' => 'string|max:30',
            'fueltype' => 'string',
            'transmission' => 'required',
            'exteriorfeature' => 'string',
            'interiorfeature' => 'string',
            'safetyfeature' => 'string',
            'audiofeature' => 'string',
        ]);

        $input = $request->all();
        Showroom::find($id)->update($input);

        Session::flash('success_msg', 'Gebruiker successvol toegevoegd!');

        return redirect()->route('showroom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Showroom::findOrFail($id)->delete();

        Session::flash('success_msg', 'Gebruiker successvol verwijderd!');

        return redirect()->route('showroom.index');
    }
}
