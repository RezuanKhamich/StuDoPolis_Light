$( "#form-reg" ).hide();

$( "#clickme" ).click(function() {
    $( "#form-input" ).hide();
    $( "#form-reg" ).show();
  });
$( "#enter" ).click(function() {
  $( "#form-reg" ).hide();
  $( "#form-input" ).show();
});