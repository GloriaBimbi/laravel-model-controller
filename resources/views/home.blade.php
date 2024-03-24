@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Movies:</h1>

      @forelse($movies as $movie)
      <div class="card">
        <h2>{{ $movie['title'] }}</h2>
        <div class="card-body">
          <ul>
            <li>{{ $movie['id'] }}</li>
            <li>{{ $movie['original_title'] }}</li>
            <li>{{ $movie['nationality'] }}</li>
            <li>{{ $movie['date'] }}</li>
            <li>{{ $movie['vote'] }}</li>
          </ul>
        </div>
      </div>
      
      @empty
      <div class="card">
        <h2>Movies not found...</h2>
      </div>
      @endforelse
    </div>
  </section>
@endsection
