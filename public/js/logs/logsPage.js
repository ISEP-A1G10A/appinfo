var colums = [
    "date",
    "hour",
    "type",
    "session-id",
    "ip-address",
    "value"
];

function onSearch() {
    var q = 0;
    $(".logs-row").each(function () {
        var shouldAppear = true;
        var $row = $(this);
        for (var j = 0; j < colums.length; j++) {
            var colum = colums[j];
            var search_value = $("#input_" + colum).val().toLowerCase();
            var box_value = $row.find(".logs-colum-" + colum).text().toLowerCase();
            if (q === 1) {
                console.log(search_value);
                console.log(box_value);
            }
            if (!box_value.includes(search_value)) {
                shouldAppear = false;
                if (q === 1) {
                    console.log("hide");
                }
            }
        }
        if (shouldAppear) {
            $row.show();
        } else {
            $row.hide();
        }
        q++;
    });
}

colums.forEach(function (colum) {
    $("#input_" + colum).on("keyup", onSearch);
});