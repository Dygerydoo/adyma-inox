// Trigger of socialbox and descriptionboxes
$(document).ready(function(){
     $(".trigger").mouseover(function(event){
         $('#' + $(event.target).data('id')).toggleClass('slidemgin', 1200);
            $("#st").toggleClass('socialteamove');
     });
});

// Trigger of arrow animations
$(document).ready(function () {
    $(".trigger").on("mouseover", function(event) {
        $(event.target).toggleClass('arrowhover');
        });
    });

// Pop-up legal info
$(document).ready(function () {
    $(".infl").on("click", function(){
        $('.infls').toggleClass('showinfl');
    });
});