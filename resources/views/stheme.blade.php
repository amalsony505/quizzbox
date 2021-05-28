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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
</head>
<body background="https://images.pexels.com/photos/2831794/pexels-photo-2831794.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
		 style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/studhome">
                <img src="images\QuizBox-logos4.jpeg" alt="" width="45" height="45">
              </a>
          <a class="navbar-brand" href="/studhome"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              
            </ul>



            <form class="d-flex">
            <h3><a class="navbar-brand" href="/studhome">PROFILE</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <h3><a class="navbar-brand" href="/satmt2quiz">QUIZ</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h3><a class="navbar-brand" href="/sviewresult">VIEW RESULT</a></h3>
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
        @yield("content")
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>