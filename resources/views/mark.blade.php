<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
</head>
<body background="https://images.pexels.com/photos/2292837/pexels-photo-2292837.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" 
		 style="height: 100%; background-position: top; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
<div class="col col-12 col-sm-8 col-lg-8 col-xl-8">
<br><br>
{{csrf_field()}}
<div class="card  text-light bg-dark " style="width: 45rem;">
  <h1 class="text-center card-header"><u>Result</u></h1>


  <div class="card-body text-white text-center">
      <table class="table table-dark table-hover table-borderless">
     <thead>
     
     
     </thead>
     <tbody>
     <td><h2 style="color:white">{{$loggeduserinfo['name']}},you have got {{$r->result}} marks out of {{$n}}</h2></td>
    
    
     </tbody>
      </table>
      <a href="/studhome"><button class="btn btn-primary">Back to profile</button></a>

</div>
</div>



</div>
<div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>

    