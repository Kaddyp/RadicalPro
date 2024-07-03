@extends('layout')

@section('title')
Contact Us
@endsection


@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <span class="fs-4">Contact Us</span>
      </a>
    </header>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2">Get in touch</h2>
    <p class="border-bottom fs-6 fst-italic">We love to hear from you. Our friendly team is always here to chat.</p>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="pb-2" class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Chat to us</h3>
        <p class="description ui-small body-white"> Our friendly team is here to help. </p>
        <p class="py-2">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Office</h3>
        <p class="description ui-small body-white"> Come say hello at our office. </p>
        <p class="py-2">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Phone</h3>
        <p class="description ui-small body-white"> Mon - Fri from 8am to 6pm </p>
        <p class="py-2">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>

 

    <footer class="pt-3 mt-4 text-body-secondary border-top">
      &copy; 2024
    </footer>
  </div>
</main>
@endsection