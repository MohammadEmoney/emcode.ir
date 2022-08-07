@extends('layouts.main')

@section('title', $portfolio->name)

@section('content')
<div id="hero" class="hero overlay">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Your story begins from here.</h1>
            <p>Your clients on the internet. Learn how to receive them.</p>
            <a href="#" class="btn btn-border">Learn more</a>
        </div><!-- /.hero-text -->
    </div><!-- /.hero-content -->
</div><!-- /.hero -->

<main id="main" class="site-main">
<div class="container">
    <div class="text-center">
        <h2 class="heading-separator">
            {{ $portfolio->name }}
        </h2>
        <div class="card">
            <div class="card-body">
                <div class="card-image">
                    <img src="{{ asset($portfolio->images->first()->src) }}" alt="{{ $portfolio->name }}">
                </div>
                <p>
                    {{ $portfolio->description }}
                </p>
            </div>
        </div>
    </div>
</div>
<main id="main" class="site-main">
@endsection
