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
                <div class="d-table mh-100v">
                    <div class="d-table-cell align-middle">
                        <div class="mxh-100 py-5">
                            <h1 class="mt-5">oh! hello there.</h1>
                            <p>
                                I'm Ralph John Galindo, a self-proclaimed Web Artisan from Imus, Philippines living in Manila, where I work as a Developer in a Digital Agency. With a background in programming, my strength lies in building apps and websites.
                            </p>

                            <hr />

                            <h1>i love to code. really.</h1>
                            <p>
                                It’s like having magic powers! Imagine casting a fireball on your hand out of nowhere. That’s what I feel like when I build websites. Sounds fun right?
                            </p>

                            <hr />

                            <h1>things i do.</h1>
                            <p>
                                I've been building websites and apps more than five years now. Yeah, I'm still a rookie. That's for sure. But I'm proud to say that I'm good at what I do and I love what I do best. Check it out <a href="/work">here</a>.
                            </p>

                            <hr />

                            <h1>what's next on my list?</h1>
                            <p>
                                Back in college, I dreamt of building an app that helps people. I named it "Project Eve", ( derived from a character in Wall-E ) . The aim of this project is to build an app the teaches people how to protect mankind. An app that gives any age the wisdom to conserve nature and reduce the most pressing threats to the diversity of life on Earth. It's still a work in progress, but you might wanna check it out <a href="https://github.com/ralphjesy12/ProjectEve" target="_blank">here</a>.
                            </p>

                            <hr />

                            <h1>i'm always ...</h1>
                            <p>
                                looking for a place where I can enjoy building my craft. A group who believes that dreams are kept to make things happen. A team composed of exemplary members who not only possess great skills but also passionate enough to deliver the needs of its clients. I've spent the last years jumping holes, flipping boulders, looking for the best place to elevate my skills.
                            </p>

                            <hr />

                            <h1>hire me if you want to ...</h1>
                            <p>

                                Have an additional 100% weird guy.<br>
                                One who loves coffee and nightsky.<br>
                                Someone who always want try and try.<br>
                                A dreamer who don't just live and die.<br><br>

                                Poetry aside, one thing I can assure you is - I love what I do.

                            </p>

                            <hr />

                            <h1>Want to know more about me?</h1>
                            <p class="mb-5">
                                <a href="/contact">Ask</a> anything you like. It would be my pleasure.<br>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
