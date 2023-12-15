/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import './javascript/script.js';
import './javascript/base/custom-base';
import './javascript/config/datatable';
import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application
import './bootstrap';

import $ from 'jquery';
import './controllers/hello_controller';

import jsZip from 'jszip'; 
import 'datatables.net-buttons-dt';
import 'datatables.net-buttons/js/buttons.html5';
import 'datatables.net-buttons/js/buttons.print';

import 'datatables.net-bs5';
import '@fortawesome/fontawesome-free/js/all';

window.JSZip = jsZip;

$(document).ready( function () {
    
    $('.myTable').DataTable({
        dom: 'Bftp',
        buttons: [
            'copy', 'excel', 'csv'
        ],
        language: {
            search: "Rechercher&nbsp;",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de  _START_ a _END_ sur _TOTAL_ elements",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });

    $('.myTable_order').DataTable({
        dom: 'Btp',
        buttons: [
            'copy', 'excel', 'csv'
        ],
        language: {
            search: "Rechercher&nbsp;",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de  _START_ a _END_ sur _TOTAL_ elements",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });


    $('#recap').DataTable({
        dom: 'Blfrtip',
        language: {
            search: "Rechercher&nbsp;",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de  _START_ a _END_ sur _TOTAL_ elements",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });

    $('.table_crud').DataTable({
        dom: 'fltip',
        language: {
            search: "Rechercher&nbsp;",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de  _START_ a _END_ sur _TOTAL_ elements",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            }
        }
    });
} );

/* *************************************Global variable****************************** */
var pathname = window.location.pathname;
var url = window.location.href;
var origin = window.location.origin;
/* ********************************************************************************************* */

$(document).ready(function(){

    var myArray = pathname.split("/");

    if (myArray[1] == "") {

        function deleteAllHistory() {
            window.location.replace('/');
        }
    }

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
    
    $('.btn-primary').on('click',function(){
        $(this).css('background-color: #004387;color: white; border: none;');
    });
    $('#mouvement_submit').on('click',function(){
        $(this).css('background-color: #004387;color: white; border: none;');
    });
    $('#form_submit').on('click',function(){
        $(this).css('background-color: #004387;color: white; border: none;');
    });

    $("#types_product").val(" ");
    $("#types_product").on('change',function(){
        var url = "/json/api/"+$(this).val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#num_out').children('option').remove();
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                        if (element.types_product == 1) {
                            console.log(element.numero);
                            $('#num_out').append('<option value="'+element.numero+'">'+element.numero+'</option>');
                        }else{
                            console.log(element.numero);
                            $('#num_out').append('<option value="'+element.numero+'">'+element.numero+'</option>');
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
    });    
      //Page insertion mouvement 
    $('#mouvement_descriptions').children('option').remove();
    $('#mouvement_types').val(" ");
    $("#mouvement_types").on('change',function(){
        var url = "/api_description/"+$(this).val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#mouvement_descriptions').children('option').remove();
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                    $('#mouvement_descriptions').append('<option value="'+element.id+'">'+element.descriptions+'</option>');  
                }

            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });
        if($("#mouvement_types").val() == 1){
            
            $('#mouvement_descriptions').on('change',function(){
            // alert($(this).val());
                if($(this).val() == 1){
                    alert("Nouveau");
                }
                else if($(this).val() == 2 ){
                    alert('Integration');
                }
                else{
                    alert("Initialisation");
                }
            });
        }
        if($(this).val() == 2){
            $("#bouton").css("display",'block');
            $("#numero").css("display",'block'); 
            $("#mouvement_quantite").val(" ");
            var date_now = new Date();
            var year = date_now.getFullYear(); 
            var year_string = String(year);
            var numero_str = year_string.slice(2,4);
            var numero_max = $('#numero_sortie_max').text().trim();
            var numero_fin = numero_max.slice(4,5);
           // alert(numero_max.length);
            numero_fin = parseInt(numero_fin);

            //Le nombre de jour
            var number_day = numero_fin;
            $("#button_generate").on('click',function(){
                number_day += 1;
                //alert(number_day);
                if(number_day < 10){
                    var day = String(number_day);
                    var numero = numero_str+'-0'+day;
                }else{
                    var day = String(number_day);
                    var numero = numero_str+'-'+day;
                }
                $('#mouvement_number_sortie').val(numero);
            });
            if(number_day < 10){
                var day = String(number_day);
                var numero = numero_str+'-0'+day;
            }else{
                var day = String(number_day);
                var numero = numero_str+'-'+day;
            }

            $('#mouvement_number_sortie').val(numero);
            $("#mouvement_Agence").val("Destination"); 
            $("#mouvement_produit").val(" "); 
            $("#mouvement_Categorie").val(" "); 
        }else{
            $("#mouvement_quantite").val(" ");
            $("#bouton").css("display",'none');
            $("#numero").css("display",'none');
            $("#mouvement_Agence").val("References");
            $("#mouvement_produit").val(" ");
            $("#mouvement_Categorie").val(" ");
        }
    });


    $("#typesNum").click(function(){
        $("#panel1").fadeToggle(1000);
      });
      //Cacher le nombre planche
      $("#numbre_planche").css("display",'none');
    //Ajax 
    $('#mouvement_Categorie').children('option').remove();
    $("#mouvement_produit").on('change',function(){ 
        $('#mouvement_Categorie').val(' ');
        var url = "/route/json/"+$(this).val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#mouvement_Categorie').children('option').remove();
                for (let i = 0; i < result.length; i++) {
                    var element = result[i];
                    console.log(element);
                    $('#mouvement_Categorie').append('<option value="'+element.iDcategorie+'">'+element.categorie+'</option>'); 
                    //Si le produit est timbre simple ou Figurine postal on affiche le nombre planche
                    if(element.type_order_short == 'FP'){
                        $("#numbre_planche").css("display",'block');
                    //Sinon on n'affiche pas le nombre planche
                    }else{
                        $("#numbre_planche").css("display",'none');
                    }
                }
                //$('#mouvement_Categorie option:first').attr('selected','selected');
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });
    });
    
    $('#stock_actuelle').hide();
    $("#mouvement_Categorie").on('change',function(){

        var url = "/route/json/"+$("#mouvement_produit").val();
        $.ajax({
            url: url,
            method: "GET",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : JSON.stringify($(this).val()),
            success: function(result){
                $('#mouvement_Categorie option:selected').each(function() {
                    for (let i = 0; i < result.length; i++) {
                        var element = result[i];
                        if( element.categorie == $(this).text()){
                            if (element.valeur_dispo == null ) {
                                element.valeur_dispo = 0;
                              }
                            $('#stock_actuelle').show();
                            var prod_dispo = "Le(s) stock(s) disponibles pour "+element.categorie+" sont : <span id=\"valeur_dispo\">"+element.valeur_dispo+"<b id='type_prod'style='color: red; display: none;'>"+element.type_order_short+"</b>";
                            if(element.type_order_short === "FP"){
                                var nombre_par_planche = "</span> <br/> Le nombre de timbre par planche(TP/PL) est : <span id=\"tp_par_pl\">"+element.tpParPl+"</span>";
                                document.getElementById('stock_actuelle').innerHTML = prod_dispo + nombre_par_planche;
                            }else{
                                document.getElementById('stock_actuelle').innerHTML = prod_dispo;
                                $("#mouvement_number_planche").val(null);
                            }
                         //  alert("Les stock disponibles pour "+element.categorie+" est : "+element.valeur_dispo);
                         $("#mouvement_number_out").val(element.tpParPl);   
                        }
                    }
                })
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }

        });

    });


    $("#mouvement_quantite").on('change',function(){
       
        var valDispo = parseInt($('#valeur_dispo').text());
       // alert(typeof valDispo);
       var types = $('#mouvement_types').val();
       var tp_pl = parseInt($('#tp_par_pl').text());
       var quantite =  Math.abs($(this).val());
       var nombre_planche = Math.abs($(this).val()) / tp_pl;
       //alert($('#type_prod').text());

       if($('#type_prod').text() === 'FP'){
        $("#mouvement_number_planche").val(nombre_planche);
       }else{
        $("#mouvement_number_planche").val(1);
       }

       // alert(quantite);
       if (valDispo < quantite && types == 2 ) {
            alert("Veuillez saisir de quantite ou nombre de planche inferieur a la valeur disponible ");
            $('#mouvement_submit').prop('disabled', true); 
       }else{
            $('#mouvement_submit').prop('disabled', false); 
       }
    })

    $('#mouvement_submit').prop('disabled','disabled');

    var user = $('#user').text();
    $('#mouvement_User option').each(function () {
        if (parseInt(user) == parseInt($(this).val())) {
            var values =$(this).attr('selected','selected');
            console.log(user);
             $(this).val(parseInt(user));
            $('#mouvement_User').hide();
        }
        
    });
/*
    var nbr = $('#somme_recap_ord').text()
    alert(nbr);
*/
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
document.getElementById('print_recapitulation').addEventListener('click', ()=>{
    window.print();
}, false);