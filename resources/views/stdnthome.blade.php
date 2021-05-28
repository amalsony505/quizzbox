@extends("stheme")
    @section("content")


    <div class="container">
      <div class="row">
      
      <div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
      <div class="col col-12 col-sm-7 col-lg-7 col-xl-7">
      <br><br>
      <div class="card  text-white bg-dark mb-3 " style="width: 45rem;">
  <h1 class="text-center card-header">Student Profile</h1>


  <div class="card-body  text-center">
      
      <table class="table table-success table-borderless">
      

      @foreach($list as $item)
     
      <tr>
        <td><h2 style="color:black">Name:</h2></td>
        <td><h2 style="color:black">{{ $item->name }}</td>
        
      </tr>
      
      <tr>
        <td><h2 style="color:black">Email:</h2></td>
        <td><h2 style="color:black">{{ $item->email }}</h2></td>
        
      </tr>
      <tr>
        <td><h2 style="color:black">Phone No:</h2></td>
        <td><h2 style="color:black">{{ $item->phone }}</h2></td>
        
      </tr>
      <tr>
      <td></td>
        <td><div class="btn-group">
      <a href="spedit/{{ $item->id }}" class="btn btn-primary ">Edit</a> 
      </td>
      
        
      </tr>
      @endforeach
      </table>
  </div>
  </div>





     
      
      </div>
      <div class="col col-12 col-sm-3 col-lg-3 col-xl-3"></div>
      </div>
      
      </div>
      @endsection
      
