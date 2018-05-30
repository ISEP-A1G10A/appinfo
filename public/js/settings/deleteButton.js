function deleteItem ($id, $houseId){
    $("."+$id).remove();
    $.ajax({type: "POST", url:"/appinfo/public/houses/"+ $houseId +"/settings/", data:{id: $id, name: "delete"}})
}