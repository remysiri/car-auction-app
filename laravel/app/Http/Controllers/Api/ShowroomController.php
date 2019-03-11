<?php

namespace GTImports\Http\Controllers\Api;

use GTImports\Http\Resources\ShowroomResource;
use GTImports\Showroom;
use Illuminate\Http\Request;
use GTImports\Http\Controllers\Controller;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $showroom = Showroom::all();
        return ShowroomResource::collection($showroom);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $showroom = Showroom::create($request->all());
        return new ShowroomResource($showroom);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showroom = Showroom::findOrFail($id);
        $showroom->toArray();

        return new ShowroomResource($showroom);
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
        $showroom = Showroom::findOrFail($id);
        $showroom->update($request->all());

        return new ShowroomResource($showroom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showroom = Showroom::findOrFail($id);
        $showroom->delete();

        return new ShowroomResource($showroom);
    }
}
