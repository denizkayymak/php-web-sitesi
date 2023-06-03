new WOW().init();

function FrmDegis(d) {
    $("#dLabel,#dLabel").html(d);
    $('#ddLabel').attr('placeholder', d);
}

$("#FaturaCepteForm").submit(function (e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (data) {
            if (data == 1) {
                $("#FaturaCepteForm").remove();
                $("#FaturaCepteFormUyari").attr('style', 'display:block');

            }
        }
    });

});

$(document).ready(function () {
    if (localStorage.getItem("visited_duyuru") != "true") {
        $("#surveyModal").modal("show");
    }

    $('#frm-tel').mask('(000) 000 00 00');
    $('#ddLabel').mask('00000000000');
});

function PopupKapat() {
    $(".Popup").remove();
}

function ModalGizle() {
    $.ajax({
        type: "POST",
        url: "https://www.kaski.gov.tr/form/ModalGizle",
        data: null,
        success: function (data) {
        }
    });
}

(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

/*
$.ajax('http://api.openweathermap.org/data/2.5/forecast?q=Kayseri&lang=TR&appid=5519df78a91952f50079565124888a76',
    {
        dataType: 'json', // type of response data
        success: function (data,status,xhr) {   // success callback function
            alert(jd.weather[0].icon);
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback
            $('p').append('Error: ' + errorMessage);
        }
});
*/

$.getJSON('http://api.openweathermap.org/data/2.5/weather?q=Kayseri&lang=TR&units=metric&appid=5519df78a91952f50079565124888a76', function(jd) {
    $('#havaDurumu').append(`<img src = "http://openweathermap.org/img/w/${jd.weather[0].icon}.png" style="width: 28px;height: 28px;"/>`);
    $('#havaDurumu').append(jd.main.temp+' ° '+jd.weather[0].description.toLocaleUpperCase('tr-TR'));
});


function dontShowAgain() {
    localStorage.setItem("visited_duyuru", true);
}