<div class="grey lighten-2 navbar-fixed">
<div class="">

<nav class="grey lighten-2 z-depth-0 text-darken-2">
    <div class="nav-wrapper container">
        <div class="topo_nav">
            <a href="http://www.manvell.com.br/" class="brand-logo"><img class="logo responsive-img" src="{{asset('img/site/logo_cabecalho.png')}}" alt=""></a>
        </div>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#clientes">Clientes</a></li>
        <li><a href="#contato">Contato</a></li>        
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#clientes">Clientes</a></li>
        <li><a href="#contato">Contato</a></li>  
  </ul>

</div>
</div>

@section('scripts')

<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.materialboxed').materialbox();
  });
  
</script>

@stop

