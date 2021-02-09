<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dd;

class mixed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $d= dd::all();
        return view('index',['d' => $d]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo
        echo "created";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
 $request->validate([
            'name'=>['required'],
         ]);

    
    $d=new dd();

    $d->name=$request->input('name');

    if($d->save())
    {
         return redirect('/mixed')->with('message','Data Inserted Successfully done'); 
    }
    else
    {
      return redirect('/mixed')->with('message','Data Not Inserted done'); 
      
    }
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
        $data=dd::find($id);
        return $data;
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
        
          $data=dd::find($id);

          return view('edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'name'=>['required'],
         ]);
        
        $d=new dd();
         $d=dd::find($request->input('id'));
        $d->name=$request->input('name');

           
              if($d->save())
    {
         return redirect('/mixed')->with('message','Data Updated Successfully done'); 
    }
    else
    {
      return redirect('/mixed')->with('message','Data Not Updated  done'); 
      
    }



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
            
              if(dd::find($id)->delete()
        )
    {
         return redirect('/mixed')->with('message','Data Deleted Successfully done'); 
    }
    else
    {

       return redirect('/mixed') ->with('message','Data Not Deleted done'); 
        
    }
    }
}
