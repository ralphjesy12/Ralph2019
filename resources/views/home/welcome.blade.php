@extends('layouts.app')

@section('content')

    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                @include('partials.home-menu')
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-table mh-100v text-center text-md-left">
                    <div class="d-table-cell align-middle py-5">
                        <img src="{{ asset('img/avatar.png') }}" class="img-avatar mb-3" alt="">
                        <h1 class="font-weight-bold text-uppercase">I'm a Web Artisan</h1>
                        <p>
                            from the Philippines living in Manila, where I work as a Developer in a Digital Agency. With a huge background in programming, my strength lies in building apps and websites.
                        </p>
                        <a href="#" class="btn btn-primary text-uppercase">
                            Check what i do
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
