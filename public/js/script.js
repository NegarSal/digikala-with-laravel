/*script for navbar*/
$(document).ready(function() {
    
    var box=$(window);
    var nav=$('header nav');
    var posEnd=0;

    box.scroll(function() {
        var posStart=box.scrollTop();
        if(posStart>posEnd){
            nav.addClass('hidden');
        }else{
            nav.removeClass('hidden');
        }
        posEnd=posStart;
    })
});

/*script for slider s0*/
var swiper0 = new Swiper('.s0', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
/*script for slider s1*/
var swiper1 = new Swiper('.s1', {
    slidesPerView: 4,
    spaceBetween: 20,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      }
    }
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }
/*script for timer in slider*/
$('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('%H:%M:%S'));
    });
  });
/*script for button more in product page-description*/
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "موارد بیشتر";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "بستن";
      moreText.style.display = "inline";
    }
  }

/*button more: for tab part*/


/*script for product page-tabs*/
  $('#product #tabs li').click(function() {
    $('#product #tabs li').removeClass('active');
    $(this).addClass('active');

    var child = $('#product #tabChildes .hidden');

    child.fadeOut(0);
    var index =$(this).index();
    child.eq(index).fadeIn();
})
