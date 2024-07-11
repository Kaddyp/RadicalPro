@extends('layout')

@section('title')
SignUp
@endsection

@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <span class="fs-4">Create account</span>
      </a>
   
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                @error('name') {{$message}} @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile number</label>
                <input type="text" class="form-control" name="mobile" placeholder="10 Digit Mobile Number">
            </div>
        
            <div class="col-12">
                <button type="submit" class="btn btn-primary text-bg-info">Sign Up</button>
            </div>
        <form>
      </div>
    </div>


  </div>
</main>

@endsection