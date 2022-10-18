/*
Developer Name: ABTanjir;
Email         : abtanjir@gmail.com;
Mobile        : +8801911222919;
*/
$(function() {

    var windowHeight = $(window).height();
    var headingHeight = $('.heading').height() + 50;

    var scrollTop;

    function setToBottom(childDivHeight, divClass) {
        windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        if (windowHeight + scrollTop - childDivHeight < 705) {
            $(divClass).css("padding-top", windowHeight + scrollTop - childDivHeight);
        } else {
            $(divClass).css("padding-top", 705);
        }
    }

    $(window).on('load resize scroll', function() {
        setToBottom(headingHeight, '.heading')
    });

    //function setToBottom(childDivHeight, divClass){
    //   windowHeight = $(window).height();
    //  var scrollTop = $(window).scrollTop();
    //if(windowHeight+scrollTop-childDivHeight<705){
    //   $(divClass).css("padding-top", windowHeight - childDivHeight - 20);
    //}else{
    //     $(divClass).css("padding-top", 705);
    //}
    //}
    function fixBg(divClass) {
        windowHeight = $(window).height();
        $(divClass).css({
            "min-height": windowHeight,
            "background-possition": '0 ' + windowHeight / 2 + ' !important'
        });
    }

    /*    $(window).on( 'load resize scroll', function(){
            setToBottom(headingHeight, '.heading');
            fixBg('.resize-height');
        });
    */
    $(window).on('load resize', function() {
        fixBg('.screen_height');
    });

    //smooth scroll
    if (!($("#scroll_disable").length > 0)) {
        $(document).on('click', 'a[href^="#"]', function(e) {
            var id = $(this).attr('href');
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }
            e.preventDefault();
            var pos = $(id).offset().top;
            $('body, html').animate({
                scrollTop: pos
            });
        });
    }



    //video pause resume on click
    $('#video_background').click(function() {
        this.paused ? this.play() : this.pause();
    });


    //html markup to posts
    function preProcess(selector) {
        $tempString = $(selector).val();
        $newString = $tempString.trim();
        if ($tempString.indexOf(":") >= 0) {
            //alert($tempString);
            $newString = $tempString.replace(/<\/p><p>/g, '\n');
            $newString = $newString.replace(/<p>/g, "");
            $newString = $newString.replace(/<\/p>/g, "");
            $newString = $newString.replace(/<b>/g, "");
            $newString = $newString.replace(/<\/b>/g, "");

            //alert($newString);
        } else {
            $newString = $tempString.replace(/\<br>/g, "");
        }
        return $newString;
    }

    function postProcess(selector) {
        $tempString = $(selector).val();
        $tempString = $tempString.trim();

        if ($tempString.indexOf(":") >= 0) {
            $newString = $tempString.replace(/\n/g, /<\/p>\n/);
            $tempString = $newString;

            var readyString = '';
            var arrayOfLines = $(selector).val().split('\n');

            $.each(arrayOfLines, function(index, item) {

                var arr = item.split(':');
                //console.log(arr[0]);
                boldTxt = item.replace(arr[0], '</p><p><b>' + arr[0] + '</b>');

                readyString += boldTxt;
                if (index === arrayOfLines.length - 1) {
                    return false;
                }
            });
            return (readyString + '</p>');
        } else {
            $newString = $tempString.replace(/\n/g, "<br>\n");
            return ($newString);
        }

    }

    if (($("#s_markup").length > 0) && ($("#p_markup").length > 0)) {
        /* this is dashboard */
        $('#product').click(function() {
            $('#p_markup').val(postProcess('#p_markup'));
        });

        $('#store').click(function() {
            $('#s_markup').val(postProcess('#s_markup'));
        });

        $('#s_markup').val(preProcess('#s_markup'));
        $('#p_markup').val(preProcess('#p_markup'));
    }
    /*-------------auto complete url friendly---------------*/
    $("#wood_name").on("change paste keyup", function() {
        $str = $(this).val().toLowerCase();
        $str = $str.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '_');
        $('#wood_copy').val($str);
    });
    /*------------------- confirm box fnction -----------------------*/
    //ajax delete from database
    $('a').on('click', function(e) {
        if (this.id == 'ajax') {
            e.preventDefault();
            var del = $(this).attr("href");
            var name = $(this).attr("item_name");
            var target = $(this).attr("target");
            var t = $(this).parents('li');
            if (target == "tr") {
                var t = $(this).parents('tr');
            }
            if (confirm('Do you want to delete \n*' + name + '*\n permanently?')) {
                $.ajax({
                    url: del,
                    cache: false,
                    type: "get",
                    success: function(response) {
                        t.remove();
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            }
        }
    });

});