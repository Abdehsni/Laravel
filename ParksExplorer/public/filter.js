
function hideRidesNotConcerned(value_option){
    $("#list_rides li").each(function() {        
        if($(this).attr("id")!=value_option && value_option!='none'){
            $(this).hide();
        }else{$(this).show()};
     });

}



$(function(){
    $("#types_of_ride").click(function(){
        let value_option = $(this).val();
        hideRidesNotConcerned(value_option);
    });
});