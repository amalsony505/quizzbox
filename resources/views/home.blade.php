    @extends("theme")
    @section("content")
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images\qpic47.jpg" height="450"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/03/12/17/54/quiz-2137664_960_720.jpg" height="450" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/02/17/15/25/quiz-2074324_960_720.png" height="450" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/03/25/20/51/quiz-2174368_960_720.png" height="450" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/6375/quote-chalk-think-words.jpg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" height="450"   class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


<div class="container">
<br>
<div class="row">
<div style="text-align:left" class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<h1 style="color:blue">QuizzBox</h1>
<h4 style="color:blue">(Think Out Of The Box)</h4>

<h4 style="color:white">A Quiz is a quick assessment of student knowledge. 
 QuizzBox provides the students a virtual quiz platform that helps to develop the student’s mental ability skills.
 Here each student has to register and is further allowed to attempt the quiz . Faculties of different skill areas like Arithmetical Reasoning,Logical Sequence,Situation Reaction,Direction Sense etc prepare the questions for the students.

  
  </h4>

<table class="table table-borderless">
<tr>
    <td> <a href="/login"><button height="80px" class="btn  btn-lg btn-primary">Get Started</button></td></a>
</tr>
</table>
</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<br>
<img src="images\QuizBox-logos4.jpeg" height="400" width="400">
</div>
</div>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\qpic38.jpeg" height="450" class="d-block w-100" alt="...">
    </div>
    
    
  </div>
</div>



<br>
<nav class="navbar  navbar-dark bg-dark">

  <div class="container-fluid">
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <h8 style="color:white">©All Rights Reserved. Developed by Amal Sony</h8>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    
  </div>
  
</nav>
@endsection
