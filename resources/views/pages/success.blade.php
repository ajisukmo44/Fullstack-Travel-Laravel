@extends('layouts.success')


@section('title','success')

@section('content')

<!-- main -->
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_success.png') }}" alt="success" class="mt-5">
            <h1>Yaw ! Success</h1>
            <p>
                We've sent you email for trip instruction<br>
                please read it as well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5"> Home Page</a>
        </div>

    </div>
</main>
<!-- end main -->
@endsection

