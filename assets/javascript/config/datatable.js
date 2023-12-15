// 
import $ from 'jquery';
$(document).ready(() => {
    $('#config-table').DataTable({
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
});