/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application
import './bootstrap';

import $ from 'jquery';
import dt from 'datatables.net';

require('@fortawesome/fontawesome-free/js/all.js');


$(document).ready( function () {
    $('#myTable').DataTable({
        language: {
            search: "Rechercher&nbsp;",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });
    $('#recap').DataTable({
        language: {
            search: "Rechercher&nbsp;",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });
    
    $('#myTableEtat').DataTable({
        language: {
            search: "Rechercher&nbsp;",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );

/* *************************************Global variable****************************** */
var pathname = window.location.pathname;
var url = window.location.href;
var origin = window.location.origin;
/* ********************************************************************************************* */
$(document).ready(function(){

    var path = pathname;
    var myArray = path.split("/");

    if ( myArray[1] == 'ordre-de-sortie'){
        /* ********************************** Raiketina ilay ajax ***************************/
        var url = "/json/api/1";
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#form_numero').children('option').remove();
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                        if (element.types == 1) {
                            console.log(element.numero);
                            $('#form_numero').append('<option value="'+element.types+'">'+element.numero+'</option>');
                        }else{
                            console.log(element.numero);
                            $('#form_numero').append('<option value="'+element.types+'">'+element.numero+'</option>');
                        }
                }

            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });

    }
    

    $("#form_types").on('change',function(){
        var url = "/json/api/"+$(this).val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#form_numero').children('option').remove();
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                        if (element.types_product == 1) {
                            console.log(element.numero);
                            $('#form_numero').append('<option value="'+element.types+'">'+element.numero+'</option>');
                        }else{
                            console.log(element.numero);
                            $('#form_numero').append('<option value="'+element.types+'">'+element.numero+'</option>');
                        }
                }

            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });

    });
/* ********************************************************************************************* */
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });;

    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });;
    
      //Page insertion mouvement 

    $("#mouvement_types").on('change',function(){
        if($(this).val() == 2){
            $("#numero").css("display",'block');
            $("#mouvement_descriptions").val(3); 
            $("#mouvement_quantite").val("-");
        }else{
            $("#numero").css("display",'none');
            $("#mouvement_descriptions").val(1);
            $("#mouvement_quantite").val(" ");
        }
    });

    $("#flip").click(function(){
      $("#panel").fadeToggle(1000);
    });

    $("#typesNum").click(function(){
        $("#panel1").fadeToggle(1000);
      });

    //Ajax 

    $("#mouvement_produit").on('change',function(){
        var url = "/route/json/"+$(this).val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#mouvement_Categorie').children('option').remove();
                console.log($("#mouvement_produit").val());
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                    $('#mouvement_Categorie').append('<option value="'+element.iDcategorie+'">'+element.categorie+'</option>');   
                }
                $('#mouvement_Categorie option:first').attr('selected','selected');


            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });

    });

   
    var user = $('#user').text();
    $('#mouvement_User option').each(function () {
        if (parseInt(user) == parseInt($(this).val())) {
            var values =$(this).attr('selected','selected');
             $(this).val(values);
          /*  $('#mouvement_User').prop("disabled", true);*/
        }
        
    });

});

function imprimer(divName) {
    var printContents = document.getElementById(divName).innerHTML;    
    var originalContents = document.body.innerHTML; 
         
    document.body.innerHTML = printContents;     
    window.print();     
    document.body.innerHTML = originalContents;
}

document.getElementById('to-hide-while-printing').addEventListener('click', () => {
    window.print();
}, false);

console.log('Hello world ');

console.log('Hello world ');
console.log($('mouvement_User').val($(this).text()));