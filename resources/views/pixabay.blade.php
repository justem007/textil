<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">RossinaPixa</h1>
<div id="images"></div>
<div id="texto"></div>
<div id="placeholder"></div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
  (function() {
    var flickerAPI = "https://pixabay.com/api/?key=4774318-f2aa3d24bc1c83a7f025e8f2b&";
    $.getJSON( flickerAPI, {
      image_type: 'vector',
      category: "photos",
      min_width: true,
      min_height : true,
      format: "json"
    })
      .done(function( data ) {
        $.each( data.hits, function( i, item ) {
          $( "<img>" ).attr( "src", item.previewURL).appendTo( "#images" );
          if ( i === 50 ) {
            return false;
          }
        });
      });
  })();
</script>
<script>
  $.getJSON('https://pixabay.com/api/?key=4774318-f2aa3d24bc1c83a7f025e8f2b&image_type=photo&category=animals', function(data) {
    var output="<ul>";
    for (var i in data.hits) {
      output+="<li>" + data.hits[i].previewURL + "</li>";
    }
    output+="</ul>";
    document.getElementById("placeholder").innerHTML=output;
  });
</script>
</body>
</html>