    $(document).ready(function () {
        $('#uploadImage').submit(function (event) {
        alert(1);
            //في حالة وجود قيمة في متغير الملف او قيمة معينة 
    
                 // alert(1);
                event.preventDefault();
                //اظهار واخفاء
                $('#loader-icon').show();
                $('#targetLayer').hide();
               // ======================
                $(this).ajaxSubmit({
                    target: '#targetLayer',
                    beforeSubmit: function () {
                        $('.progress-bar').width('50%');
                    },
                    uploadProgress: function (event, position, total, percentageComplete)
                    {
                        $('.progress-bar').animate({
                            width: percentageComplete + '%'
                        }, {
                            duration: 1000
                        });
                    },
                    success: function () {
                        $('#loader-icon').hide();
                        $('#targetLayer').show();
                       //  location.reload();

                    },
                    resetForm: true
                });
         
            return false;
        });
    });