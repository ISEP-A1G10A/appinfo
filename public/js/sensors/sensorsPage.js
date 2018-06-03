function deleteSensor ($id, $houseId, $sensor){

    if($sensor === 1){
        $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/sensors/", data:{id: $id, action: "deleteSensor"}});
        setTimeout(function(){location.reload();},1000);
    }else{
        $("."+$id).remove();
        $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/sensors/", data:{id: $id, action: "deleteSensor"}});
        setTimeout(function(){location.reload();},1000);
    }
}

function editSensor (e, $id, $houseId){
    if(e.keyCode == 13){
        var $label = $(".table-input").val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/sensors/", data:{label:$label, id: $id, action: "editSensor"}});
    }
}