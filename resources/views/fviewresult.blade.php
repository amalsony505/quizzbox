
@extends("ftheme")
    @section("content")

    <div class="container">
<div class="row">
<div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
<div class="col col-12 col-sm-10 col-lg-10 col-xl-10">
<br>
{{csrf_field()}}
<div class="card text-white bg-dark  " style="width: 55rem;">
  <h1 class="text-center card-header"><u>Result</u></h1>


  <div class="card-body text-white text-center">
      <table class="table table-hover table-success table-borderless">
     <thead>
     <th><h2><u>Date & Time</u></h2></th>
     <th><h2><u>Name</u></h2></th>
     <th><h2><u>MarkScored</u></h2></th>
     <th><h2><u>MaximumMark</u></h2></th>
     
     </thead>
     @foreach($list as $item)
     <tbody>
     <td><h3> {{ $item->created_at }}</h3></td>
     <td><h3> {{ $item->sname }}</h3></td>
     <td><h3>{{ $item->result }}</h3></td>
     <td><h3>{{ $item->max }}</h3></td>
    
     </tbody>
     @endforeach
      </table>
     
</div>
</div>



</div>
<div class="col col-12 col-sm-1 col-lg-1 col-xl-1"></div>
</div>
</div>
      @endsection
