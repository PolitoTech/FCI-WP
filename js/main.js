(function($){

    console.log(localStorage.getItem('full-circle'));
    if (localStorage.getItem('full-circle') != '1') { // First time
        $("#flash-top").removeClass("hidden");
    }
    

    $("#flash-top .close").click(
        function(){
            localStorage.setItem('full-circle', 1);
            $(this).closest("#flash-top").slideUp();
            return false;
        }
    );


})(jQuery);