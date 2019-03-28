$(document).ajaxComplete(function () {
    $(".fakten-counter img").each(function (i, elem) {
        var img = $(elem);
        var div = $('<div class="bgimg"/>').css({
            background: "url(" + img.attr("src") + ") no-repeat center"
        , });
        img.replaceWith(div);
    });
    var a = 0;
    $(window).scroll(function () {
    
        if (document.querySelector('#counter') !== null) {
            var oTop = $('#counter').offset().top - window.innerHeight;
        }
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function () {
                var $this = $(this)
                    , countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000
                    , easing: 'swing'
                    , step: function () {
                        $this.text(Math.floor(this.countNum));
                    }
                    , complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }
                });
            });
            a = 1;
        }
    });
});