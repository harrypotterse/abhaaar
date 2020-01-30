$(document).keypress(function (e) {
var code = e.keyCode;
        var hh = "<ul class=list-group>\n\
<li class=list-group-item>الاعلانات<span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+1</span></li>\n\
<li class=list-group-item>شرائح صفحة التسجيل<span class='label label-primary' id='lab'>&nbsp;&nbsp;Press+2</span></li>\n\
<li class=list-group-item> العروض الاساسية <span class='label label-success' id='lab'>&nbsp;&nbsp;Press+3</span></li>\n\
<li class=list-group-item> الخدمات<span class='label label-info' id='lab'>&nbsp;&nbsp;Press+4</span></li>\n\
<li class=list-group-item> المدونة <span class='label label-warning' id='lab'>&nbsp;&nbsp;Press+5</span></li>\n\
<li class=list-group-item> اقسام المعارض <span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+6</span></li>\n\
<li class=list-group-item>   المعارض<span class='label label-default' id='lab'>Press+7</span></li>\n\
<li class=list-group-item>    افضل العروض <span class='label label-primary' id='lab'>Press+8</span></li>\n\
<li class=list-group-item>    اراء العملاء <span class='label label-success' id='lab'>Press+9</span></li>\n\
<li class=list-group-item>    المميزات  <span class='label label-info' id='lab'>Press+A</span></li>\n\
<li class=list-group-item> الحجوزات <span class='label label-warning' id='lab'>Press+B</span></li>\n\
<li class=list-group-item>التسجيل كموظف <span class='label label-danger' id='lab'>Press+C</span></li>\n\
<li class=list-group-item> التسجيل كزائر  <span class='label label-success' id='lab'>Press+D</span></li>\n\
<li class=list-group-item>مكونات الصفحات <span class='label label-primary' id='lab'>Press+E</span></li>\n\
<li class=list-group-item>أحصائيات الزيارات<span class='label label-default' id='lab'>Press+F</span></li>\n\
<li class=list-group-item>مستخدمين لوحة التحكم <span class='label label-info' id='lab'>Press+G</span></li>\n\
</ul>";
        var tabel = "<table class='table table-bordered'><thead> \n\
<tr> <th>الصفحة</th>\n\
 <th>الاختصار</th> </tr> \n\
</thead>\n\
 <tbody>\n\
 <tr><td>John</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>Mary</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 <tr> <td>July</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 <tr> <td>John</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>Mary</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>July</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>John</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>Mary</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 <tr> <td>July</td> <td><span class=label label-danger>Danger </span></td> </tr> \n\
<tr> <td>John</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 <tr> <td>Mary</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 <tr> <td>July</td> <td><span class=label label-danger>Danger </span></td> </tr>\n\
 </tbody> </table>"
        if (code == 49) {
var url = "../slides/Show.php";
        window.open(url, '_blank');
} else if (code == 50) {
var url = "../recording_slides/Show.php";
        window.open(url, '_blank');
} else if (code == 51) {
var url = "../offers/Show.php";
        window.open(url, '_blank');
} else if (code == 52) {
var url = "../services/Show.php";
        window.open(url, '_blank');
} else if (code == 53) {
var url = "../blog/Show.php";
        window.open(url, '_blank');
} else if (code == 54) {
var url = "../pictures/Show.php";
        window.open(url, '_blank');
} else if (code == 55) {
var url = "../best_offers/Show.php";
        window.open(url, '_blank');
} else if (code == 56) {
var url = "../customer_opinions/Show.php";
        window.open(url, '_blank');
} else if (code == 57) {
var url = "../features/Show.php";
        window.open(url, '_blank');
} else if (code == 97) {
var url = "../bookings/Show.php";
        window.open(url, '_blank');
} else if (code == 98) {
var url = "../project_required/Show.php";
        window.open(url, '_blank');
} else if (code == 99) {
var url = "../question/Show.php";
        window.open(url, '_blank');
} else if (code == 100) {
var url = "../spread/Links.php";
        window.open(url, '_blank');
} else if (code == 101) {
var url = "../counter_db/Show.php";
        window.open(url, '_blank');
} else if (code == 102) {
var url = "../user_admin/Show.php";
        window.open(url, '_blank');
}   else if (code == 104) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
} else if (code == 1575) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
} else if (code == 102) {
var url = "../Explanations/Show.php";
        window.open(url, '_blank');
} else if (code == 108) {
var url = "../main_services/Show.php";
        window.open(url, '_blank');
}else if (code == 110) {
var url = "addition.php";
        window.open(url, '_blank');
}else if (code == 1609) {
var url = "addition.php";
        window.open(url, '_blank');
}

});



