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
        width: 350px;
        height: 50px;    
    }
    #ip3 {
       border-radius: 50px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 350px;
        height: 65px;    
    }

    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body background="images\Website-Design-Background.png" 
		 style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark ">
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
    <br>
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

    <form action="/signup" method="post">
    {{ csrf_field() }}
    <table class="table table-dark table-borderless">
        
        <tr>
            <td>
                <center> <h2 style="color:white">Sign up</h2></center>
                <div>
                 <label><h3 style="color:white">Name:</h3></label>
        <input name="name" value="{{old('name')}}" type="text" placeholder="Enter name" class="form-control" id="ip2"/>
        <span class="text-danger">@error('name'){{ $message }} @enderror  </span>
        </div>
      <div>
      <label><h3 style="color:white">Email Id:</h3></label>
        <input name="email" value="{{old('email')}}"  type="text" placeholder="Enter email" class="form-control" id="ip2"/>
        <span class="text-danger">@error('email'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3 style="color:white">Phone No:</h3></label>
        <input name="phone" value="{{old('phone')}}" type="text" placeholder="Enter phone" class="form-control" id="ip2"/>
        <span class="text-danger">@error('phone'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3 style="color:white"> Password:</h3></label>
        <input name="pass"  type="text" placeholder="Enter password" class="form-control" id="ip2"/>
        <span class="text-danger">@error('pass'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3 style="color:white">Confirm Password:</h3></label>
        <input name="cpass"  type="text" placeholder="Re-enter password" class="form-control" id="ip2"/>
        <span class="text-danger">@error('cpass'){{ $message }} @enderror  </span>
        </div>
       
       <br>
      <button class="btn btn-primary" id="ip3">SIGNUP</button>
    </td>
    </tr>
    <tr>
        <td>Already Signed in? <a href="/login">Login</a></td>
        
    </tr>
    </table>
    </form>

    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    </div>
    </div>
</body>
</html>