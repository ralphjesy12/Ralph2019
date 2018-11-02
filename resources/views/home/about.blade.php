@extends('layouts.app')

@section('content')

    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                @include('partials.home-menu',[
                    'active' => 'about'
                ])
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-table mh-100v ">
                    <div class="d-table-cell align-middle py-5">
                        <h1>oh! hello there.</h1>
                        <p>
                            I'm Ralph John Galindo, a self-proclaimed Web Artisan from Imus, Philippines living in Manila, where I work as a Developer in a Digital Agency. With a background in programming, my strength lies in building apps and websites.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
