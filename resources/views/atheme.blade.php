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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>
<body background="images\computer code pic.jpg" 
		 style="height: 100%; background-position: top; background-repeat: no-repeat; background-size: cover;">
     <div id="hide">

    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admhome">
                <img src="images\QuizBox-logos4.jpeg" alt="" width="50" height="50">
              </a>
          <a class="navbar-brand" href=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              
            </ul>



            <form class="d-flex">
            <h3><a class="navbar-brand" href="/admhome">HOME</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/addfact">ADD FACULTY</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3> <a class="navbar-brand" href="/adviewfact">VIEW FACULTY</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/adviewstud">VIEW STUDENT</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3> <a class="navbar-brand" href="/adviewresult">VIEW RESULT</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
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
      </div>
      
      @yield("content")
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      

</body>
</html>