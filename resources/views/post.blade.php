@extends('layouts.master')
@section('title', 'Post Page')
@section('content')

<div class="container">
<h1 class="my-5">About Us</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($img) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $author }}</h6>
                  <p class="card-text">{{ $description }}</p>
                </div>
            </div>
        </div>
        <div class="col-8">
                <p class="fw-bold">
                The M13 is an assault rifle introduced in Call of Duty: Modern Warfare and later appearing in Call of Duty: Mobile.
                </p>
                <figure>
                    <blockquote>
                    "Assault rifle with an extremely high fire rate and strong headshot multiplier." <br>
                    — Description
                    </blockquote>
                </figure>
        </div>
    </div>
</div>

@endsection