var colums = [
    "id",
    "first_name",
    "last_name",
    "type",
    "email",
    "phone"
];

function onSearch() {
    var q = 0;
    $(".members-row").each(function () {
        var shouldAppear = true;
        var $row = $(this);
        for (var j = 0; j < colums.length; j++) {
            var colum = colums[j];
            var search_value = $("#input_" + colum).val().toLowerCase();
            var box_value = $row.find(".members-colum-" + colum).text().toLowerCase();
            if (!box_value.includes(search_value)) {
                shouldAppear = false;
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