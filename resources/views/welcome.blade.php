@extends('layouts.app')

@section('content')

    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-table mh-100v ">
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
            <div class="col-md-6">
                <div class="d-table mh-100v ml-auto">
                    <div class="d-table-cell align-middle py-5">
                        <ul id="main-menu" class="nav flex-column text-right">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#work">work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#journal">journal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
