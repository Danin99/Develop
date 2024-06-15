import jQuery from 'jquery';
window.$ = jQuery;
import $ from 'jquery';
import 'flowbite';
import 'datatables.net';

import 'toastr/build/toastr.css';
import toastr from 'toastr';
window.toastr = toastr;

toastr.options = {
    closeButton: true,
    closeClass: 'custom-close-button',
    progressBar: true,
    positionClass: 'toast-bottom-right',
    timeOut: 10000,
};

$(document).ready(function() {
    var Message = $('.message');
    if (Message.length) {
        setTimeout(function() {
            Message.fadeOut(500, function() {
                $(this).remove();
            });
        }, 4000);

        $('.close-button').click(function() {
            Message.fadeOut(500, function() {
                $(this).remove();
            });
        });
    }
});
