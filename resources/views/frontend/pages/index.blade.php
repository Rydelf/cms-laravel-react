@extends('frontend.layouts.master')

@section('title')
    {{ config('app.name') }} | {{ config('app.description') }}
@endsection

@section('main-content')

<main class="main">

  <!-- Page Content -->
  <div class="main-header">
    <div class="container">
        <h1 class="display-4">Bienvenido a {{ $settings->general->name }}</h1>
        <p class="lead">
            Un Admin Panel customizado, desarrollado con Laravel...
        </p>
        <a href="{{ route('admin.index') }}" class="btn btn-primary btn-lg">Vamos ››</a>
    </div> 

    </div>
    <!-- /.container -->
  </div>
</main>

@endsection
