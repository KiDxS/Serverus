$(document).on("click", ".delete", function () {
    let id = $(this).attr("data-id");
    $("#id").val(id);
    console.log($("#id").val(id));
});

$(document).ready(function () {
    $(".editbtn").on("click", function () {
        $("#modal-3").modal("show");

        $tr = $(this).closest("tr");
        var data = $tr.children("td").map(function () {
            return $(this).text();
        });
        $("#id_update_field").val(data[0]);
        $("#product_name_update_field").val(data[1]);
        $("#quantity_update_field").val(data[2]);
        $("#cost_price_update_field").val(data[3]);
        $("#sale_price_update_field").val(data[4]);
    });
});
