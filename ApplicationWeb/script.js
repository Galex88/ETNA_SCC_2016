$(document).ready(function () {
    $('.button-collapse').sideNav();
    $('.modal').modal();

    // INIT
    if ($('#widRerSw').is(':checked'))
        $('#widRer').show();
    else
        $('#widRer').hide();

    if ($('#widVideoSw').is(':checked'))
        $('#widVideo').show();
    else
        $('#widVideo').hide();

    if ($('#widMeteoSw').is(':checked'))
        $('#widMeteo').show();
    else
        $('#widMeteo').hide();

    if ($('#widDigitSw').is(':checked'))
        $('#widDigit').show();
    else
        $('#widDigit').hide();

    if ($('#widTrafficSw').is(':checked'))
        $('#widTraffic').show();
    else
        $('#widTraffic').hide();

    if ($('#widStockSw').is(':checked'))
        $('#widStock').show();
    else
        $('#widStock').hide();

    if ($('#widGitSw').is(':checked'))
        $('#widGit').show();
    else
        $('#widGit').hide();

    if ($('#widTickerSw').is(':checked'))
        $('#widTicker').show();
    else
        $('#widTicker').hide();

    // BTN
    $('#widRerSw').change(function () {
        if ($('#widRerSw').is(':checked'))
            $('#widRer').show();
        else
            $('#widRer').hide();
    });

    $('#widVideoSw').change(function () {
        if ($('#widVideoSw').is(':checked'))
            $('#widVideo').show();
        else
            $('#widVideo').hide();
    });

    $('#widMeteoSw').change(function () {
        if ($('#widMeteoSw').is(':checked'))
            $('#widMeteo').show();
        else
            $('#widMeteo').hide();
    });

    $('#widDigitSw').change(function () {
        if ($('#widDigitSw').is(':checked'))
            $('#widDigit').show();
        else
            $('#widDigit').hide();
    });

    $('#widTrafficSw').change(function () {
        if ($('#widTrafficSw').is(':checked'))
            $('#widTraffic').show();
        else
            $('#widTraffic').hide();
    });

    $('#widStockSw').change(function () {
        if ($('#widStockSw').is(':checked'))
            $('#widStock').show();
        else
            $('#widStock').hide();
    });

    $('#widGitSw').change(function () {
        if ($('#widGitSw').is(':checked'))
            $('#widGit').show();
        else
            $('#widGit').hide();
    });

    $('#widTickerSw').change(function () {
        if ($('#widTickerSw').is(':checked'))
            $('#widTicker').show();
        else
            $('#widTicker').hide();
    });
});