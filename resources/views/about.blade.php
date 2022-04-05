@extends('layouts.master')
@section('title', 'About Us')
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
                Siren is a character featured in Call of Duty: Mobile and was added in the game on October 2, 2020, during Season 10 The Hunt as part of Cybernetic Stalker Draw. 
                </p>
                <figure>
                    <blockquote>
                    "Born in a lab and trained on fierce battlefields in the jungles of Brazil, Siren is not only a capable and nearly unstoppable killing machine, her constant evolution only makes her stronger." <br>
                    — In-game biography
                    </blockquote>
                </figure>
        </div>
    </div>
</div>

@endsection