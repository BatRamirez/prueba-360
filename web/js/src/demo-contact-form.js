$(function() {
    configureAjaxForm();
});

function configureAjaxForm()
{
    var options = {
        success: function(response) {
            contactoFormCallback(response);
        },
        beforeSubmit: function(arr, $form, options){
            $('#btn_contacto_enviar').prop("disabled",true).parent('span').append(
                $('<img>').attr('src', '/img/spinner-gray-32x32.gif').width(18)
            );
        }
    };
    
    $('#contacto_form').ajaxForm(options);
}

function contactoFormCallback(response)
{
    var msn_response = $('<div>').append($('<span>'));
    if(response.msn === 'ERROR')
    {
        msn_response.addClass('response-error').find('span').text('Ocurrio un error por favor intentelo mas tarde.');
//        msn_response.addClass('response-error').find('span').text(response.info.message);
//        console.log('Ocurrio un error por favor intentelo mas tarde.');
        return;
    }
    if(response.msn === 'OK') {
        msn_response.addClass('response-ok').find('span').text('Contacto enviado.');
//        msn_response.addClass('response-ok').find('span').text(response.info.message);
//        console.log('Contacto enviado.');
    }
        
    $('#contacto_form_container').empty().append(response.info.partial);
    $('#contacto_form_status').append(msn_response);
    configureAjaxForm();
    
    setTimeout(function() {
        msn_response.fadeIn(1500, function() { $(this).remove() });
    }, 3000);
}