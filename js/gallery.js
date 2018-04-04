  function() {
    var playSlide;

    function setImg() {
      $('.big-img img').attr('src', $('li.active a').attr('href') );
    }
    setImg();

    function rotateImg() {
      playSlide = setInterval(function() {
        var index = $active = $('li.active').next('li');

        $('.big-img img').fadeOut('normal', function() {
          $('.small-img li').removeClass('active');
          $active.addClass('active');
          if(index.length == 0){
            $('.small-img li:first').addClass('active');
          }
          setImg();
        });
        $('.big-img img').fadeIn();
      }, 5000);
    }

    rotateImg();

    $('.gallery').mouseover(function() {
      clearInterval(playSlide);

      $('.small-img li').hover(function() {
        $('.small-img li').removeClass('active');
        $(this).addClass('active');
        setImg();
      });
    });

    $('.gallery').mouseout(function() {
      rotateImg();
    });
  }