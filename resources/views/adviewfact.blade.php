@extends("atheme")
    @section("content")

      <div class="container">
      <div class="row">
      
      <div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
      <div class="col col-12 col-sm-10 col-lg-10 col-xl-10">
      <br>
      <table class="table table-dark table-hover ">
      <thead>
      <th><h3>Name</h3></th>
      <th><h3>Course</h3></th>
      <th><h3>Email</h3></th>
      <th><h3>Phone No</h3></th>
      <th><h3>Actions</h3></th>
      </thead>
      <tbody>
      @foreach($list as $item)
      <tr>
      <td><h5>{{ $item->name }}</h5></td>
      <td><h5>{{ $item->course }}</h5></td>
      <td><h5>{{ $item->email }}</h5></td>
      <td><h5>{{ $item->phone }}</h5></td>
      <td>
      <div class="btn-group">
      <a href="afedit/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a> 
      <a href="afdelete/{{ $item->id }}" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-xs">Delete</a> 
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      
      
      </div>
      <div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
      </div>
      
      </div>

      @endsection





