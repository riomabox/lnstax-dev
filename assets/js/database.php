<script>
  firebase.database().ref('tools/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value) {
      if (value) {
        htmls.push('<p>\
        <span style="font-size: 1.6em;">' + value.nilai + 'x</span> URL telah di klik\
        </p>');
      }
    });
    $('#counter-body').html(htmls);
  });
</script>