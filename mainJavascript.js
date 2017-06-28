$("#mainDropDown a").click(function(e){
    e.preventDefault(); //prevent page reload
    var selText = $(this).text();
    $("#dropDown1").text(selText);
    salRequest(selText);
});

$('#inlineCheckbox1').click(function() {
    $("#txtAge").toggle(this.checked);
    if (this.checked) {
        $('#gradSal').prop('readonly', true);
    } else {
        $('#gradSal').prop('readonly', false);
    }
});

$(document).ready(function() {
    $(".txbx").keydown(function (e) {
        console.log("yes")
        preventChar(e);
    })
})

function preventChar(e){
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
}


function salRequest(degree) {
    nocache = "&nocache=" + Math.random() * 1000000
    request = new ajaxRequest()
    request.open("GET" , "getCurrPay.php?deg=" + degree + nocache , true)

    request.onreadystatechange = function () {

        if (this.readyState == 4){
            if (this.status == 200){
                if (this.responseText != null){
                    $("#gradSal").val(this.responseText);
                }
            }
        }
    }

    request.send(null)
}


function ajaxRequest() {
    try{
        var request = new XMLHttpRequest();
    } catch (e1) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        } catch (e2){
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (e3){
                request = false
            }
        }
    }
    return request
}



