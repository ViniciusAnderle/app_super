@extends('site.layouts.basico')

@section('titulo', 'Clientes')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Clientes</h1>
    </div>

    <div class="informacao-pagina">
        <p>
            Nossos Clientes: O Coração do Nosso Sucesso. Nossos clientes são a razão de ser do nosso site. Cada visita, cada interação e cada feedback que recebemos são inestimáveis para nós. São os nossos clientes que nos motivam a crescer, a melhorar e a nos esforçar para oferecer sempre o melhor serviço possível.
        </p>
        <p>
            A diversidade dos nossos clientes é o que torna a nossa comunidade tão especial. De diferentes partes do mundo, com diferentes culturas, histórias e necessidades, todos são bem-vindos e fazem parte da nossa família virtual.
        </p>
        <p>
            Nosso compromisso com os nossos clientes vai além de simples transações comerciais. Buscamos construir relacionamentos sólidos e duradouros, baseados na confiança, transparência e respeito mútuo.
        </p>
        <p>
            Cada cliente é único e valorizamos as suas opiniões e experiências. Estamos sempre abertos a ouvir e aprender com vocês, para que possamos aprimorar nossos produtos e serviços de acordo com as suas necessidades e expectativas.
        </p>
        <p>
            Obrigado por fazerem parte da nossa jornada. Estamos aqui para vocês, sempre prontos para oferecer o melhor atendimento e suporte possível. Juntos, continuaremos a construir um site cada vez melhor, feito para vocês e por vocês.
        </p>
        <p>
            Sejam sempre bem-vindos!
        </p>
    </div>
</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{ asset('img/facebook.png') }}">
        <img src="{{ asset('img/linkedin.png') }}">
        <img src="{{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span><br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{ asset('img/mapa.png') }}">
    </div>
</div>
@endsection
