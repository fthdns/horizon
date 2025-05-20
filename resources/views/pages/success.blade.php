@extends('layouts.success')

@section('title', 'Success')

@section('content')
<!-- Checkout -->
<main>
      <section class="section-success">
        <div class="success-wrapper">
          <img src="{{ url('frontend/images/ic_mailbox.jpg') }}" alt="Mailbox Icon" class="success-image">
          <h1 class="success-title">Yay, Success !</h1>
          <p class="success-description">
            We've sent you email for trip instruction<br>
            please read it as well
          </p>
          <a href="{{ route('home') }}" class="btn btn-home-page">Home Page</a>
        </div>
      </section>
    </main>
@endsection