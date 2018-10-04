<!-- Scrips Bootstrap and Jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
    <!-- jquery.elevatezoom.js-->
  <script src="{{ asset('assets/site/js/jquery.elevatezoom.js') }}"></script>

<script>
  //lensSize e o tamanho da lente
$("#zoom").elevateZoom({
      zoomType	: "lens",
      lensShape : "round",
      lensSize : 200 
  });
</script>