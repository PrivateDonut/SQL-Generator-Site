$(document).ready(function() {
  var showResult = function(data) {
    $('#searchResult td').parent().remove();
    $.each(data, function(index, item) {
      $('#searchResult tr:last').after(
        '<tr class="tablerow">' +
        '<td>' + item['id'] + '</td>' +
        '<td><a href="http://us.battle.net/wow/en/item/' + item['entry'] + '" class="q' + item['color'] + '" target="_BLANK" rel="item=' + item['entry'] + '">' + item['name'] + '</a></td>' +
        '<td>' + item['entry'] + '</td>' +
        '</tr>'
      );
    });
  };
  $('#searchbar').on('input', function() {
    $.get('finditem.php', {
      dispname: $(this).val()
    },
    showResult).fail(function() {
      alert('something went wrong');
    });
  });
});
