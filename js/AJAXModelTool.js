$(document).ready(function() {
  var showResult = function(data) {
    $('#searchResultModel td').parent().remove();
    $.each(data, function(index, model) {
      $('#searchResultModel tr:last').after(
        '<tr class="tablerow">' +
        '<td>' + model['id'] + '</td>' +
        '<td>' + model['name'] + '</td>' +
        '<td>' + model['entry'] + '</td>' +
        '</tr>'
      );
    });
  };
  $('#searchbarmodel').on('input', function() {
    $.get('functions/findmodelid.php', {
      dispname: $(this).val()
    },
    showResult).fail(function() {
      alert('something went wrong');
    });
  });
});
