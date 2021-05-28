@extends("atheme")
    @section("content")


      <div class="container">
    <br>
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

    <form action="/adfact" method="post">
    {{ csrf_field() }}
    <table class="table table-dark table-borderless">
        
        <tr>
            <td>
                <center> <h2 style="color:white">Add Faculty</h2></center>
         <div>
         <label><h4 style="color:white">Name:</h4></label>
        <input name="name" value="{{old('name')}}" type="text" placeholder="Enter name" class="form-control" id="ip2"/>
        <span class="text-danger">@error('name'){{ $message }} @enderror  </span>
        </div>
        <div>
       <label><h4 style="color:white">Course:</h4></label>
        <input name="course" value="{{old('course')}}"  type="text" placeholder="Enter course" class="form-control" id="ip2">
        <span class="text-danger">@error('course'){{ $message }} @enderror  </span>
        </div>
      <div>
       <label><h4 style="color:white">Email Id:</h4></label>
        <input name="email" value="{{old('email')}}"  type="text" placeholder="Enter email" class="form-control" id="ip2">
        <span class="text-danger">@error('email'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h4 style="color:white">Phone No:</h4></label>
        <input name="phone" value="{{old('phone')}}" type="text" placeholder="Enter phone" class="form-control" id="ip2">
        <span class="text-danger">@error('phone'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h4 style="color:white"> Password:</h4></label>
        <input name="pass"  type="password" placeholder="Enter password" class="form-control" id="ip2">
        <span class="text-danger">@error('pass'){{ $message }} @enderror  </span>
        </div>
        <div>
        <label><h4 style="color:white">Confirm Password:</h4></label>
        <input name="cpass"  type="password" placeholder="Re-enter password" class="form-control" id="ip2">
        <span class="text-danger">@error('cpass'){{ $message }} @enderror  </span>
        </div>
       
       <br>
      <button class="btn btn-primary" id="ip3">SUBMIT</button>
    </td>
    </tr>
    
    </table>
    </form>

    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    </div>
    </div>

    @endsection



