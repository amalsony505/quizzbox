@extends("ftheme")
    @section("content")

    <div class="container">
      <div class="row">
      
      <div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
      <div class="col col-12 col-sm-7 col-lg-7 col-xl-7">
      <br>
      <div class="card text-light bg-dark  " style="width: 45rem;">
  <h1 class="text-center card-header">Faculty Profile</h1>


  <div class="card-body text-white text-center">
      
      <table class="table table-success table-borderless">
      

      @foreach($list as $item)
      
      <tr>
        <td><h2>Name:</h2></td>
        <td><h2>{{ $item->name }}</td>
        
      </tr>
      
      <tr>
        <td><h2>Course:</h2></td>
        <td><h2>{{ $item->course }}</h2></td>
        
      </tr>
      <tr>
        <td><h2>Email:</h2></td>
        <td><h2>{{ $item->email }}</h2></td>
        
      </tr>
      <tr>
        <td><h2>Phone No:</h2></td>
        <td><h2>{{ $item->phone }}</h2></td>
        
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