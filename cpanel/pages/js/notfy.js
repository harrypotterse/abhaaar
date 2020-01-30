$(document).ready(function () {
    setInterval(function () {
        $.post('../../php/notfy.php', {}, function (data) {
            if (data == 0) {
            } else {
                $.growl.notice({message: data});
            }
        });
    }, 20000);
    setInterval(function () {
        $.post('../../php/bookings.php', {}, function (data) {
            //$('.bookings').html(data);
            if (data == 0) {

            } else {
                $('.bookings').hide().fadeIn().html(data);
            }
        });
    }, 19000);
    setInterval(function () {
        $.post('../../php/employee.php', {}, function (data) {
            if (data == 0) {

            } else {
                $('.employee').hide().fadeIn().html(data);
            }

        });
    }, 18000);
    setInterval(function () {
        $.post('../../php/visits.php', {}, function (data) {
          //  $('.visits').html(data);
               if (data == 0) {

            } else {
                $('.visits').hide().fadeIn().html(data);
            }
        });
    }, 17000);
        setInterval(function () {
        $.post('../../php/join_mail.php', {}, function (data) {
          //  $('.visits').html(data);
               if (data == 0) {

            } else {
                $('.visits').hide().fadeIn().html(data);
            }
        });
    }, 17000);

});
