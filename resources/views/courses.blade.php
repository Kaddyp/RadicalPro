@include('listCourses')
@extends('layout')

@section('title')
Courses
@endsection

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
                <a class="nav-link" href="{{url('/courses/live')}}">LIVE COURSES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/courses/selfPlaced')}}">SELF PACED COURSE</a>
            </li>          
        </ul>
      


        <div class="album py-5 bg-body-tertiary">
          <div class="container">

            @yield('listCourses')

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