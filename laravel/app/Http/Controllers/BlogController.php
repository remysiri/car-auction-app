<?php

namespace GTImports\Http\Controllers;

use Illuminate\Http\Request;
use GTImports\Blog;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
            'summary' => 'required|string',
            'description' => 'required|string',
        ]);

        Blog::create([
            'title' => $request['title'],
            'summary' => $request['summary'],
            'description' => $request['description'],
        ]);

        Session::flash('success_msg', 'Gebruiker successvol toegevoegd!');

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('blog.edit', ['blog' => $blog]);
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
            'summary' => 'required|string',
            'description' => 'required|string',
        ]);

        $input = $request->all();
        Blog::find($id)->update($input);

        Session::flash('success_msg', 'Gebruiker successvol toegevoegd!');

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        Session::flash('success_msg', 'Gebruiker successvol verwijderd!');

        return redirect()->route('blog.index');
    }
}
