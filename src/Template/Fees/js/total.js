
var total_listed = 0;
var listed_mult = 1;
var total_sold = 0;
var sold_mult = 1;

$(document).ready(function () {

    var $dataRows = $("#fees tr:not('.totalColumn, .titlerow')");

    $dataRows.each(function () {
        $(this).find('.DataListed').each(function () {
            total_listed += parseFloat($(this).html());
        });
        $(this).find('.DataSold').each(function () {
            total_sold += parseFloat($(this).html());
        });
    });
    $("#fees td.totalColListed").text(total_listed * listed_mult);
    $("#fees td.totalColSold").text(total_sold * sold_mult);

    $('.total').text(total_listed*listed_mult - total_sold*sold_mult);
});