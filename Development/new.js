   $(function () {
                $("#sub").click(function () {
                    var text = $('.sda').val();
                 
                    //   $(this).prop('disabled', false);
                 //   $("#sub").attr('disabled', 'disabled');
                    $.post('ajax/join_mail.php', {text: text}, function (data) {
                        
                        if (data = 1) {
                            var text = $('.sda').val('');
                            swal("Thank you", "To join with us", "success");
                        } else {
                            return false;

                        }
                        //alert(data);
                        //  $('.sorting-container').hide().html(data).fadeToggle("slow");
                    });
                    return false;
                });


            });