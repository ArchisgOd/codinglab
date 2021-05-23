$('#menuButton').click(function () {
    $('#menu').css({
        'left': '0',
    });

    $('#all').css({
        'width': '70%',
        'margin-left': '30%',
    });

    $('.menuLine').css({
        'width': '0',
    });
})

$('#exitIcon').click(function () {
    $('#menu').css({
        'left': '-30%',
    });

    $('#all').css({
        'width': '100%',
        'margin-left': '0',
    });

    $('.menuLine').css({
        'width': '30px',
    });
})
