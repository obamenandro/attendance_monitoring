$(document).ready(function() {

  $('#dataTable').DataTable({
    "pagingType": "first_last_numbers",
    'bFilter': false,
    "sDom": '<"top"flp>rt<"bottom"i><"clear">'
  });

});
