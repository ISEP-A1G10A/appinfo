function deleteSensor ($id, $houseId){
    $("."+$id).remove();
    $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/sensors/", data:{id: $id, action: "deleteSensor"}});
}

function editSensor (e, $id, $houseId){
    if(e.keyCode == 13){
        var $label = $(".table-input").val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/sensors/", data:{label:$label, id: $id, action: "editSensor"}});
    }
}