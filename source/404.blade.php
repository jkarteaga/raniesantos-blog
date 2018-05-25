---
permalink: 404.html
---

@extends('_layouts.master')

@section('title', 'Page not found')

@section('content')
    <div class="has-text-centered content">
        <h1>404 Error</h1>

        <p>The page you were trying to access could not be found.</p>

        <a href="/" class="button is-primary">
            Go to home page
        </a>
    </div>
@endsection
