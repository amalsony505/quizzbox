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
        width: 450px;
        height: 50px;    
    }
    #ip3 {
       border-radius: 50px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 400px;
        height: 65px;    
    }
    #ip4 {
       border-radius: 50px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 450px;
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
                <img src="images\QuizBox-logos4.jpeg" alt="" width="50" height="50">
              </a>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              
            </ul>



            <form class="d-flex">
            <h3><a class="navbar-brand" href="/facthome">PROFILE</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/addques">ADD QUESTION</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3> <a class="navbar-brand" href="/viewques">VIEW QUESTION</a></h3>
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
            <div class="col col-12 col-sm-3 col-lg-3 col-xl-3">
            
            </div>
            <div class="col col-12 col-sm-7 col-lg-7 col-xl-7">

            <div class="card text-light bg-dark  " style="width: 35rem;">
             <h1 class="text-center card-header">Add Question</h1>


             <div class="card-body text-white text-center">



            <form action="/addque" method="post">
            {{csrf_field()}}
            <table class="table table-dark table-borderless">
            
            <tr>

              <td>
              <center>
              
            
            <div>
              <h3><label>Question</label></h3>
              <textarea name="que" value="{{old('ques')}}" id="ip4"  placeholder="Enter the question"  class="form-control" ></textarea>
              
              </div>
              </center>
              

              

              

              

              
              <center>
              <div>
              
              <h5><label>Option A</label></h5>
              <input name="op1" value="{{old('op1')}}"  type="text" placeholder="Enter option 1" class="form-control" id="ip2"/>
              </div>
              </center>
              

              

              
              <center>
              <div>
              <h5><label>Option B</label></h5>
              <input name="op2" value="{{old('op2')}}"  type="text" placeholder="Enter option 2" class="form-control" id="ip2"/>
              </div>
              </center>
              

              

              

              
              <center>
              <div>
              <h5><label>Option C</label></h5>
              <input name="op3" value="{{old('op3')}}"  type="text" placeholder="Enter option 3" class="form-control" id="ip2"/>
              </div>
              </center>
              

              

              
              <center>
              <div>
              <h5><label>Option D</label></h5>
              <input name="op4" value="{{old('op4')}}"  type="text" placeholder="Enter option 4" class="form-control" id="ip2"/>
              </div>
              </center>
              

              
             
             
             <br>
             <center>
             
              <button class="btn btn-primary" id="ip3">Add Question</button>
             </td>
             </center>
             
            </tr>
              
              
              
              
            
            
            </table>
            </form>
            
            </div>
            </div>
            </div>
            <div class="col col-12 col-sm-2 col-lg-2 col-xl-2">
            
            </div>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      

      </body>
      </html>
