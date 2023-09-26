$(function(){
    $("#startSearch").on('submit',function(e){
        e.preventDefault();
        $("#list_result").empty();
        let keyword= $("#searchBox").val();
        
        $.get("/api/park/"+keyword,function(data){
                let i=0;
                for(let park of data){
                    $("#list_result").append("<li class='list-group-item'> <a href='/park/"+park.id+"'])}}>"+park.name+"</a></li>");
                    i++;
                }    
                if(i==0)$("#list_result").append("<li class='list-group-item'>no result found </li>");
        });

    })


})



