
// jQuery(document).ready(function ($) {
//     $('select[name=add-brand]').change(function () {
//         // hide all optional elements
//         $('.dvd').hide();
//         $('.book').hide();
//         $('.furniture').hide();


//         $("select[name=add-brand] option:selected").each(function () {
//             var value = $(this).val();
//             if (value == "DVD") {
//                 $('.dvd').show();

//             } else if (value == "FURNITURE") {
//                 $('.furniture').show();

//             } else if (value == "BOOK") {
//                 $('.book').show();

//             }

//         });
//     });
// });

$('select[name=add-brand]').change(function () {
    var tmp = this.value;
    $('.dvd').hide();
    $('.book').hide();
    $('.furniture').hide();

    if (tmp == "DVD") {
        $('.dvd').show();
    } else if (tmp == "FURNITURE") {
        $('.furniture').show();
    } else if (tmp == "BOOK") {
        $('.book').show();
    }

});