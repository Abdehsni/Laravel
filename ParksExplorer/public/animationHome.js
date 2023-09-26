setInterval(function(){
    $.get("/api/park/random",function(data){
        let imageElement = document.getElementById("#home_image");
        let nompark = document.querySelector("#nameOfPark");
        let locationPark = document.querySelector("#locationOfPark");

        // if(data.image === null){
        //     imageElement.src = "No-Image-Placeholder.svg.png";
        // }else{
        //     imageElement.src = data.image;
        // }
         //console.log(data);
        nompark.innerHTML = data.name ;
        locationPark.innerHTML = data.location ;
    })


},10000);