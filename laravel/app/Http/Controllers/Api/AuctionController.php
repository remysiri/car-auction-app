<?php

namespace GTImports\Http\Controllers\Api;

use GTImports\Auctions;
use GTImports\Http\Resources\AuctionResource;
use Illuminate\Http\Request;
use GTImports\Http\Controllers\Controller;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $auctions = Auctions::all();

        return AuctionResource::collection($auctions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auction = Auctions::create($request->all());

        return new AuctionResource($auction);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auction = Auctions::findOrFail($id);
        $auction->toArray();

        return new AuctionResource($auction);
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
        $auction = Auctions::findOrFail($id);

        $auction->update($request->all());

        return new AuctionResource($auction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auction = Auctions::findOrFail($id);

        $auction->delete();

        return new AuctionResource($auction);
    }
}
