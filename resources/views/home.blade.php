@extends('layout')

@section('title')
Home
@endsection

@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <span class="fs-4">Welcome To Radical Technologies</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Radical Technologies is India's Leading Project Based IT Training and Global Certification Centre.</h1>
        <p class="fs-4 py-3">       
                Radical Technologies focus on Real Time Industry Oriented and Project based training by 10 to 20+ years experienced trainer. Assignments are provided after every session and 2 Live Scenario based projects at the end of the Course will enhance the student skill set to next level. CV Preparation/ Resume building guidance provided by Job Portal, Livejob.in and AI Driven Job portal which provides students with placement opportunities with our 750+ Hiring Partners, once they finish the Course. 
        </p>
        <button class="btn btn-primary btn-lg bg-primary" type="button">
            <a href="{{url('courses')}}">Visit Courses</a>
        </button>
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