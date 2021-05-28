
  @extends("stheme")
    @section("content")

    <div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
<div class="col col-12 col-sm-8 col-lg-8 col-xl-8">
<br><br>
{{csrf_field()}}
<div class="card  text-white bg-dark mb-3 " style="width: 45rem;">
  <h1 class="text-center card-header">Result</h1>


  <div class="card-body text-white text-center">
      <table class="table table-success table-hover table-borderless">
     <thead>
     
     <th><h3 style="color:black"><u>Name</u></h3></th>
     <th><h3 style="color:black"><u>Mark Scored</u></h3></th>
     <th><h3 style="color:black"><u>Maximum Mark</u></h3></th>
     
     </thead>
     @foreach($list as $item)
     <tbody>
     
     <td><h2 style="color:black"> {{ $item->sname }}</h2></td>
     <td><h2 style="color:black">{{ $item->result }}</h2></td>
     <td><h2 style="color:black">{{ $item->max }}</h2></td>
    
     </tbody>
     @endforeach
      </table>
     
</div>
</div>



</div>
<div class="col col-12 col-sm-2 col-lg-2 col-xl-2"></div>
</div>
</div>
      @endsection
      
