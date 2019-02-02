@extends('layouts.app')

@section('content')

    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                @include('partials.home-menu',[
                    'active' => 'work'
                ])
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-table mh-100v">
                    <div class="d-table-cell align-middle" style="width: 100%;">
                        <div class="mxh-100 py-5">

                            <h1 class="font-weight-bold">february <span class="text-muted">2019</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">My Portfolio 2019</h4>
                                    <small>Branding • Design • Laravel</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 7; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/portfolio'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">january <span class="text-muted">2019</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">GAIA + Wellness</h4>
                                    <small>Branding • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 5; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/gaia'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">may <span class="text-muted">2018</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Cavite Brewery</h4>
                                    <small>Branding • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 6; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/cavitebrewery'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">march <span class="text-muted">2018</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">GAIA Mobile App</h4>
                                    <small>Branding • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 5; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/gaiamobile'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">february <span class="text-muted">2018</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Travelife</h4>
                                    <small>Wordpress • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 7; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/tridem'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">june <span class="text-muted">2017</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">My Portfolio 2017</h4>
                                    <small>Wordpress</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 10; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/ralph'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">december <span class="text-muted">2016</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Demo Trading Account</h4>
                                    <small>Bulma • Laravel • PHP • REST • Vue</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 4; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/demotrading'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">november <span class="text-muted">2016</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Imagination PH</h4>
                                    <small>Bootstrap • jQuery • Wordpress</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 4; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/imgph'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">august <span class="text-muted">2016</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">iSoftbet Casino</h4>
                                    <small>Bootstrap • jQuery • PHP • Wordpress</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 4; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/isb'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">june <span class="text-muted">2016</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Market Masterclass</h4>
                                    <small>Bootstrap • Wordpress</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 4; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/mmc'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">july <span class="text-muted">2015</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Crew Development Training System</h4>
                                    <small>Bootstrap • jQuery • Laravel • MySQL • PHP</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 7; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/cdts'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">july <span class="text-muted">2015</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">Abibaa Online Shopping</h4>
                                    <small>Bootstrap • MVC • MySQL • PHP</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 1; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/abibaa'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">may <span class="text-muted">2015</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">K-COM Realty</h4>
                                    <small>Bootstrap • Branding • Design • Wordpress</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 12; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/kcom'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">april <span class="text-muted">2015</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">AlphaCrop</h4>
                                    <small>Branding • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 2; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/alphacrop'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">march <span class="text-muted">2015</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">AMUTECH</h4>
                                    <small>Branding • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 5; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/amutech'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">GoldLeaf POS System</h4>
                                    <small>Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 6; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/goldleaf'.str_pad($i,5,'0',STR_PAD_LEFT).'.jpg') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">february <span class="text-muted">2014</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">TUP Course Scheduling System</h4>
                                    <small>Bootstrap • jQuery • MsSQL • MVC • MySQL • PHP</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 5; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/tupcss'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>

                            <h1 class="font-weight-bold">october <span class="text-muted">2013</span></h1>
                            <hr />
                            <article class="my-5">
                                <div class="alert alert-primary bg-primary text-white" role="alert">
                                    <h4 class="alert-heading">AUTTO SHOT STRUCTURAL DESIGN</h4>
                                    <small>CAD • Design</small>
                                </div>
                                <div class="work-carousel">
                                    @for ($i=1; $i <= 13; $i++)
                                        <div class="work-carousel-item">
                                            <img class="work-carousel-image" data-lazy="{{ asset('img/works/coffeebar'.str_pad($i,5,'0',STR_PAD_LEFT).'.png') }}" />
                                        </div>
                                    @endfor
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
    article{
        background: #fff;
    }
    .work-carousel{
        width: 80vw;
        margin: 0 auto;
        max-width: 400px;
    }
    .work-carousel-item{
        padding: 1em;
        filter: grayscale(1);
        opacity: 0.5;
        transition: all 200ms ease-in;
    }

    .work-carousel-item.slick-current{
        padding: 1em;
        filter: grayscale(0);
        opacity: 1;
    }
    .work-carousel-image{
        height: 200px;
    }

    .slick-dots li{
        width: auto;
    }
    .slick-dots li button{
        background: #6b757e;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        padding: 0;
        margin: 0 auto;
    }
    .slick-dots li.slick-active button{
        background: #000;
        width: 20px;
        border-radius: 5px;
    }

    .slick-dots li button:before{
        content: none;
    }
    </style>
@endpush

@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $('.work-carousel').slick({
        lazyLoad: 'ondemand',
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });
    </script>
@endpush
