$('#menuButton').click(function () {
    $('#menu').css({
        'left': '0',
    });

    $('.menuLine').css({
        'width': '0',
    });
})

$('#exitIcon').click(function () {
    $('#menu').css({
        'left': '-25%',
    });

    $('.menuLine').css({
        'width': '30px',
    });
})
