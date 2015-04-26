$(function() {

    //DRAGGABLE DIV ELEMENT
    $('body').on('mousedown', '.debug_balloon', function() {
        $(this).addClass('draggable').parents().on('mousemove', function(e) {
            $('.draggable').offset({
                top: e.pageY - $('.draggable').outerHeight() / 2,
                left: e.pageX - $('.draggable').outerWidth() / 2
            }).on('mouseup', function() {
                $(this).removeClass('draggable');
            });
        });
        e.preventDefault();
    }).on('mouseup', function() {
        $('.draggable').removeClass('draggable');
    });

    // just a super-simple JS demo
    var demoHeaderBox;

    // simple demo to show create something via javascript on the page
    if ($('#javascript-header-demo-box').length !== 0) {
    	demoHeaderBox = $('#javascript-header-demo-box');
    	demoHeaderBox
    		.hide()
    		.text('Hello from JavaScript! This line has been added by public/js/application.js')
    		.css('color', 'green')
    		.fadeIn('slow');
    }

    // if #javascript-ajax-button exists
    if ($('#javascript-ajax-button').length !== 0) {

        $('#javascript-ajax-button').on('click', function(){

            // send an ajax-request to this URL: current-server.com/songs/ajaxGetStats
            // "url" is defined in views/_templates/footer.php
            $.ajax(url + "/songs/ajaxGetStats")
                .done(function(result) {
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    $('#javascript-ajax-result-box').html(result);
                })
                .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
                .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        });
    }

});

x = 'MINI\n\nAn extremely simple naked PHP application by Panique\nModified by jccultima\n\nSite: php-mini.com';
y = 'HUGE\n\nAn MVC Framework by Panique\nModified by jccultima\n\nSite: php-login.net';

//BETA
/*
function panique_dialog() {
    var x = document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
    var y = document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';
}
*/

//CONFIRMATION
function confirmation() {
    confirm('Are you sure??');
}

function databasecheck() {
    
}

function showDiv() {
    document.getElementById('hidden_elem').style.display = "block";
}