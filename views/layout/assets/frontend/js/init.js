(function($){
    
        $('.parallax').parallax();

        $('.button-collapse').sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true,
            draggable: true,
            onOpen: function(el) { /* Do Stuff */ },
            onClose: function(el) { /* Do Stuff */ },
            }
        );
})(jQuery); // end of jQuery name space