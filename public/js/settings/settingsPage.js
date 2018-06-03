function deleteRoom ($id, $houseId){
    $("."+$id).remove();
    $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{id: $id, name: "deleteRoom"}});
}

function editRoom (e, $id, $houseId){
    if(e.keyCode == 13){
        var $label = $("#"+$id).val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{label:$label, id: $id, name: "editRoom"}});
    }
}

function addRoom(e, $houseId) {
    if(e.keyCode == 13){
        var $label = $(".settings-new-room-input").val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{label:$label, home: $houseId, name: "addRoom"}});
        setTimeout(function(){location.reload();},1000);
    }
}

function deleteUser($id, $houseId){
    $("."+$id).remove();
    $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{user: $id, name: "deleteUser"}});

}

function editFirstName(e, $houseId, $id){
    if(e.keyCode == 13){
        var $label = $("#first-"+$id).val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{label:$label, id: $id, name: "editFirstName"}});
    }
}

function editLastName(e, $houseId, $id){
    if(e.keyCode == 13){
        var $label = $("#last-"+$id).val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{label:$label, id: $id, name: "editLastName"}});
    }
}

function addUser(e, $houseId){
    if(e.keyCode == 13){
        var $first_name = $("#new-first").val();
        var $last_name = $("#new-last").val();
        $.ajax({type:"POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{first_name: $first_name, last_name: $last_name, home: $houseId, name: "addUser"}});
        setTimeout(function(){location.reload();},1000);
    }
}
