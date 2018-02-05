function animationHover(element, animation) {
    element = $(element);
    element.hover(
            function () {
                element.addClass('animated ' + animation);
            },
            function () {
                //wait for animation to finish before removing classes
                window.setTimeout(function () {
                    element.removeClass('animated ' + animation);
                }, 2000);
            }
    );
}
;

function animationClick(element, animation) {
    element = $(element);
    element.click(
            function () {
                element.addClass('animated ' + animation);
                //wait for animation to finish before removing classes
                window.setTimeout(function () {
                    element.removeClass('animated ' + animation);
                }, 2000);
            }
    );
}
;

wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
            }
        }
);
wow.init();
new WOW().init();


$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    });

    $('#myCarousel').on('slid.bs.carousel', function () {
        //alert("slid");
    });


});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
});


$(document).ready(function () {
    $('#login-trigger').click(function () {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active'))
            $(this).find('span').html('&#x25B2;');
        else
            $(this).find('span').html('&#x25BC;');
    });
});





/*function initMap() {
 // Styles a map in night mode.
 var map = new google.maps.Map(document.getElementById('map'), {
 center: {lat: 40.674, lng: -73.945},
 zoom: 12,
 styles: [
 {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
 {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
 {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
 {
 featureType: 'administrative.locality',
 elementType: 'labels.text.fill',
 stylers: [{color: '#d59563'}]
 },
 {
 featureType: 'poi',
 elementType: 'labels.text.fill',
 stylers: [{color: '#d59563'}]
 },
 {
 featureType: 'poi.park',
 elementType: 'geometry',
 stylers: [{color: '#263c3f'}]
 },
 {
 featureType: 'poi.park',
 elementType: 'labels.text.fill',
 stylers: [{color: '#6b9a76'}]
 },
 {
 featureType: 'road',
 elementType: 'geometry',
 stylers: [{color: '#38414e'}]
 },
 {
 featureType: 'road',
 elementType: 'geometry.stroke',
 stylers: [{color: '#212a37'}]
 },
 {
 featureType: 'road',
 elementType: 'labels.text.fill',
 stylers: [{color: '#9ca5b3'}]
 },
 {
 featureType: 'road.highway',
 elementType: 'geometry',
 stylers: [{color: '#746855'}]
 },
 {
 featureType: 'road.highway',
 elementType: 'geometry.stroke',
 stylers: [{color: '#1f2835'}]
 },
 {
 featureType: 'road.highway',
 elementType: 'labels.text.fill',
 stylers: [{color: '#f3d19c'}]
 },
 {
 featureType: 'transit',
 elementType: 'geometry',
 stylers: [{color: '#2f3948'}]
 },
 {
 featureType: 'transit.station',
 elementType: 'labels.text.fill',
 stylers: [{color: '#d59563'}]
 },
 {
 featureType: 'water',
 elementType: 'geometry',
 stylers: [{color: '#17263c'}]
 },
 {
 featureType: 'water',
 elementType: 'labels.text.fill',
 stylers: [{color: '#515c6d'}]
 },
 {
 featureType: 'water',
 elementType: 'labels.text.stroke',
 stylers: [{color: '#17263c'}]
 }
 ]
 });
 }*/ //função para o maps com chave de api do google, desabilitado porque o servido não esta habilitado.

function validateForm() {
    var x = document.forms['contact']["inputName"].value;
    if (x == "") {
        alert('Insira seu nome por favor por favor');
        return false;
    }
}//validando o nome no form


$("#inputPhone").mask("(99) 99999?-9999");

$(function () {
    $.mask.definitions['~'] = "[+-]";
    $("#date").mask("99/99/9999", {completed: function () {
            alert("completed!");
        }});
    //$("#phone").mask("(99) 99999-9999");
    $("#phoneExt").mask("(999) 9999-9999? x99999");
    $("#iphone").mask("+33 999 999 999");
    $("#tin").mask("99-99999999");
    $("#ssn").mask("999-999-9999");
    $("#product").mask("a*-999-a999", {placeholder: " "});
    $("#eyescript").mask("~9.99 ~9.99 999");
    $("#po").mask("PO: aaa-999-***");
    $("#pct").mask("100%");

    $("input").blur(function () {
        $("#info").html("Unmasked value: " + $(this).mask());
    }).dblclick(function () {
        $(this).unmask();
    });
});


$(document).ready(function () {

    $('#inputMail').focusout(function () {

        $('#inputMail').filter(function () {
            var emil = $('#inputMail').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(emil)) {
                alert('Please enter valid email');
            }
        });
    });
});

$('#formPactoContact').validator();

$(function () {
    $("#formPactoContact").validate();
});



//Parametros Slide Banner

jssor_1_slider_init = function () {

    var jssor_1_SlideoTransitions = [
        [{b: -1, d: 1, o: -0.7}],
        [{b: 900, d: 2000, x: -379, e: {x: 7}}],
        [{b: 900, d: 2000, x: -379, e: {x: 7}}],
        [{b: -1, d: 1, o: -1, sX: 2, sY: 2}, {b: 0, d: 900, x: -171, y: -341, o: 1, sX: -2, sY: -2, e: {x: 3, y: 3, sX: 3, sY: 3}}, {b: 900, d: 1600, x: -283, o: -1, e: {x: 16}}]
    ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideDuration: 800,
        $SlideEasing: $Jease$.$OutQuint,
        $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 3000;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};



var d = new Date();
document.getElementById("datePost").innerHTML = d;



