<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\result;
use App\Models\question;
use App\Models\answer;

class quiz extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $q=question::all();
        $a=answer::all();

        $n=count($q);
        $x=0;
        for($i=0;$i<$n;$i++)
        {
            $c=($a[$i]->ans);

            if(in_array($c,$request->get('ans')))
            {
                $x=$x+1;
            }

        }
        $r=new result();
        $r->sname=$loggeduserinfo['name'];
        $r->result=$x;
        $r->save();
        return view('mark',compact('r'));
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
       //
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updat(Request $request, $id)
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
}
