<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plato</title>
    <link rel="stylesheet" href="{{ asset('js/slick/slick/slick.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="{{ asset('js/slick/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}

</head>
<body>
    @php
        $lang = app()->getlocale();
    @endphp
    <header>
        <div class="outer">
            <div class="inner">
                <div class="question hidden md:flex 2xl:gap-x-2 rounded-full">
                <!--<p class="text-white px-1"><span>{{__('есть вопросы')}}?</span></p>-->
                    <a href="https://wa.me/994515052111">
                        <img src="{{asset('/img/wp-icon.svg')}}" alt="">
                    </a>
                </div>
                <div class="header-wrapper">
                    <div class="left-header">
                        <a href="{{route('home')}}">
                            <img src="{{asset('img/Loqo.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="right-header desktop-menu">
                        <ul >
                            <li class="nav @if(Route::currentRouteName() == 'home') active @endif has-child">
                                <a href="{{route('home')}}" class="profile-icon">{{ __('PLATO Intro') }}</a>
                                <div class="pl-15 sub-menu">
                                    @foreach($platoIntro as $p)
                                    <a class="sub-child" href="{{$p->url}}">{{$p->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                             <li class="nav @if(Route::currentRouteName() == 'service') active @endif has-child">
                                <a href="{{route('service')}}">{{ __('Xidmətlərimiz') }}</a>
                                 <div class="pl-15 sub-menu" style="width: 300px">
                                     @foreach($services as $s)
                                         <a class="sub-child" href="{{route('service', $s->id)}}">{{$s->title}}</a>
                                     @endforeach
                                 </div>
                            </li>
                            <li class="nav @if(Route::currentRouteName() == 'article-category') active @endif ">
                                <a href="{{route('article-category')}}">{{ __('Məqalə və nəşrlər') }}</a>
                            </li>
                            <li class="nav @if(Route::currentRouteName() == 'news') active @endif ">
                                <a href="{{route('news')}}">{{ __('Xəbərlər') }}</a>
                            </li>
                        </ul>
                        <a href="{{route('faq')}}" class="faq-link">
                            <span>{{ __('messages.faq') }}</span>
                            <div>
                                <img src="{{asset('img/que.svg')}}" alt="" />
                                <img src="{{asset('img/que-hover.svg')}}" alt="" />
                            </div>
                        </a>
                        <a href="{{route('send-mail')}}" class="contact-link">
                            <span>{{ __('messages.contact') }}</span>
                            <div>
                                <img src="{{asset('img/contact.svg')}}" alt="" />
                                <img src="{{asset('img/contact-hover.svg')}}" alt="" />
                            </div>
                        </a>
                        <a href="{{route('career')}}" class="career-link">
                            <span>{{ __('messages.career') }}</span>
                            <div>
                                <img src="{{asset('img/career.svg')}}" alt="" />
                                <img class="" src="{{asset('img/career-hover.svg')}}" alt="" />
                            </div>
                        </a>
                        <form class="search-bar" action="/search">
                            <div class="search-block">
                                <input type="text" placeholder="{{ __('messages.search_text') }}" name="query" autocomplete="off"/>
                                <ul></ul>
                            </div>
                            <button type="submit">
                                <img src="{{asset('img/lense.svg')}}" alt="">
                            </button>
                        </form>
                        <div class="lang-bar">
                            <a href="/lang/az" class="@if($lang == 'az')  active  @endif ">
                                <img src="{{asset('img/az.svg')}}" alt="">
                            </a>
                            <a href="/lang/en" class="@if($lang == 'en')  active  @endif ">
                                <img src="{{asset('img/eng.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-mobile-part">
                        <div class="right-menu-handler">
                            <form class="search-bar hide" action="/search">
                                <img src="{{asset('img/left-search.svg')}}" class="close-search" alt="">
                                <div class="search-block-mobile">
                                <input type="text" placeholder="{{ __('messages.search_text') }}" name="query" autocomplete="off"/>
                                <ul></ul>
                            </div>
                                <button type="submit">
                                    <img src="{{asset('img/lense.svg')}}" alt="">
                                </button>
                            </form>
                            <a href="" class="lense">
                                <img src="{{asset('img/lense.svg')}}" alt="">
                            </a>
                            <a href="https://wa.me/994515052111" class="whatsapp">
                                <img src="{{asset('img/whatsapp.svg')}}" alt="">
                            </a>
                            <div class="burger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <img src="{{asset('img/close-menu.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="right-header mobile-menu">
                        <div class="mobile-menu-white">
                        <div class="lang-bar">
                            <a href="" class="@if($lang == 'az')  active  @endif ">
                                <img src="{{asset('img/az.svg')}}" alt="">
                            </a>
                            <a href="" class="@if($lang == 'en')active  @endif ">
                                <img src="{{asset('img/eng.svg')}}" alt="">
                            </a>
                        </div>
                        <ul >
                            <li class="nav @if(Route::currentRouteName() == 'home') active @endif has-child">
                                <a href="{{route('home')}}" class="profile-icon relative">
                                    {{ __('messages.main') }}
                                </a>
                                <div class="pl-15 sub-menu-mobile">
                                    <a class="sub-child" href="{{route('team')}}">PLATO Team</a>
                                    <a class="sub-child" href="{{route('etik-kodeks')}}">Etik kodeks</a>
                                    <a class="sub-child" href="{{route('corporate-responsibility')}}">Korporativ Sosial Məsuliyyət</a>
                                    <a class="sub-child" href="{{route('etik-kodeks')}}">FAQ</a>
                                    <a class="sub-child" href="{{route('month-workers')}}">PLATO Members</a>
                                    <a class="sub-child" href="{{route('ambassador')}}">PLATO Ambassador</a>
                                    <a class="sub-child" href="{{route('partners')}}">PLATO partners</a>
                                    <a class="sub-child" href="{{route('event-category')}}">PLATO Events</a>
                                </div>
                            </li>
                            <li  class="nav @if(Route::currentRouteName() == 'service') active @endif">
                                <a href="{{route('service')}}">{{ __('messages.services') }}</a>

                            </li>
                            <li class="nav @if(Route::currentRouteName() == 'article-category') active @endif">
                                <a href="{{route('article-category')}}">{{ __('messages.articles') }}</a>
                            </li>
                            <li class="nav @if(Route::currentRouteName() == 'news') active @endif">
                                <a href="{{route('news')}}">{{ __('messages.news') }}</a>
                            </li>
                        </ul>
                        <a href="{{route('career')}}" class="career-link">
                            <img src="{{asset('img/career.svg')}}" alt="" />
                            <span>{{ __('messages.career') }}</span>
                        </a>
                        <a href="{{route('etik-kodeks')}}" class="faq-link">
                            <img src="{{asset('img/que.svg')}}" alt="" />
                            <span>{{ __('messages.question') }}</span>
                        </a>
                        <a href="{{route('send-mail')}}" class="contact-link">
                            <img src="{{asset('img/contact.svg')}}" alt="" />
                            <span>{{ __('messages.contact') }}</span>
                        </a>
                    </div>
                    </div>


                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        @yield('content')
    </div>
    <footer class="outer">
        <div class="inner">
            <div class="flex-footer">
                <div class="footer-soc">
                    <div class="soc-links">
                        <a href="">
                            <img src="{{asset('img/linkeding_footer.svg')}}" class="logo" alt="" />
                        </a>
                        <a href="">
                            <img src="{{asset('img/footinst.svg')}}" class="logo" alt="" />
                        </a>
                        <a href="">
                            <img src="{{asset('img/footer_youtube.svg')}}" class="logo" alt="" />
                        </a>
                        <a href="">
                            <img src="{{asset('img/footer_facebook.svg')}}" class="logo" alt="" />
                        </a>
                        <a href="">
                            <img src="{{asset('img/twitter_footer.svg')}}" class="logo" alt="" />
                        </a>
                    </div>
                    <div class="meta-info">
                        Copyright {{\Carbon\Carbon::now()->format('Y')}} academy plato.az. All right Reserved
                    </div>
                </div>
                <div class="footer-contact">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('img/logo_black.svg')}}" class="logo" alt="" />
                    </a>
                    <div class="footer-contact-list">
                        <div class="contact-item">
                            <img src="{{ asset('img/phone.svg') }}" alt="">
                            <div>
                                +99451 505 21 11
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('img/email.svg') }}" alt="">
                            <div>
                                hello@academyplato.az
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="footer-whatsapp">--}}
{{--                    <a target="_blank" href="https://wa.me/994515052111">--}}
{{--                        <span>{{ __('messages.have_question') }}</span>--}}
{{--                        <img src="{{asset('img/what.svg')}}" alt="" />--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </footer>
</body>
<script>
    const searchBlock = document.querySelector('.search-block ul');
     const searchBlockMob = document.querySelector('.search-block-mobile ul');
    const searchKeys = [
        {
            name: "Plato Təlimləri",
            url: "/event-category"
        },
        {
            name: "Hazırlıq dərsləri",
            url: "/services/1"
        },
        {
            name: "Sertifikatlı təlimlər",
            url: "/services/2"
        },
        {
            name: "Mentor və konsultasiya xidməti",
            url: "/services/3"
        },
        {
            name: "Seçmə təqdimatlar",
            url: "/services/4"
        },
        {
            name: "Tətbirlər",
            url: "/services/5"
        },
        {
            name: "Elmi müzakirələr və dəyirmi masa",
            url: "/services/6"
        },
        {
            name: "Müsabiqə və yarışlar",
            url: "/services/7"
        },
        {
            name: "Maarifləndirici ekskursiyalar",
            url: "/services/8"
        },
        {
            name: "Tərcümət",
            url: "/services/9"
        },
        {
            name: "Məqalələr",
            url: "/services/10"
        },
        {
            name: "Xaricdə təhsil və kurslar",
            url: "/services/11"
        },
        {
            name: "Dizayn və promo materiallar",
            url: "/services/12"
        },

    ]
    searchKeys.map((value, key) => {
        const html = `<li id="${key}"><span>#</span><a href="${value.url}">${value.name}</a></li>`;
        searchBlock.innerHTML += html;
        searchBlockMob.innerHTML += html;
    })
    document.addEventListener('click', (e) => {
        if (e.target.getAttribute('name') === 'query'){
            searchBlock.classList.add('open')
            searchBlockMob.classList.add('open')
        }
        else {
            if(searchBlock.classList.contains('open')){
                searchBlock.classList.remove('open');
                searchBlockMob.classList.remove('open')
            }
        }
    })

    // document.addEventListener('click', (e) => {
    //     console.log(document.querySelector('.has-child.open'))
    //     if (document.querySelector('.has-child.open') != null){
    //         if (!e.target.contains(document.querySelector('.has-child.open a'))){
    //             document.querySelectorAll('.has-child.open').forEach((value, key) => {
    //                 value.classList.remove('open')
    //             })
    //         }
    //     }
    // })
    document.querySelector('.search-block input').addEventListener('input', (e) => {
        let values = [...searchKeys];
        searchBlock.innerHTML = '';
        values = values.filter(v => v.name.toLowerCase().includes(e.target.value.toLowerCase()))
        values.map((value, key) => {
        const html = `<li id="${key}"><span>#</span><a href="${value.url}">${value.name}</a></li>`;
        searchBlock.innerHTML += html;
    })
        console.log(values)
    })
    /*document.querySelectorAll('.has-child').forEach((value, key) => {
        value.classList.remove('open')
        value.querySelector('a').addEventListener('click', (e) => e.preventDefault())
        value.addEventListener('click', (e) => {
            document.querySelectorAll('.has-child').forEach((v, key) => {
                v.classList.remove('open')
                v.classList.remove('active')
            })
            value.classList.toggle('open')
            value.classList.toggle('active')
        })
    })*/

</script>
</html>
