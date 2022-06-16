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


$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
      //Page insertion mouvement 
    $("#mouvement_types").on('change',function(){
        if($(this).val() == 2){
            $("#numero").css("display",'block');
            $("#mouvement_descriptions").val(3); 
            $("#mouvement_quantite").val("-");
        }else{
            $("#numero").css("display",'none');
            $("#mouvement_descriptions").val(1);
        }
    });

    $("#flip").click(function(){
      $("#panel").fadeToggle(1000);
    });
});

console.log('Hello world ');