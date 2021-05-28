
@extends("atheme")
    @section("content")
      <div class="container">
      <div class="row">
      
      <div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
      <div class="col col-12 col-sm-10 col-lg-10 col-xl-10">
      <br>
      <table class="table table-dark table-hover">
      <thead>
      <th><h3>Name</h3></th>
      <th><h3>Email</h3></th>
      <th><h3>Phone No</h3></th>
      <th><h3>Approval</h3></th>
      <th><h3>Actions</h3></th>
      
      </thead>
      <tbody>
      @foreach($list as $item)
      @foreach($lists as $items)
      @if($item->email == $items->email)
      <tr>
      <td><h5>{{ $item->name }}</h5></td>
      <td><h5>{{ $item->email }}</h5></td>
      <td><h5>{{ $item->phone }}</h5></td>
      <td><h5>{{ $items->status }}</h5></td>
      <td>
      <div class="btn-group">
      <a href="asedit/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a> 
      <a href="asdelete/{{ $item->id }}" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-xs">Delete</a> 
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






     