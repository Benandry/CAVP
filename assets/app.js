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
        }else{
            $("#numero").css("display",'none');
            $("#mouvement_descriptions").val(1);
        }
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
                console.log(result);
                $('#mouvement_Categorie option:selected').each(function() {
                    for (let i = 0; i < result.length; i++) {
                        var element = result[i];
                        if( element.categorie == $(this).text()){
                            $('#stock_actuelle').show();
                            document.getElementById('stock_actuelle').innerHTML = "Les stock disponibles pour "+element.categorie+" sont : <span id=\"valeur_dispo\">"+element.valeur_dispo+"</span>";
                         //  alert("Les stock disponibles pour "+element.categorie+" est : "+element.valeur_dispo);
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
       var quantite =  $(this).val();
       // alert(Math.abs(quantite));
       if (valDispo < Math.abs(quantite) && types == 2 ) {
            alert("Veuillez saisir nombres inferieur a la valeur disponible");
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
        
    
		function affichage (nombre){
			var nombreLettre =  NumberToLetter(nombre) ;
			document.getElementById("nombre").innerHTML = nombreLettre ;
		}
		affichage(13);

        function Unite( nombre ){
            var unite;
            switch( nombre ){
                case 0: unite = "z�ro";		break;
                case 1: unite = "un";		break;
                case 2: unite = "deux";		break;
                case 3: unite = "trois"; 	break;
                case 4: unite = "quatre"; 	break;
                case 5: unite = "cinq"; 	break;
                case 6: unite = "six"; 		break;
                case 7: unite = "sept"; 	break;
                case 8: unite = "huit"; 	break;
                case 9: unite = "neuf"; 	break;
            }//fin switch
            return unite;
        }//-----------------------------------------------------------------------

        function Dizaine( nombre ){
            switch( nombre ){
                case 10: dizaine = "dix"; break;
                case 11: dizaine = "onze"; break;
                case 12: dizaine = "douze"; break;
                case 13: dizaine = "treize"; break;
                case 14: dizaine = "quatorze"; break;
                case 15: dizaine = "quinze"; break;
                case 16: dizaine = "seize"; break;
                case 17: dizaine = "dix-sept"; break;
                case 18: dizaine = "dix-huit"; break;
                case 19: dizaine = "dix-neuf"; break;
                case 20: dizaine = "vingt"; break;
                case 30: dizaine = "trente"; break;
                case 40: dizaine = "quarante"; break;
                case 50: dizaine = "cinquante"; break;
                case 60: dizaine = "soixante"; break;
                case 70: dizaine = "soixante-dix"; break;
                case 80: dizaine = "quatre-vingt"; break;
                case 90: dizaine = "quatre-vingt-dix"; break;
            }//fin switch
            return dizaine;
        }//-----------------------------------------------------------------------

        function NumberToLetter( nombre ){
            var i, j, n, quotient, reste, nb ;
            var ch
            var numberToLetter='';
            //__________________________________
            
            if(  nombre.toString().replace( / /gi, "" ).length > 15  )	return "d�passement de capacit�";
            if(  isNaN(nombre.toString().replace( / /gi, "" ))  )		return "Nombre non valide";

            nb = parseFloat(nombre.toString().replace( / /gi, "" ));
            if(  Math.ceil(nb) != nb  )	return  "Nombre avec virgule non g�r�.";
            
            n = nb.toString().length;
            switch( n ){
                case 1: numberToLetter = Unite(nb); break;
                case 2: if(  nb > 19  ){
                            quotient = Math.floor(nb / 10);
                            reste = nb % 10;
                            if(  nb < 71 || (nb > 79 && nb < 91)  ){
                                    if(  reste == 0  ) numberToLetter = Dizaine(quotient * 10);
                                    if(  reste == 1  ) numberToLetter = Dizaine(quotient * 10) + "-et-" + Unite(reste);
                                    if(  reste > 1   ) numberToLetter = Dizaine(quotient * 10) + "-" + Unite(reste);
                            }else numberToLetter = Dizaine((quotient - 1) * 10) + "-" + Dizaine(10 + reste);
                        }else numberToLetter = Dizaine(nb);
                        break;
                case 3: quotient = Math.floor(nb / 100);
                        reste = nb % 100;
                        if(  quotient == 1 && reste == 0   ) numberToLetter = "cent";
                        if(  quotient == 1 && reste != 0   ) numberToLetter = "cent" + " " + NumberToLetter(reste);
                        if(  quotient > 1 && reste == 0    ) numberToLetter = Unite(quotient) + " cents";
                        if(  quotient > 1 && reste != 0    ) numberToLetter = Unite(quotient) + " cent " + NumberToLetter(reste);
                        break;
                case 4 :  quotient = Math.floor(nb / 1000);
                            reste = nb - quotient * 1000;
                            if(  quotient == 1 && reste == 0   ) numberToLetter = "mille";
                            if(  quotient == 1 && reste != 0   ) numberToLetter = "mille" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + " mille";
                            if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + " mille " + NumberToLetter(reste);
                            break;
                case 5 :  quotient = Math.floor(nb / 1000);
                            reste = nb - quotient * 1000;
                            if(  quotient == 1 && reste == 0   ) numberToLetter = "mille";
                            if(  quotient == 1 && reste != 0   ) numberToLetter = "mille" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + " mille";
                            if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + " mille " + NumberToLetter(reste);
                            break;
                case 6 :  quotient = Math.floor(nb / 1000);
                            reste = nb - quotient * 1000;
                            if(  quotient == 1 && reste == 0   ) numberToLetter = "mille";
                            if(  quotient == 1 && reste != 0   ) numberToLetter = "mille" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0    ) numberToLetter = NumberToLetter(quotient) + " mille";
                            if(  quotient > 1 && reste != 0    ) numberToLetter = NumberToLetter(quotient) + " mille " + NumberToLetter(reste);
                            break;
                case 7: quotient = Math.floor(nb / 1000000);
                            reste = nb % 1000000;
                            if(  quotient == 1 && reste == 0  ) numberToLetter = "un million";
                            if(  quotient == 1 && reste != 0  ) numberToLetter = "un million" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " millions";
                            if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " millions " + NumberToLetter(reste);
                            break;  
                case 8: quotient = Math.floor(nb / 1000000);
                            reste = nb % 1000000;
                            if(  quotient == 1 && reste == 0  ) numberToLetter = "un million";
                            if(  quotient == 1 && reste != 0  ) numberToLetter = "un million" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " millions";
                            if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " millions " + NumberToLetter(reste);
                            break;  
                case 9: quotient = Math.floor(nb / 1000000);
                            reste = nb % 1000000;
                            if(  quotient == 1 && reste == 0  ) numberToLetter = "un million";
                            if(  quotient == 1 && reste != 0  ) numberToLetter = "un million" + " " + NumberToLetter(reste);
                            if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " millions";
                            if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " millions " + NumberToLetter(reste);
                            break;  
                case 10: quotient = Math.floor(nb / 1000000000);
                                reste = nb - quotient * 1000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un milliard";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un milliard" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " milliards";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " milliards " + NumberToLetter(reste);
                                break;	
                case 11: quotient = Math.floor(nb / 1000000000);
                                reste = nb - quotient * 1000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un milliard";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un milliard" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " milliards";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " milliards " + NumberToLetter(reste);
                                break;	
                case 12: quotient = Math.floor(nb / 1000000000);
                                reste = nb - quotient * 1000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un milliard";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un milliard" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " milliards";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " milliards " + NumberToLetter(reste);
                                break;	
                case 13: quotient = Math.floor(nb / 1000000000000);
                                reste = nb - quotient * 1000000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un billion";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un billion" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " billions";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " billions " + NumberToLetter(reste);
                                break; 	
                case 14: quotient = Math.floor(nb / 1000000000000);
                                reste = nb - quotient * 1000000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un billion";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un billion" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " billions";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " billions " + NumberToLetter(reste);
                                break; 	
                case 15: quotient = Math.floor(nb / 1000000000000);
                                reste = nb - quotient * 1000000000000;
                                if(  quotient == 1 && reste == 0  ) numberToLetter = "un billion";
                                if(  quotient == 1 && reste != 0  ) numberToLetter = "un billion" + " " + NumberToLetter(reste);
                                if(  quotient > 1 && reste == 0   ) numberToLetter = NumberToLetter(quotient) + " billions";
                                if(  quotient > 1 && reste != 0   ) numberToLetter = NumberToLetter(quotient) + " billions " + NumberToLetter(reste);
                                break; 	
            }//fin switch
            /*respect de l'accord de quatre-vingt*/
            if(  numberToLetter.substr(numberToLetter.length-"quatre-vingt".length,"quatre-vingt".length) == "quatre-vingt"  ) numberToLetter = numberToLetter + "s";
            
            return numberToLetter;
        }//-----------------------------------------------------------------------


    var sumRecapOrder = $('#somme_recap_ord').text();
    var nbr = parseInt(sumRecapOrder);
    
  // alert(nbr);
   var arret_recap = NumberToLetter(nbr);
  // alert(arret_recap);
    document.getElementById('arreter_recap').innerHTML = arret_recap;

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

//** *********************************************************************************************** */
//** *********************************************************************************************** */
//** *********************************************************************************************** */
//** *********************************************************************************************** */
    /* Conversion de lettre en chiffre *///////*********** */

//** *********************************************************************************************** */
//** *********************************************************************************************** */
//** *********************************************************************************************** */
//** *********************************************************************************************** */
