@extends('layout')

@section('title')
SignUp
@endsection

@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <span class="fs-4">Sign In</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        
      
        <form action="/login" method="post">
            @csrf  
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>

       
        
            <div class="col-12">
                <button type="submit" class="btn btn-primary text-bg-info">Sign in</button>
            </div>
        <form>
      </div>
    </div>


  </div>
</main>

@endsection