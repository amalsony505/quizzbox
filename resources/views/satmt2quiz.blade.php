@extends("stheme")
    @section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6">

<br>

<div class="card  text-black bg-dark mb-3 " style="width: 30rem;">
  


  <div class="card-body text-white text-center">
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
<h2 style="color:white">Welcome {{$loggeduserinfo['name']}}!</h2>


<form action="/status" method="post">
{{ csrf_field() }}

<table class="table table-success  table-borderless">
<tr>
    <td><h3><u>RULES</u></h3></td>
</tr>
<tr>
    <td><h3>*There are {{$n}} Questions in total.</h3></td>
</tr>
<tr>
    <td><h3>*Each question carries one mark.</h3></td>
</tr>
<tr>
    <td><h3>*There is no time limit.</h3></td>
</tr>
<tr>
    <td><h3>*Once you start the quiz do not go back!</h3></td>
</tr>
<tr>
    <td><button class="btn btn-primary" type="submit">Attempt Quiz-></button></td>
   
</tr>

</table>
</form>
</div>
</div>

</div>
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3"></div>
</div>
</div>

    @endsection