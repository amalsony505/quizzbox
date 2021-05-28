<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use App\Models\factmodel;
use Illuminate\Support\Facades\DB;
class factcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dat = array('list'=>DB::table('factmodels')->where('id',session('loggeduserid'))->get());
        
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view('facthome',$data,$dat);
        
    }
    public function addquestion()
    {
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view('faddques',$data);
        
    }
    public function viewquestion()
    {
        $q=question::all();
        $a=answer::all();
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view('fviewques',$data,compact('q','a'));
        
    }
    public function viewresult()
    {
        $dat = array('list'=>DB::table('results')->get());
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view('fviewresult',$data,$dat);
        
    }
    public function viewstudent()
    {
        $dat = array('list'=>DB::table('smodels')->get());
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        
        return view('fviewstud',$data,$dat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getque=request('que');
        $getop1=request('op1');
        $getop2=request('op2');
        $getop3=request('op3');
        $getop4=request('op4');
        $getans=request('ans');


        $q=new question();
        $a=new answer();
        //$pt=new pointModel();
        $q->que=$getque;
        //$a->q_id=$q->id;
        $a->op1=$getop1;
        $a->op2=$getop2;
        $a->op3=$getop3;
        $a->op4=$getop4;
        $a->ans='Answer Not Added!';
        //pt->choice-"";

        $a->save();
        $q->save();

        return redirect('/viewques');

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

    public function fqedit($id)
    {
        //$q=DB::table('questions')->where('id',$id)->first();
        //$a=DB::table('answers')->where('id',$id)->first();
        //$dat=['Info'=>$q];
        
       $q=question::find($id);
        $a=answer::find($id);
        //$q=question::all();
        //$a=answer::all();
        
        
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view('fqedit',$data,compact('q','a'));
    }

    public function fqupdate(Request $request, $id)
    {
       // echo "success";
        $getque=request('que');
        $getop1=request('op1');
        $getop2=request('op2');
        $getop3=request('op3');
        $getop4=request('op4');
        $getctans=request('ctans');

        $q=question::find($id);
        $a=answer::find($id);

        $q->que=$getque;
        $a->op1=$getop1;
        $a->op2=$getop2;
        $a->op3=$getop3;
        $a->op4=$getop4;
        $a->ans=$getctans;

        $a->save();
        $q->save();

        return redirect('/viewques');

    }
    public function fqdelete($id)
    {
        $delete=DB::table('questions')->where('id',$id)->delete();
        $deletes=DB::table('answers')->where('id',$id)->delete();
        return redirect('/viewques');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=DB::table('smodels')->where('id',$id)->first();

        $dat=['Info'=>$row];
        $data=['loggeduserinfo'=>factmodel::where('email','=',session('loggeduser'))->first()];
        return view ('sedit',$data,$dat);
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required|digits:10',
            'pass'=>'required|min:5'
        ]);
        $updating = DB::table('smodels')->where('id',$request->input('cid'))->update([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'pass'=>$request->input('pass')
            
        ]);
        return redirect('/viewstud');
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
