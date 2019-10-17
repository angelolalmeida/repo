<div class="sessao container center-align" id="clientes">
<h2>Nossos Clientes</h2>
<div class="carousel">
    <div class="carousel-item"><a class="" href="#one!"><img class="responsive-img" max-width="100px" src="{{asset('img/buckminster.png')}}"></a></div>
    <div class="carousel-item"><a class="" href="#one!"><img class="responsive-img" max-width="100px" src="{{asset('img/lute-azul-1.png')}}"></a></div>
    <div class="carousel-item"><a class="" href="#one!"><img class="responsive-img" max-width="100px" src="{{asset('img/raizen.png')}}"></a></div>


  </div>
</div>


@section('scripts')

<script>
$(document).ready(function(){
    $('.carousel').carousel();
  });
</script>

@stop
