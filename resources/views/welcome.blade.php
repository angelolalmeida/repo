@extends('layouts.publico')

@section('conteudo')
<div class="container center-align sessao">
    <h2>Quem Somos</h2>
    <p>A Manvell conta com uma equipe multidisciplinar, preparada para atender as crescentes necessidades de nossos parceiros e clientes. Estamos localizados no centro oeste paulista, próximo ao centro geográfico paulista o que nos permite agilidade na logística de atendimento a demanda de nossos clientes a âmbito nacional.</p>    
</div>

<div class="center-align sessao grey lighten-3" id="servicos">
    <div class="container">
    <h2>O que Fazemos</h2>
    <div class="row">
        <div class="col m4">
            <div class="servicos center-align">
                <img class="materialboxed responsive-img img-servicos z-depth-3" width="100%" src="{{asset('img/caldeiraria.jpg')}}">
                <h5>Caldeiraria</h5>
                <p>Manutenção em tanques e silos industriais</p>
            </div>
        </div>
        <div class="col m4">
            <div class="servicos">
                <img class="materialboxed responsive-img img-servicos z-depth-3" width="100%" src="{{asset('img/mecanica_industrial.jpg')}}">
                <h5>Mecânica Industrial</h5>
                <p>Manutenção em máquinas e equipamentos</p>
            </div>
        </div>
        <div class="col m4">
            <div class="servicos">
                <img class="materialboxed responsive-img img-servicos z-depth-3" width="100%" src="{{asset('img/isolamento_termico.jpg')}}">
                <h5>Isolamento Térmico</h5>
                <p>Manutenção e substituição de sistema isolante em equipamentos, tubulações e dutos.</p>
            </div>
        </div>
        <div class="col m6 ">
            <div class="servicos center-align">
                <img class="materialboxed responsive-img img-servicos z-depth-3" src="{{asset('img/pintura_industrial.jpg')}}">
                <h5>Pintura Industrial</h5>
                <P>Pintura de instalações fabris, inclusive em altura.</P>
            </div>
        </div>
        <div class="col m6">
            <div class="servicos center-align">
                <img class="materialboxed responsive-img img-servicos z-depth-3" src="{{asset('img/construcao_civil.jpg')}}">
                <h5>Construção Civil</h5>
                <p>Reparos e construções em geral dentro de parques industriais.</p>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection



