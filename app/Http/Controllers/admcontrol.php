<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factmodel;
use App\Models\smodel;
use App\Models\result;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\status;
class admcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s=smodel::all();
        $f=factmodel::all();
        $r=result::all();
        $ns=count($s);
        $nf=count($f);
        $nr=count($r);
        return view('admhome',compact('ns','nf','nr'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('addfact');
        
    }
    public function viewfact()
    {
        $dat = array(
            'list'=>DB::table('factmodels')->get()
        );
        
        return view('adviewfact',$dat);
        
        
    }

    public function viewstud()
    {
        $dat = array(
            'list'=>DB::table('smodels')->get()
        );
        $date = array(
            'lists'=>DB::table('statuses')->get()
        );
        
        return view('adviewstud',$dat,$date);
        
        
    }
    public function viewresult()
    {
        $dat = array('list'=>DB::table('results')->get());
        
        return view('adviewresult',$dat);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'course'=>'required',
            'email'=>'required|email|unique:App\Models\smodel,email',
            'phone'=>'required|digits:10',
            'pass'=>'required|min:5',
            'cpass'=>'required|same:pass'
            
        ]);


        $getname=request('name');
        $getcourse=request('course');
        $getemail=request('email');
        $getphone=request('phone');
        $getpass=request('pass');
      

        


        $user=new factmodel();
        $user->name=$getname;
        $user->course=$getcourse;
        $user->email=$getemail;
        $user->phone=$getphone;
        $user->pass= $getpass;
        

        $user->save();
        return redirect('/adviewfact');

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
    public function afedit($id)
    {
        $row=DB::table('factmodels')->where('id',$id)->first();

        $dat=[
            'Info'=>$row
            
        ];
        
        return view ('afedit',$dat);
    }

    public function afupdate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'pass'=>'required|min:5',
            'cpass'=>'required|min:5|same:pass'
        ]);
        $updating = DB::table('factmodels')->where('id',$request->input('cid'))->update([
            'name'=>$request->input('name'),
            'course'=>$request->input('course'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'pass'=>$request->input('pass')
            
        ]);
        return redirect('/adviewfact');
    }
    public function afdelete($id)
    {
        $delete=DB::table('factmodels')->where('id',$id)->delete();
        return redirect('/adviewfact');
    }



    public function asedit($id)
    {
        $row=DB::table('smodels')->where('id',$id)->first();

        $dat=[
            'Info'=>$row
            
        ];
        
        return view ('asedit',$dat);
    }

    public function asupdate(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required|digits:10'
            
        ]);
        $updating = DB::table('smodels')->where('id',$request->input('cid'))->update([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone')
            
            
        ]);

        $updatings = DB::table('statuses')->where('email',$request->input('cid'))->update([
            'name'=>$request->input('name'),
            'status'=>$request->input('status')

        //$updatings = DB::table('statuses')->where('email',session('loggeduser'))->update([
           // 'name'=>$request->input('name'),
            //'email'=>$request->input('email'),
            //'status'=>$request->input('status')
        ]);
        return redirect('/adviewstud');
    }

    public function asdelete($id)
    {
        $delete=DB::table('smodels')->where('id',$id)->delete();
        $delete=DB::table('statuses')->where('id',$id)->delete();
        return redirect('/adviewstud');
    }

    public function ardelete($id)
    {
        $delete=DB::table('results')->where('id',$id)->delete();
       
        return redirect('/adviewresult');
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
