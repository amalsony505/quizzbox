<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\smodel;
use App\Models\factmodel;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $userinfo=smodel::where('id','=',session('loggeduserid'))->first();
        $factinfo=factmodel::where('id','=',session('loggeduserid'))->first();

        if(session()->has('loggeduser') )
        {
            if(session('loggeduser')=='admin')
            {
              if($request->path()!='admhome' && $request->path()!='addfact' && $request->path()!='adviewfact' && $request->path()!='adviewstud'&& $request->path()!='adviewresult'&& $request->path()!='asedit/{id}'&& $request->path()!='afedit/{id}'&& $request->path()!='asdelete/{id}'&& $request->path()!='afdelete/{id}')
                {
                   
                   return back();
               }
                    
            }
            else if($factinfo)
            {
                if($request->path()!='facthome' && $request->path()!='addques'&& $request->path()!='viewques'&& $request->path()!='fviewresult'&& $request->path()!='viewstud'&& $request->path()!='edit/{id}'&& $request->path()!='fqedit/{id}'&& $request->path()!='fqdelete/{id}')
                {
                    return back();
                }
               
            }
             else
            {
                if($request->path()!='studhome' && $request->path()!='atmtquiz'&& $request->path()!='satmt2quiz'&& $request->path()!='sviewresult'&& $request->path()!='spedit/{id}')
                {
                    return back();
                }
               
            }
           
            

        }
        else
        {
            if($request->path()!='/' && $request->path()!='login'&& $request->path()!='sign')
            {
                return redirect('/login')->with ('fail','You must be logged in');
            }

        }



        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }



       // return $next($request);
    }

