

<!DOCTYPE html>
<html lang="en">
<head>

<style>

table {
  width: 100%;
  border-collapse: collapse;
  border: 5px solid rgb(2, 2, 41);
}
        
        #ip1 {
       border-radius: 25px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 100px;
        height: 50px;    
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
    #ip4 {
       border-radius: 50px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 350px;
        height: 180px;    
    }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Home</title>
</head>
<body background="https://images.pexels.com/photos/261579/pexels-photo-261579.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
		 style="height: 100%; background-position: top; background-repeat: no-repeat; background-size: cover;">

    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/facthome">
                <img src="" alt="" >
              </a>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              
            </ul>



            <form class="d-flex">
            <h3> <a class="navbar-brand" href="/facthome">PROFILE</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/addques">ADD QUESTION</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/viewques">VIEW QUESTION</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3> <a class="navbar-brand" href="/fviewresult">VIEW RESULT</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/viewstud">VIEW STUDENT</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{$loggeduserinfo['name']}} 
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                    <li><a class="dropdown-item" href="/logout">LOGOUT</a></li>
                  </ul>
                </li>
              </ul>
              

            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            
          </div>
        </div>
      </nav>

    <div class="container">
    <br>
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

    <form action="/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="cid" value="{{ $Info->id}}">
    <table class="table table-dark table-borderless">
        
        <tr>
            <td>
                <center> <h2 style="color:white">Sign up</h2></center>
                <div>
                 <label><h3>Name:</h3></label>
        <input name="name" value="{{ $Info->name }}" type="text" placeholder="Enter name" class="form-control" id="ip2"/>
        <span class="text-danger">@error('name'){{ $message }} @enderror  </span>
        </div>
      <div>
      <label><h3>Email Id:</h3></label>
        <input name="email" value="{{$Info->email}}"  type="text" placeholder="Enter email" class="form-control" id="ip2"/>
        <span class="text-danger">@error('email'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3>Phone No:</h3></label>
        <input name="phone" value="{{$Info->phone}}" type="text" placeholder="Enter phone" class="form-control" id="ip2"/>
        <span class="text-danger">@error('phone'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3> Password:</h3></label>
        <input name="pass" value="{{$Info->pass}}"  type="text" placeholder="Enter password" class="form-control" id="ip2"/>
        <span class="text-danger">@error('pass'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h3>Confirm Password:</h3></label>
        <input name="cpass"   type="text" placeholder="Re-enter password" class="form-control" id="ip2"/>
        <span class="text-danger">@error('cpass'){{ $message }} @enderror  </span>
        </div>
       
       <br>
      <button class="btn btn-primary" id="ip3">Update</button>
    </td>
    </tr>
    
    </table>
    </form>

    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      

      </body>
      </html>


      