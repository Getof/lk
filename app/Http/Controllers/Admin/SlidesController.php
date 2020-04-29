<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slides;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.web.layout.slider', [
            'sliders' => Slides::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.web.layout.slcreate', [
           'slider' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Slides::create($request->all());


        return redirect()->route('admin.slides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function show(Slides $slides)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $slide=Slides::find($id);

        return view('backend.web.layout.sledit', ['slide'=> $slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $sl=Slides::find($id);
        $sl->update($request->all());

        return redirect()->route('admin.slides.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slides $slides)
    {
        //
    }
}
