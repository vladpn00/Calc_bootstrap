/**
 * Created by aaz on 21.07.16.
 */



$('form').submit(function(){
    var form = $(this).serialize();
    if ($('#testform-x').val() >= 0 &&
        $('#testform-y').val() >= 0 &&
        $('#testform-x').val() != '' &&
        $('#testform-y').val() != ''
    )
    {
        move(form);
    }
    else
    {
        alert ('Заполните все поля');
    }
    return false;
});


function move (send) {
    $.ajax({
        type: 'POST',
        url: 'index.php?r=test/test',
        data: send,
        success: function (result) {
            $("#results").html(result);
            $("#results").css("color","#2B8E00");
        }
    });
}