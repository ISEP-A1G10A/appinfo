function setSelected($id){
    for(var i = 1; i < 6; i++){
        $("#"+i).removeClass("active");
    }
    $("#"+$id).addClass("active");
}

function getObject() {
    var objectId;
    var choices = ["Maison",
        "Capteurs",
        "Compte",
        "Mot de passe",
        "Fonctionnalités"];
    for (var i = 1; i < 6; i++){
        if($("#"+i).hasClass("active")){
            objectId = i;
        }
    }
    return choices[objectId - 1];
}

function getMessage() {
    return $(".help-message-text").val();
}

function sendMessage(e, $userId){
    e.preventDefault();
    var object = getObject();
    var message = getMessage();
    $.ajax({type: "POST", url: "/appinfo/public/help", data:{user:$userId , object: object, content: message, action: "sendMessage"}});
    setTimeout(function(){location.reload();},1000);
}
