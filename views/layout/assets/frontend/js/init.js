(function($){
    
    $('.parallax').parallax();

    $('.button-collapse').sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true,
            draggable: true,
            onOpen: function(el) { },
            onClose: function(el) { },
        }
    );
    
    $('#navbar-menu').sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true,
            draggable: true,
            onOpen: function(el) { },
            onClose: function(el) { },
        }
    );

    $('.carousel.carousel-slider').carousel({fullWidth: true});
    
$('.datepicker').pickadate({
    format: 'yyyy-mm-dd',
    selectMonths: true,
    selectYears: 80,
    min: new Date(1937, 1, 1),
    max: new Date(2017, 12, 31),
    closeOnSelect: true,
    labelMonthNext: 'Next month',
    labelMonthPrev: 'Previous month',
    labelMonthSelect: 'Select a month',
    labelYearSelect: 'Select a year',
    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
    weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Cerrar',
    closeOnSelect: false
});     
    
    $('select').material_select();    
    
    $('.materialboxed').materialbox();
    
})(jQuery); // end of jQuery name space