@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg" style="background-color: #1f1f1f;">
                <div class="card-header bg-dark text-white border-0">
                    <h3 class="fw-bold">{{ __('Welcome to Your Dashboard') }}</h3>
                </div>

                <div class="card-body bg-dark text-white">
                    <h2 class="fw-light">Welcome back, {{ Auth::user()->name }}!</h2>
                    <p class="fw-normal">You have successfully logged in.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background: #121212;
        color: #ffffff;
        font-family: 'Roboto', sans-serif;
    }
    .card {
        border-radius: 1rem;
        background: #1f1f1f;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-radius: 1rem 1rem 0 0;
        font-size: 1.5rem;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
    }
    .card-body {
        border-radius: 0 0 1rem 1rem;
    }
    .fw-bold {
        font-weight: 700;
    }
    .fw-light {
        font-weight: 300;
    }
    .fw-normal {
        font-weight: 400;
    }
</style>
