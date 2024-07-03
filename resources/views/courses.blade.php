@extends('layout')
@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <span class="fs-4">Explore Courses</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid">
        
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/courses')}}">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">LIVE COURSES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">SELF PACED COURSE</a>
            </li>          
        </ul>
      


        <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
                focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
                <h3 class="fs-3">
                    PHP
                </h3>
              <p class=" py-2 card-text">
                By Kaddy
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('/courses/:courseId')}}">View</a>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('checkout')}}">RS. 15000</a>
                  </button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
                <h3 class="fs-3">
                    Node
                </h3>
                <p class="card-text py-2">
                    By Kaddy
                </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('/courses/:courseId')}}">View</a>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('checkout')}}">RS. 20000</a>
                  </button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" 
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            <text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h3 class="fs-3">
                React
              </h3>
              <p class="card-text py-2">
                By Kaddy
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('/courses/:courseId')}}">View</a>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <a href="{{url('checkout')}}">RS. 20000</a>
                  </button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


      </div>
    </div>

    <div class="row align-items-md-stretch">
      
    </div>

    <footer class="pt-3 mt-4 text-body-secondary border-top">
      &copy; 2024
    </footer>
  </div>
</main>
@endsection