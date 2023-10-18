window.addEventListener('scroll', function() {
     if(window.scrollY > 1){
         document.querySelector("header").style.position = 'fixed';
     }else {
         document.querySelector("header").style.position = 'relative';
     }
})
let text = document.querySelector(".article-body a");
if(text)
{
    const span = document.querySelector(".article-body a");

    span.onclick = function(event) {
        event.preventDefault();
        navigator.clipboard.writeText(text.getAttribute("href"));
        span.innerText = "copied"
        span.style.color = "green"
        span.style.textDecoration = "none"
        console.log(span.innerText)

    }

}

    // span.addEventListener("click", function(event) {
    //     event.preventDefault();
    //     event.target.select();
    //     navigator.clipboard.writeText(event.target.getAttribute("href"));
    // });

$( document ).ready(function() {
    $('header .burger').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        if($(this).hasClass('active')){
            $(".mobile-menu").addClass('show')
        }else{
            $(".mobile-menu").removeClass('show')
        }
    });

    $(".right-mobile-part .lense").on('click', function(e){
        e.preventDefault();
        $('.right-mobile-part .search-bar').removeClass('hide');
    })

    $(".close-search").on('click', function(e){
        e.preventDefault();
        $(this).parents('.search-bar').addClass('hide');
    });


    $('.main-slider').slick({
        dots: true,
        arrows: false
    });
    $('.partner-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 1,
        prevArrow: "<button class='slick-prev' type='button'></button>",
        nextArrow: "<button class='slick-next' type='button'></button>",
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
        ]
    });
    $('.worker-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<button class='slick-prev' type='button'></button>",
        nextArrow: "<button class='slick-next' type='button'></button>",
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
        ]

    });
    $('.service-slider').slick({
        dots: false,
        slidesToShow: 7,
        slidesToScroll: 1,
        prevArrow: "<button class='slick-prev' type='button'></button>",
        nextArrow: "<button class='slick-next' type='button'></button>",
        responsive: [

            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    // $("#main-scroller").click(function() {
    //     $([document.documentElement, document.body]).animate({
    //         scrollTop: $("#elementtoScrollToID").offset().top
    //     }, 2000);
    // });

    $(".calendar-arrow").on('click', function(e){
        e.preventDefault();
        var current = $(this).parents(".month");
        console.log(current);
        if($(this).hasClass("move-left")){
            var prev = current.prev();
            current.insertBefore(prev)
            prev.addClass('current');
            prev.removeClass('prev');
            current.addClass('prev');
            current.removeClass('current');
        }else{
            var next = current.next();
            next.insertBefore(current)
            next.addClass('current');
            next.removeClass('next');
            current.addClass('next');
            current.removeClass('current');
        }
    });
});

// document.addEventListener('scroll',() => {
//     console.log(window.scrollY)
// })
