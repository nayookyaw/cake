$( ".first" ).hover(
  function() {
    $( this ).find("h2").addClass( "hover1" );
  }, function() {
    $( this ).find("h2").removeClass( "hover1" );
  });

$( ".second" ).hover(
  function() {
    $( this ).find("h2").addClass( "hover2" );
  }, function() {
    $( this ).find("h2").removeClass( "hover2" );
  });

$( ".third" ).hover(
  function() {
    $( this ).find("h2").addClass( "hover3" );
  }, function() {
    $( this ).find("h2").removeClass( "hover3" );
  });

$( ".four" ).hover(
  function() {
    $( this ).find("h2").addClass( "hover4" );
  }, function() {
    $( this ).find("h2").removeClass( "hover4" );
  });
