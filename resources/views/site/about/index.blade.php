@extends('layouts.merge.site')
@section('titulo', 'Sobre')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sobre</li>
                        </ul>
                        <h2 class="section-title">Sobre o FGI</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content-top pt--90 pb--90 pt__md--50">
        <div class="container">
            <div class="row">
                <h5>Fórum de Governança da Internet</h5>
                <p class="desc text-justify">

                        Estamos entusiasmados em apresentar a proposta para a realização do 2º Fórum de
                        Governança da Internet, um evento que visa reunir especialistas, profissionais,
                        representantes Governamentais, acadêmicos e membros da sociedade civil para
                        discutir e colaborar no desenvolvimento de políticas e práticas relacionadas à
                        governança da internet em Angola. <br><br>

                        Outrossim a Governança da Internet é um tema crucial em nossa era digital,
                        impactando não apenas questões técnicas, mas também aspectos éticos, sociais,
                        econômicos e políticos. Neste contexto, acreditamos que um fórum dedicado,
                        proporcionará uma plataforma valiosa para o intercâmbio de ideias, discussões
                        aprofundadas e a busca por soluções colaborativas. <br> <br>
                        A Governança da Internet refere-se ao processo de estabelecimento de regras,
                        regulamentações, políticas e princípios que orientam o uso, desenvolvimento e
                        administração da Internet à escala global, regional e nacional. Ela aborda uma
                        ampla gama de questões relacionadas ao funcionamento da Internet, incluindo
                        aspectos
                        técnicos, legais, econômicos, políticos e sociais. A governança da internet é um
                        campo complexo e em constante evolução, que envolve diversos actores, como
                        governos,
                        sector privado, sociedade civil, organizações técnicas e académicas. <br> <br>
                        O tema deste fórum é um campo dinâmico e muitas vezes envolve debates intensos
                        sobre como equilibrar interesses concorrentes, como a necessidade de segurança e
                        a preservação da privacidade, ou a busca por uma internet aberta e inclusiva
                        face a restrições nacionais. Diversas organizações, como a Internet Governance
                        Fórum (IGF)
                        da ONU, dedicam-se a facilitar o diálogo global sobre estas questões. <br> <br>
                        A governança da internet é essencial para garantir que a Internet continue a ser
                        uma ferramenta valiosa para a humanidade, promovendo o desenvolvimento
                        económico, a liberdade de expressão e a colaboração global.
                    </p>
            </div>

        </div>
    </div>




@endsection
