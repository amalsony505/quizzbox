<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
</head>
<body background="https://images.pexels.com/photos/841228/pexels-photo-841228.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
		 style="height: 100%; background-position: top; background-repeat: no-repeat; background-size: cover;">
    


      <br><br>

      <div class="container">
      <div class="row">
       <div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
      <div class="col col-12 col-sm-8 col-lg-8 col-xl-8">
      


      <div class="card text-white bg-secondary mb-3" style="width: 45rem;">
  <h4 class="text-center card-header">Best of Luck</h4>



  <div class="card-body">


  <form action="/mark" method="post">
{{csrf_field()}}

<table class="table table-borderless">

@foreach($q as $que)
@foreach($a as $ans)
   @if($que->id == $ans->id)
   
<tr>
   <td>

   <div class="card text-dark bg-light mb-3" style="max-width: 40rem;">
  <div class="card-header"><h5>Q:    {{$que->que}}</h5>
  </div>

  <div class="card-body">
    

  <div class="form-check">
  <input class="form-check-input" type="radio" value="{{$ans->op1}}"  id="flexCheckDefault" name="ans[{{$que->id}}]">
  <label class="form-check-label" for="flexCheckDefault">
  A) {{$ans->op1}}
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" value="{{$ans->op2}}"  id="flexCheckDefault" name="ans[{{$que->id}}]">
  <label class="form-check-label" for="flexCheckDefault">
  B) {{$ans->op2}}
  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="radio" value=" {{$ans->op3}}"  id="flexCheckDefault" name="ans[{{$que->id}}]">
  <label class="form-check-label" for="flexCheckDefault">
 C) {{$ans->op3}}
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" value=" {{$ans->op4}}"  id="flexCheckDefault" name="ans[{{$que->id}}]">
  <label class="form-check-label" for="flexCheckDefault">
  D) {{$ans->op4}}
  </label>
</div>
</div>

  </div>
</div>



</td>
</tr>


 

  
@endif
@endforeach
@endforeach
<tr>
    <td><button class="btn btn-danger">SUBMIT</button></td>
</tr>
</table>
</form>
    



  </div>
</div>







</div>
<div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
</div>
</div>
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>


