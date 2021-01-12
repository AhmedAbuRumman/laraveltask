<?php

namespace App\Http\Controllers;

use App\Citzien;
use Illuminate\Http\Request;

class CitzienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citzien = Citzien::all();
        return view('index' , compact('citzien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedInputs=$request->validate([
            'citzien_fullname' => 

            array (
            'required',
            'regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'
            
            ),

            "citzien_gender"=>"required",
            "citzien_city" => "required",
            "citzien_nid" => "required",
            "citzien_mobile" => "required|digits:14 ",
            "citzien_address" => "required",
           

       
        ]);

        return $this->store($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Citzien::create([
            "citzien_fullname"=>request('citzien_fullname'),
            "citzien_gender"=>request('citzien_gender'),
            "citzien_nid"=>request('citzien_nid'),
            "citzien_mobile"=>request('citzien_mobile'),
            "citzien_address"=>request('citzien_address'),
            "citzien_city"=>request('citzien_city'),



        ]);

       

        // return $this->index($request);

        return redirect('index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citzien=Citzien::where("id",$id)->get()->first();
        return view('edit',compact('citzien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citzienArray=Citzien::find($id);

    
    
        return view ('edit', compact('citzioenArray'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $citzien_id)
    {
        Citzien::where ("citzien_id" , $citzien_id) -> update(
            [

            "citzien_fullname"=>request('citzien_fullname'),
            "citzien_gender"=>request('citzien_gender'),
            "citzien_nid"=>request('citzien_nid'),
            "citzien_mobile"=>request('citzien_mobile'),
            "citzien_address"=>request('citzien_address'),
           

            ]);

            return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $citzien_by_id=Citzien::destroy($id);
    
    
        return redirect ('index');

    }
}
