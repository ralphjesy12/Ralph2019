@extends('layouts.app')

@section('content')

    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                @include('partials.home-menu',[
                    'active' => 'contact'
                ])
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-table mh-100v">
                    <div class="d-table-cell align-middle">
                        <div class="mxh-100 px-3 py-5">
                            @php
                            use Faker\Generator as Faker;
                            use Faker\Provider\Internet as Internet;
                            use Faker\Provider\en_US\Person as Person;
                            use Faker\Provider\Lorem as Lorem;
                            $faker = new Faker();
                            $faker->addProvider(new Lorem($faker));
                            $faker->addProvider(new Person($faker));
                            $faker->addProvider(new Internet($faker));

                            $user = [
                                'name' => $faker->firstName . ' ' . $faker->lastName,
                            ];

                            $questions = [
                                "If You Had The World&apos;s Attention For 30 Seconds, What Would You Say?",
                                "If You Had To Work But Didn&apos;t Need The Money, What Would You Choose To Do?",
                                "What Is In Your Fridge Right Now?",
                                "If You Were Home On A Rainy Sunday Afternoon, What Movie Would You Most Want To See On Television?",
                                "Where Do You Not Mind Waiting?",
                                "If You Could Close One Fast Food Chain, Due To Disgusting Food, What Would You Pick?",
                                "If You Could Dis-Invent One Thing, What Would It Be?",
                                "If You Could Be A Member Of Any TV-Sitcom Family, Which Would It Be?",
                                "What Would Be The Best Thing About Not Having A Sense Of Smell?",
                                "Would You Leave Your Hometown Forever Or Stay In Your Hometown Forever?",
                                "When Scrolling Through Social Media, Do You Prefer Posts From Celebrities Or From Your Best Friends?",
                                "Is There An App That You Hate But Use Anyways?",
                                "If You Could Only Speak One Word Today, What Would You Say?",
                                "What Is The Stupidest Thing You&apos;ve Done Because Someone Dared You To?",
                                "What Is The Stupidest Thing You&apos;ve Done On Your Own Free Will?",
                                "If You Could Lock Up One Person In A Mental Institution, Who Would It Be?",
                                "What Part Of The Human Face Is Your Favorite?",
                                "Do You Do Dance Crazy When No One Is Looking?",
                                "What Was The Best Thing Before Sliced Bread?",
                                "If You Could Wedgie Any Historical Figure, Who Would You Pick?",
                                "You&apos;ve Been Given An Elephant. You Can&apos;t Get Rid Of It. What Would You Do With It?",
                                "Would You Rather Look Like A Potato, Or Feel Like A Potato?",
                                "You&apos;re In The Circus, Would You Rather Be The Person With Their Head Inside The Lion&apos;s Mouths Or Get Shot Out Of The Cannon?",
                                "Would You Rather Never Be Able To Express Yourself Accurately Or Always Have To Say The Exact Truth?",
                                "Would You Rather Be Able To Copy And Paste In Real Life, Or Undo In Real Life?",
                                "Would You Rather Keep Your Current Sleep Schedule Or Hibernate For 3 Months And Have 9 Months Of 24/7 Alertness Without Being Tired?",
                                "Would You Rather Have A Permanently Clogged Nose Or A Piece Of Green Food Always Stuck In Your Teeth?",
                                "Would You Rather Be Able To Breathe Underwater Or Have The Agility Of A Cat?",
                                "What Makes Someone A Hero?",
                                "If You Inherited A Private Jet From A Stranger, What Would You Do With It?",
                                "What Are You Freakishly Bad At?",
                                "What&apos;s Something You&apos;ve Tried, That You&apos;ll Never, Ever Try Again?",
                                "What Are The Qualities You Really Enjoy In A Friend?",
                                "In What Situation Or Place Would You Feel The Most Out Of Place In?",
                                "Would You Rather Have Unlimited Sushi For Life Or Unlimited Tacos For Life?",
                                "What&apos;s An Ideal Christmas/Holiday For You?",
                                "What&apos;s A Common Thing That You Think About When You&apos;re Alone?",
                                "What Is The Most Difficult Challenge Thus Far In Your Life?",
                                "If You Could Change One Thing About Your Upbringing, What Would It Be?",
                                "When You Are Old, What Do You Think Children Will Ask You To Tell Stories About?",
                                "When Things Break, Do You Prefer To Fix Them Or Replace Them?",
                                "What Product Would You Seriously Stockpile If You Found Out They Weren&apos;t Going To Sell It Anymore?",
                                "Do You Recycle?",
                                "How Often Do You Look At Your Phone Every Day?",
                                "Describe Your Life Using One Word.",
                                "Have You Ever Cried At A Movie?",
                                "Do You Have Tattoos?",
                                "What Do You Think About Clowns?",
                                "If You Had All The Money In The World, What Would Be The First Thing You&apos;d Buy?",
                                "Who Gives You The Courage To Try New Things?",
                                "Are You Willing To Give The Shirt On Your Back To Someone Who Needs It The Most?",
                                "What Chore Do You Absolutely Hate Doing?",
                                "What&apos;s Your Least Favorite Mode Of Transportation?",
                                "What Sound Do You Love?",
                                "If You Could Paint A Picture Of Any Scenery You&apos;ve Seen Before, What Would You Paint?",
                                "What Is Something You Learned In The Last Week?",
                                "What Was The Last Experience That Made You A Stronger Person?",
                                "What Is Your First Memory Of Being Really Excited?",
                                "At What Age Did You Become An Adult?",
                                "The Best Part Of Waking Up Is?",
                                "If You Could Learn Any Language Fluently, What Would It Be?",
                                "Do You Get Along With Your Parents?",
                                "What Is The One Food That You Would Never Give Up?",
                                "If You Had Unlimited Resources, How Would You Live Your Life?",
                                "When Was The Last Time You Took Some Time To Be Alone?",
                                "What Habits Are Holding You Back From Success?",
                                "What Is The Source Of Your Procrastination?",
                                "Do You Think Any Kind Of Afterlife Exists?",
                                "When You&apos;re 90 Years Old, What Will Matter Most To You?",
                                "Do You Serve Money Or Does Money Serve You?",
                                "What Do People Do Too Much Of Today?"
                            ];
                            @endphp
                            @if(isset($_REQUEST['thankyou']))
                                <h1>i got your message!</h1>
                                <p>
                                    let me finish this coffee. i&apos;ll get back to you asap!
                                </p>
                                <a class="btn btn-primary" href="/contact">Ask again</a>
                            @else
                                <h1>ask anything you like</h1>
                                <div id="mc_embed_signup">
                                    <form action="https://ralphjohngalindo.us20.list-manage.com/subscribe/post?u=bc501e60ef71a24f3559121d9&amp;id=a904c3ef70" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="form-group">


                                                <label for="mce-EMAIL">Your Email</label>
                                                <input type="email" aria-describedby="your-email-help" value="{{ $faker->unique()->freeEmail }}" name="EMAIL" class="form-control email" id="mce-EMAIL" required>
                                                <small id="your-email-help" class="form-text text-muted">So i can say hello, when you say hi ...</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="your-email">Your Question</label>
                                                <textarea class="form-control" placeholder="C'mon! I know you're a conversation starter, right?" rows="7" name="MESSAGE" id="mce-MESSAGE" required>{!! $faker->randomElement($questions) !!}</textarea>
                                                <small id="your-email-help" class="form-text text-muted"><a href="/contact">Click here, if you're not sure what to ask</a></small>
                                            </div>
                                            <div class="form-group">
                                                <div id="mce-responses" class="clear">
                                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                                </div>
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc501e60ef71a24f3559121d9_a904c3ef70" tabindex="-1" value=""></div>
                                                <div class="clear">
                                                    <button class="btn btn-primary" type="submit" disabled  name="subscribe" id="mc-embedded-subscribe" >
                                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                        Checking if you're a robot...
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcdo44UAAAAAPXtqu83NHZZKjfvBgxehTFS1l0M"></script>
    <script>
    $(function(){
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lcdo44UAAAAAPXtqu83NHZZKjfvBgxehTFS1l0M', {action: 'contact'}).then(function(token) {
                axios.get('/recaptcha/verify',{
                    params: {
                        response: token
                    }
                }).then(function(resp){

                    if(resp.status == 200 && resp.data.success){
                        $('#mc_embed_signup [type="submit"]').prop('disabled',false).html('Send message');
                    }else{
                        $('#mc_embed_signup [type="submit"]').html('Oops! You seem to be a bot, refreshing...');
                        window.location.reload();
                    }
                });
            });
        });
    });
</script>
@endpush
