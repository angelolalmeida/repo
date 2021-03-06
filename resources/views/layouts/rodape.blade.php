<div class="grey lighten-2">
<div class="container">

    @if (session('status'))
        <script>
            M.toast({html: '{{ session('status') }} .'})
        </script>

    @endif

    <div class="row">

        <DIV class="col m3" id="contato">
        <img class="logo responsive-img" src="{{asset('img/site/logo_cabecalho.png')}}" alt=""></a>
                <p class="endereco">Rua das Nações Unidas, 6-70<br>
                    Antigo Matadouro <br>
                    Macatuba - SP<br> 17290-000<br><br>
                Fone: (14) 3298-2814<br>
                Whatsapp: (14) 99746-3647</p>
        </DIV>

        <div class="col m3">
            <p>Entre em contato</p>
            <form method="post" action="{{ route('email') }}" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="input-field col s12">
                    <input  id="nome" name="nome" type="text" class="validate" placeholder="Meu nome">
                    <label for="first_name">Nome</label>
                  </div>
                  <div class="input-field col s12">
                    <input  id="telefone" name="telefone" type="text" class="validate" placeholder="(14)99999-9999">
                    <label for="first_name">Telefone / Celular</label>
                  </div>
                  <div class="input-field col s12">
                    <textarea id="mensagem" name="mensagem" class="materialize-textarea">Mensagem</textarea>
                    <label for="first_name">Mensagem</label>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                  </button>
            </form>
        </div>


        <DIV class="col m6">
        <iframe class="mapa" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2344.9812284740383!2d-48.71531160554759!3d-22.494250001263175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDI5JzM5LjMiUyA0OMKwNDInNDguOCJX!5e1!3m2!1spt-BR!2sbr!4v1569407582294!5m2!1spt-BR!2sbr" allowfullscreen></iframe>
        </DIV>
    </div>
</div>
<div class="container">

        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, site por
          <a href="http://www.agenciainformatize.com.br/" target="_blank">Agencia Informatize & Angelo Almeida</a>.
        </div>
      </div>
</div>
