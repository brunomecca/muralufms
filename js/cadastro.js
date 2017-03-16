/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validarCadastro()
{
    var elementsAreOkay = true;

    $(".input-group").each(function () {

        if(!validate($(this)))
        {
            alert("Revise os campos novamente !");
            elementsAreOkay = false;
            return false;
        }
    });

    return elementsAreOkay;
}


function validate(element)
{
    var finalMessage = '';
    var finalResult = false;

    var userData = element.find("input").attr('name') == undefined ? element.find("textarea") : element.find("input");

    var input  = userData.attr("name");


    if(userData.val() != '')
    {
        switch (input){

            case 'username':
                if(userData.val().length < 100)
                {
                    var valChars = /^[a-záàâãéèêíïóôõöúçñ.\s]+$/ig ;
                    if(valChars.test(userData.val()))
                    {
                        finalResult = true;
                    }
                    else
                    {
                        finalMessage = "* Somente use letras !";
                    }
                }
                else
                {
                    finalMessage = "* Nome muito grande ! ";
                }
                break;
            case 'nome':
                if(userData.val().length < 100)
                {
                    var valChars = /^[a-záàâãéèêíïóôõöúçñ.\s]+$/ig ;
                    if(valChars.test(userData.val()))
                    {
                        finalResult = true;
                    }
                    else
                    {
                        finalMessage = "* Somente use letras !";
                    }
                }
                else
                {
                    finalMessage = "* Nome muito grande ! ";
                }
                break;
            case 'email':
                if(userData.val().length < 100)
                {
                    var validation = /[\w\/.-]+@[\w]+(.{1}[\w]+)+/ig;
                    if(validation.test(userData.val()))
                    {
                        finalResult = true;
                    }
                    else
                    {
                        finalMessage = "* Email invalido !";
                    }

                }
                break;
            case 'password':
                if(userData.val().length < 100)
                {
                    finalResult = true;
                }
                else
                {
                    finalMessage = "* Senha muito grande !";
                }
            case 'confirm-password':
                if(userData.val() == $('#password').val())
                {
                    finalResult = true;
                }
                else
                {
                    finalMessage = "* As senhas precisam ser iguais !";
                }
        }
    }
    else
    {
        if(userData.attr('required') != undefined)
        {
            finalMessage = "* Campo obrigatório !";
        }
        else
        {
            finalResult = true;
        }

    }
    displayResult(element,finalMessage,finalResult);
    return finalResult ;
}

function displayResult(element,message,correctAttribute)
{

    var input = element.find("input").attr('name') != undefined ? element.find("input") : element.find("textarea");
    var errorMessage = element.next("p");
    var errorSymbol = element.find("span:last");
    errorMessage.text(message);

    if(correctAttribute)
    {

        if( (input.prop('required') == true)  || (input.prop('required') == false && input.val().length > 0) )
        {
            errorMessage.text("");
            element.attr('class',' input-group has-success ');
            errorSymbol.attr('class','glyphicon glyphicon-ok form-control-feedback');
        }

    }
    else
    {
        errorMessage.attr('class','error-message');
        element.attr('class','has-feedback input-group has-error ');
        errorSymbol.attr('class','glyphicon glyphicon-remove form-control-feedback');
    }
}

$(document).ready( function () {


    $(".input-group").focusout( function () {
        validate($(this));
    });



});