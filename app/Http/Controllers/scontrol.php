<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smodel;
use App\Models\factmodel;
use App\Models\question;
use App\Models\answer;
use App\Models\result;
use App\Models\status;
use Validator;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class scontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        
        return view('home');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function studhome()
    {
        $dat = array('list'=>DB::table('smodels')->where('id',session('loggeduserid'))->get());
        
        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view('stdnthome',$data,$dat);
        
    }
    public function atmtquiz()
    {
        $q=question::all();
        $a=answer::all();
        // $s=student::all();
        // return view('studentview',compact('s'));
        
        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view('satmtquiz',$data,compact('q','a'));
        
    }
    public function satmt2quiz()
    {
        $q=question::all();
        $n=count($q);

        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view('satmt2quiz',$data,compact('n'));
       
    }
    public function viewresult()
    {
        $dat = array('list'=>DB::table('results')->where('sname',session('loggedusername'))->get());
        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view('sviewresult',$data,$dat);
       
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
            'email'=>'required|email|unique:App\Models\smodel,email',
            'phone'=>'required|digits:10',
            'pass'=>'required|min:5',
            'cpass'=>'required|same:pass'
            
        ]);


        $getname=request('name');
        $getemail=request('email');
        $getphone=request('phone');
        $getpass=request('pass');
      

       // echo "<br>";
       // echo $getname;
       // echo "<br>";
       // echo  $getemail;
       // echo "<br>";
        //echo $getphone;
      //  echo "<br>";
       // echo $getpass;
      //  echo "<br>";


        $user=new smodel();
        $stuser=new status();

        $user->name=$getname;
        $user->email=$getemail;
        $user->phone=$getphone;
        $user->pass= $getpass;

        $stuser->name=$getname;
        $stuser->email=$getemail;
        $stuser->status='yes';
        

        $user->save();
        $stuser->save();
        return redirect('/login');
    }
    public function status()
    {
        
        $statusinfo=status::where('email','=',session('loggeduser'))->first();
        
        if($statusinfo->email==session('loggeduser'))
            {
                
                if($statusinfo->status=='no')
                {
                    return redirect('/satmt2quiz')->with ('fail','Not authorised by admin');
                }
                
                else
                {
                    $updating = DB::table('statuses')->where('email',session('loggeduser'))->update([
                       'name'=>session('loggedusername'),
                      'email'=>session('loggeduser'),
                       'status'=>'no'
                        
                    ]);

                   
                    return redirect('/atmtquiz');
                }
            }
    }










    public function logins(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'pass'=>'required'
        ]);

        $userinfo=smodel::where('email','=',$request->email)->first();
        $factinfo=factmodel::where('email','=',$request->email)->first();

        if($request->email=='admin@gmail.com' && $request->pass=='admin')
        {
            $request-> session()->put('loggeduser','admin');
            $s=smodel::all();
        $f=factmodel::all();
        $r=result::all();
        $ns=count($s);
        $nf=count($f);
       $nr=count($r);

            return view('admhome',compact('ns','nf','nr'));

        }
        else if($factinfo)
        {
            if($request->pass==$factinfo->pass)
                {
                    $request->session()->put('loggeduser',$factinfo->email);
                    $request->session()->put('loggeduserid',$factinfo->id);
                    return redirect('/facthome');
                }
            else
            {
               
                return back()->with('fail','Invalid Login !');
            }
        }


        else
        {
            if(!$userinfo)
            {
                return back()->with('fail','Invalid Login !');
            }
            else
            {
                if($request->pass==$userinfo->pass)
                {
                    $request->session()->put('loggeduser',$userinfo->email);
                    $request->session()->put('loggedusername',$userinfo->name);
                    $request->session()->put('loggeduserid',$userinfo->id);
                    //echo session('loggeduser');
                    return redirect('/studhome');
                }
                return back()->with('fail','Invalid Login !');
            }
        }

    }
    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/login');
        }
        else
        {
            return redirect('/login');
        }

    }

    public function quiz(Request $request)
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
        $r->sname=session('loggedusername');
        $r->result=$x;
        $r->max=$n;
        $r->save();

        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view('mark',compact('r','n'),$data);
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
        $row=DB::table('smodels')->where('id',$id)->first();

        $dat=[
            'Info'=>$row
            
        ];
        $data=['loggeduserinfo'=>smodel::where('email','=',session('loggeduser'))->first()];
        return view ('spedit',$data,$dat);
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required|digits:10',
            'pass'=>'required|min:5',
            'cpass'=>'required|min:5|same:pass'
        ]);
        $updating = DB::table('smodels')->where('id',$request->input('cid'))->update([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'pass'=>$request->input('pass')
            
        ]);
        return redirect('/studhome');
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
