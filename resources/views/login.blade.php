<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      table {
  width: 100%;
  border-collapse: collapse;
  border: 5px solid rgb(2, 2, 41);
}

        #ip2 {
       border-radius: 25px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 400px;
        height: 50px;    
    }
    #ip3 {
       border-radius: 50px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 400px;
        height: 65px;    
    }
   
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body background="images\Website-Design-Background.png" 
		 style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;" >
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="images\QuizBox-logos4.jpeg" alt="" width="45" height="45">
      </a>
      <a class="navbar-brand" href="/"><h3>QUIZZBOX</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         

         
          
        </ul>
        <a class="navbar-brand" href="/">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <a class="navbar-brand" href="/login">LOGIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/sign">SIGNUP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
    </div>
  </nav>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                
            <form action="/logins" method="post">
              {{ csrf_field() }}
              @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
                <table class="table  table-dark table-borderless">
                    <tr> 
                        <td>
                        
                           <center><h2 style="color:dark">LOGIN</h2></center>
                                <div>
                                  <label><h3 style="color:dark">Email address:</h3></label>
                                  <input name="email" value="{{ old('email') }}" class="form-control " type="email" placeholder="Enter email" id="ip2" >
                                  <span class="text-danger">@error('email'){{ $message }} @enderror  </span>
                                  
                                  </div>
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                
                                
                                
                                <div>
                                  <label><h3 style="color:dark">Password:</h3></label>
                                  <input name="pass"  class="form-control " type="password" placeholder="Enter password" id="ip2">
                                  <span class="text-danger">@error('pass'){{ $message }} @enderror  </span>
                                  </div>
                                <br>
                                
                                
                                
                                   <button class="btn btn-primary" type="submit"  id="ip3">GET STARTED</button>
                                 
            
                             
                        </td>
                    </tr>
                    <tr>
                    
                        <td>Not signed in yet? <a href="/sign">Create Account</a></td>
                        
                    </tr>
                </table>
            </form>
            
            </div>
            <div class="col"></div>
        </div>
    </div>

    
    


        
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>          
</body>

</html>