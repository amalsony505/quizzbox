@extends("ftheme")
    @section("content")
    <div class="container">
      <div class="row">
      
      <div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
      <div class="col col-12 col-sm-10 col-lg-10 col-xl-10">
      <br>
      <table class="table table-dark table-hover">
      <thead>
      <th><h3>Question</h3></th>
      <th><h5>OptionA</h5></th>
      <th><h5>OptionB</h5></th>
      <th><h5>OptionC</h5></th>
      <th><h5>OptionD</h5></th>
      <th><h4 style="color:green">Answer</h4></th>
      <th></th>
      </thead>
      <tbody>
      @foreach($q as $que)
   @foreach($a as $ans)
   @if($que->id == $ans->id)
      
      
      <tr>
      <td><h5>Q) {{ $que->que }}</h5></td>
      <td><h5>{{ $ans->op1 }}</h5></td>
      <td><h5>{{$ans->op2 }}</h5></td>
      <td><h5>{{$ans->op3 }}</h5></td>
      <td><h5>{{$ans->op4 }}</h5></td>
      <td><h4 style="color:green">{{$ans->ans }}</h4></td>


      
    
   
    
      <td>
      <div class="btn-group">
      <a href="fqedit/{{ $que->id }}" class="btn btn-primary btn-xs">Edit</a> 
      <a href="fqdelete/{{ $que->id }}" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-xs">Delete</a> 
      </td>
      </tr>
      @endif
   @endforeach
   @endforeach
      
     
      </tbody>
      </table>
      
      
      </div>
      <div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
      </div>
      
      </div>
    @endsection