<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_Vaccine extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = DB::table('Vaccines')->count();
        $vaccines = Vaccine::orderBy('id')->get();
        return view('vaccine', compact('vaccines', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("input_vaccine");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = time() . $request->image->getClientOriginalName() . '.' . $request->image->extension();
        $request->image->move(public_path(''), $gambar);
        Vaccine::create([
            "name" => $request -> v_name,
            "price" => $request -> price,
            "description" => $request -> desc,
            "image" => $gambar,
        ]);
        return redirect("/vaccine");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_sebelumnya = Vaccine::find ($id);
        return view("edit_vaccine",compact("data_sebelumnya"));
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
        $gambar = time() . $request->image->getClientOriginalName() . '.' . $request->image->extension();
        $request->image->move(public_path(''), $gambar);
        Vaccine::find($id)->update ([
            "name" => $request -> v_name,
            "price" => $request -> price,
            "description" => $request -> desc,
            "image" => $gambar,
        ]);
        return redirect("/vaccine");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vaccine::find($id) -> delete();
        return redirect("/vaccine");
    }
}
