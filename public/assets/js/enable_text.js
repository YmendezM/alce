
function disable(id_category) {
    //document.getElementById("myCheck"+id_category).disabled = true;
    $("[name='myCheck["+id_category+"]']").prop('disabled', true);
}

function undisable(id_category) {
    $("[name='myCheck["+id_category+"]']").prop('disabled', false);
}

