@extends('layouts.main')

@section('head-title')
    Comics | DC COMICS
@endsection



@section('content')
{{-- COMICS MAIN --}}
<section class="comics">
    <section class="container">
    <h2 class="title-comics">Chose your Comics</h2>
    <div class="back">
        <div class="cards"> 
            @foreach ($cards as $card )
                <div class="card">
                    <img src="{{ $card['image'] }}" alt="">
                    <h4 class="card-title">{{ $card['title'] }}</h4>
                    <h4 class="card-price">{{ $card['price'] }} €</h4>
                </div>
            @endforeach
        </div>
    
        <button class="btn load"><a href="">load more</a></button>
    
    </div>
    
    </section>
</section>

@endsection

@section('comics-script')
    <script src="{{ asset('js/app.js')}}"></script>
@endsection