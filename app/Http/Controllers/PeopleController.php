<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Http\Request\PeopelRequest;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function create()
    {
        $sexo =$this->getsexo();
        $status= $this->getstatus();

        //setJs(array('js/persons'));
        return view('peoples.create')->with(['sexo'=>$sexo, 'status' =>$status ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peoples = new People;

        $peoples->cedula = $request->cedula;
        $peoples->credencial = $request->credencial;
        $peoples->name_1 = $request->name_1;
        $peoples->name_2 = $request->name_2;
        $peoples->lastname_1 = $request->lastname_1;
        $peoples->lastname_2 = $request->lastname_2;
        $peoples->sexo_id = $request->sexo_id;
        $peoples->status_id = $request->status_id;

        $peoples->save();

        //echo "datos guardados";
        return redirect()->route('peoples.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getsexo()

    {
        $p = \DB::table('rferences')
        //->select('id','descripcion','')
        ->where('references_id', '=', '1')
        ->get();       
        
       return $p;
    }

    public function getstatus()
    {
        $a = \DB::table('rferences')
        //->select('id','descripcion','')
        ->where('references_id', '=', '2')
        ->get();       
        
       return $a;
    } 
}
