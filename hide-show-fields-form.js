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
$('select[name=add-brand]').trigger("change");