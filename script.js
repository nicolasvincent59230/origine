$(function(){


    $picker = $( "#datePicker" ).datepicker({
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: [ 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche'],
        dayNamesShort: [ 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.','Dim.'],
        dayNamesMin: [ 'L', 'M', 'M', 'J', 'V', 'S','D'],
        weekHeader: 'Semaines',
        dateFormat: 'dd-mm-yy',
        showWeek: true,
        minDate: 0
    })

    $('#datePicker').change(function() {
        var date2 = $('#datePicker').datepicker('getDate', '+9w');
        date2.setDate(date2.getDate()+70);
        $('#datePicker').datepicker('setDate', date2);
    });

});