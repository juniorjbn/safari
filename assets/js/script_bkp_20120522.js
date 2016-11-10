$(document).ready(function() {
    (function(d){
        d.fn.shuffle=function(c){
            c=[];
            return this.each(function(){
                c.push(d(this).clone(true))
            }).each(function(a,b){
                d(b).replaceWith(c[a=Math.floor(Math.random()*c.length)]);
                c.splice(a,1)
            })
        };
            
        d.shuffle=function(a){
            return d(a).shuffle()
        }
    })(jQuery);

    // Home script
    $('#main.home').each(function() {
        var selected = false;
        var loading = false;
        var sliding = false;
		
        // Counter
        var temp_thumbler = 20000;
        var temp_google = 694445;
        var temp_iphone = 13000;
        var temp_facebook = 510040;
		
        setInterval(function() {
            temp_thumbler += 0.5;
            temp_google += 6;
            temp_iphone += 0.05;
            temp_facebook += 4;
			
            $('#counter .thumbler b').html('+' + util.number_format(temp_thumbler, 0, ',', '.'));
            $('#counter .google b').html('+' + util.number_format(temp_google, 0, ',', '.'));
            $('#counter .iphone b').html('+' + util.number_format(temp_iphone, 0, ',', '.'));
            $('#counter .facebook b').html('+' + util.number_format(temp_facebook, 0, ',', '.'));
        }, 100);
		
        // Home Banner rotation
		
        var active = 1;
        setInterval(function() {
            active++;
            if(active > 10)
                active = 1;
			
            $('.banner.active').fadeOut(500, function() {
                $(this).removeClass('active');
				
                $('.banner.type-0' + active).fadeIn(500, function() {
                    $(this).addClass('active');
                });
            });
			
        }, 5000);
        $('#banners .banner').shuffle();
        // Services brief explanation
       
        $('.services ul li').click(function() {
            
            if (loading) return false;
            loading = true;
			
            var link = $(this);
            var rel = link.find('a').attr('rel');
            $('.services ul li span.geral').addClass('selected');
            //
            // if(selected == false || selected != rel) 
            //     link.addClass('selected');
            // link.removeClass('disabled');
            
			link.removeClass('over');
            if (selected)
                $('#' + selected).slideUp('slow', function() {
                    
                    // $('.services ul li').removeClass('selected');
                    // $('.services ul li').removeClass('disabled');
                    
                    if(selected != rel) {
                        $('#' + rel).slideDown(function() {
                            loading = false;
                            selected = rel;
                            $('.services ul li').addClass('disabled');
                            $('.services ul li').removeClass('selected');
                            link.addClass('selected');
                            link.removeClass('disabled');
                            link.removeClass('over');
                        });

                    }else {
                        // $('#' + rel).slideDown(function() {
                        $('.services ul li').removeClass('selected');
                        $('.services ul li').removeClass('disabled');
                        link.removeClass('over');
                        loading = false;
                        selected = false;
                    //  });
                    
                    }
                });
            else 
				
                $('#' + rel).slideDown(function() {
                    link.addClass('selected');
                    $('.services ul li').addClass('disabled');
                    link.removeClass('disabled');
                    link.removeClass('over');
                    loading = false;
                    selected = rel;
                });
            return false;

        });
        $('.services ul li.grid-1').mouseover(function(){
            //var rel = $(this).find('a').attr('rel');
           // alert(rel);
           //$(this).fadeIn("slow");
            if(!selected){
                $(this).addClass('over');                
            } 
            $(this).removeClass('disabled');
        });
        $('.services ul li.grid-1').mouseout(function(){
            var rel = $(this).find('a').attr('rel');
            if(!selected){
                $(this).removeClass('over');                
            }else{
                if(rel != selected)
                    $(this).addClass('disabled');
            }
        });
        $('#main.home .grid-1 a').click(function(){
            $('body').animate({
                scrollTop: 460
            }, 800)
        });
		
		
        // Agencies slide
        var clients = Math.floor(Math.random() * 2) + 1;  // nth-child indices start at 1
        if ( clients == 1){
            $('.agencies.clients').hide();
        }
        else 
        {
            $('.brands.clients').hide();	
        }

        $('.agencies menu a').bind({
            click: function() 
            {
                if(sliding) return false;
				
                var pointer = $(this);
                var width = $('.agencies .scroller li').length * 137;
                var current = parseInt($('.agencies .scroller').css('left'));
                var distance = 0;
				
                if(pointer.is('.right-pointer'))
                {
                    if(current == -1920) distance = current - 137;
                    else distance = current - 960;
                    if((width + current) < 960)
                        distance = current;
                }
                else 
                {
                    distance = current + 1097;
                    if(distance > 0)
                        distance = 0;
                }
				
                sliding = true;
				
                $('.scroller').animate({
                    left: distance + 'px'
                }, 300,
                function() 
                {
                    sliding = false;
                });
            }
        });
        //Brands slide
        $('.brands menu a').bind({
            click: function() 
            {
                if(sliding) return false;
				
                var pointer = $(this);
                var width = $('.brands .scroller li').length * 137;
                var current = parseInt($('.brands .scroller').css('left'));
                var distance = 0;
				
                if(pointer.is('.right-pointer'))
                {
                    if(current == -9600) distance = current - 137;
                    else distance = current - 960;
                    if((width + current) < 960)
                        distance = current;
                }
                else 
                {
                    distance = current + 960;
                    if(distance > 0)
                        distance = 0;
                }
				
                sliding = true;
				
                $('.scroller').animate({
                    left: distance + 'px'
                }, 300,
                function() 
                {
                    sliding = false;
                });
            }
        });

    });
	
    $('#main.services').each(function() {
        var link = {
            active: false, 
            selected: false
        };
        var brief = {
            active: false, 
            selected: false
        };
        var sliding = false;
		
        // Services brief explanation
        $('menu a').bind({
            click: function() 
            {
                if(sliding) return false;
				
                link.selected = $(this);
				
                if(link.active)
                {
                    brief.active = $('#' + link.active.attr('rel'));
                    link.active.removeClass('active');
                }
                brief.selected = $('#' + link.selected.attr('rel'));
                link.selected.addClass('active');
				
                sliding = true;
                if(link.active)
                {
                    brief.active.slideUp('fast',function() {
                        brief.selected.slideDown('slow', function() {
                            link.active = link.selected;
                            sliding = false;
                        });
                    });
                }
                else 
                {
                    brief.selected.slideDown('slow', function() {
                        link.active = link.selected;
                        sliding = false;
                    });
                }
				
            }
        });
    });
	
    // About script
    $('#main.about').each(function() {
        var main_image = $('#main-image');
		
        // House slideshow
        $('#structure li > img').click(function() {
            var thumb = $(this).attr('src');
            var large = thumb.replace('/thumb', '');
			
            if (main_image.attr('src') != large) {
                main_image.fadeTo(300, 0.2, function() {
                    main_image.attr('src', large);
                });
            }
        });

        main_image.load(function() {
            loading = false;
            main_image.fadeTo(500, 1);
        })
    });
	
    $('#main.clients').each(function() {
        var sliding = false;
		
        $('menu a').bind({
            click: function() 
            {
                if(sliding) return false;
				
                var pointer = $(this);
                var section = pointer.parent().parent().parent().parent().parent();
                var list = pointer.parent().parent().parent().parent().children('ul');
                var width = parseInt(list.css('width'));
                var current = parseInt(list.css('left'));
                var distance = 0;
				
                if(pointer.is('.right-pointer'))
                {
                    distance = current - 140;
                    if(section.is('.brand')){
                        if(distance == -2800) distance = current - 420;
                        else distance = current - 560;
                    }
                    if(section.is('.agency'))
                        distance = current - 560;
                    if((width + current) <= 560)
                        distance = current;
                }
                else 
                {
                    distance = current + 140;
                    if(section.is('.brand'))
                        distance = current + 560;
                    if(section.is('.agency'))
                        distance = current + 560;
                    if(distance > 0)
                        distance = 0;
                }
				
                sliding = true;
				
                list.animate({
                    left: distance + 'px'
                }, 300,
                function() 
                {
                    sliding = false;
                });
            }
        });
    });
	
    // Contact us script
    $('#main.contactus').each(function() {
        // Contact Pin
        /*$('#main.contactus .city span').mouseover(function(){
			$('.city .map-mark').removeClass('pink');
			$(this).addClass('pink');
		});
		
		$('#main.contactus .city span').mouseout(function(){
			$('.city .map-mark').addClass('pink');
		});*/
		
        $("#main.contactus .city span").click(function(){
            $('.city .map-mark').removeClass('pink');
        });
        $("#main.contactus .city span").mouseover(function(){
            $('.city .map-mark').removeClass('pink');
            $(this).addClass('pink');
        });
            $("#main.contactus .city span").mouseout(function(){
                $('.city .map-mark').addClass('pink');
            });

        // Contact map flying modal
        $('#contact-map .city').bind({
            click: function() 
            {
                if($(this).children().is('.active'))
                {
                    $('.map-mark').removeClass('active');
                    $('.map-mark').addClass('pink');
                    $('#contact-modal').css({
                        display: 'none'
                    });
                }
                else 
                {
                    $('.map-mark').removeClass('active');
                    $(this).children('.map-mark').addClass('active');
					
                    $('#contact-modal').html($(this).children().html());
					
                    $('#contact-modal').css({
                        display: 'inline'
                    });	
					
                    var top = parseInt($(this).css('top'));
                    var left = parseInt($(this).css('left'));
                    var height = $('#contact-modal').outerHeight();
					
                    if(top < height)
                        height = 0;
					
                    $('#contact-modal').css({
                        top: top - height + 6 + 'px',
                        left: left + 31 + 'px'
                    });
					
                }
            }
        });
		
        // Input and textarea default values
        $('input, textarea').bind({
            focus: function() 
            {
                if($(this).val() == $(this).data('default'))
                    $(this).val('');
            },
            blur: function() 
            {
                if($(this).val() == '')
                    $(this).val($(this).data('default'));
            }
        });
		
        $('input').focus(function(){
            $(this).removeClass('errorinput');
        });
		
        $('textarea').focus(function(){
            $(this).removeClass('errorinput');
        })
		
        $('a#send').bind({
            click: function()
            {
                var name = $('[name=nome]');
                var email = $('[name=email]');
                var subject = $('[name=assunto]');
                var message = $('textarea');
				
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				
                $('#status').hide();
                $('#loader-contacts').show();
                if( (name.val() != 'Name') && (email.val() != 'E-mail') && (subject.val() != 'Subject') && (message.val() != 'Message') && (reg.test(email.val())) ){
                    $.post('assets/email/email.php', 
                    {
                        nome: name.val(), 
                        email: email.val(), 
                        assunto: subject.val(), 
                        mensagem: message.val()
                    }, 
                    function(data) 
                    {
                        $('#loader-contacts').hide();
                        $('#status').text('Message Sent. Thank You').css("color", "#3FA539").show();

                        name.val(name.data('default'));
                        email.val(email.data('default'));
                        subject.val(subject.data('default'));
                        message.val(message.data('default'));
                    }
                    );
                }else{
                    if(message.val() == 'Message') message.addClass('errorinput');
                    if(subject.val() == 'Subject') subject.addClass('errorinput');
                    if(email.val() == 'E-mail') email.addClass('errorinput');
                    if(name.val() == 'Name') name.addClass('errorinput');
                    if(!reg.test(email.val())) email.addClass('errorinput');

                    $('#loader-contacts').hide();
                    $('#status').text('Please check the highlighted fields.').css("color", "#CC0C0C").show();
                }
            }
        });	
    });
	
});

var util = {};
util.number_format = function(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
    };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}


