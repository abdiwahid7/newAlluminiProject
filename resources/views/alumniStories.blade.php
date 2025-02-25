@extends('layouts.app')

@section('content')
<section class="alumni-success">
    <h2 class="section-title">Outstanding Alumni Success Stories</h2>
    <div class="success-grid">
        @foreach ($stories as $story)
            <div class="success-item">
                <h3>{{ $story->title }}</h3>
                <p>{{ $story->content }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection
