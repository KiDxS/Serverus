$(document).on("click", ".delete", function () {
    let id = $(this).attr("data-id");
    $("#receipt_id").val(id);
    console.log($("#receipt_id").val(id));
});