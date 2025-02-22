@extends('layouts.merge.site')
@section('titulo', 'Adicionar Moldura')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Adicionar Moldura</li>
                        </ul>
                        <h2 class="section-title">Adicionar Moldura</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content-top pt--90 pb--90 pt__md--50">
        <div class="container">
            <div class="row">

                <div class="col-12 py-5 my-5">
                    <label for="uploadImage">Adicione a Sua Foto e Partilhe nas Redes Sociais</label>
                    <input type="file" id="uploadImage" accept="image/*" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <canvas id="displayCanvas"></canvas>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <button id="downloadButton" class="rts-theme-btn primary with-arrow"
                        style="display:none;">
                        Baixar Imagem
                        <span>
                            <i class="fa-thin fa-arrow-right"></i></span>
                    </button>
                </div>

            </div>

        </div>
    </div>






@endsection

@section('JS')
    <script>
        const uploadImage = document.getElementById('uploadImage');
        const displayCanvas = document.getElementById('displayCanvas');
        const downloadButton = document.getElementById('downloadButton');
        const displayCtx = displayCanvas.getContext('2d');

        const frame = new Image();
        frame.src = '/site/images/frame/moldura.png'; // Substitua pelo caminho da sua moldura em PNG

        const frameWidth = 1199;
        const frameHeight = 601;

        let originalCanvas, originalCtx;

        frame.onload = function() {
            uploadImage.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (!file || !file.type.startsWith('image/')) {
                    alert('Por favor, selecione uma imagem válida.');
                    return;
                }

                const img = new Image();
                const reader = new FileReader();

                reader.onload = function(e) {
                    img.src = e.target.result;

                    img.onload = function() {
                        const imageWidth = img.width;
                        const imageHeight = img.height;

                        // Calcular a nova altura da moldura proporcionalmente
                        const aspectRatio = frameWidth / frameHeight;
                        const newHeight = imageWidth / aspectRatio;

                        originalCanvas = document.createElement('canvas');
                        originalCtx = originalCanvas.getContext('2d');
                        originalCanvas.width = imageWidth;
                        originalCanvas.height = imageHeight;

                        // Desenhar a imagem no canvas
                        originalCtx.drawImage(img, 0, 0, imageWidth, imageHeight);

                        // Centralizar a moldura ao redor da imagem
                        const frameY = (imageHeight -
                            newHeight); // Calcula a posição Y para centralizar a moldura

                        // Desenhar a moldura ajustada e centralizada
                        originalCtx.drawImage(frame, 0, frameY, imageWidth, newHeight);

                        displayCanvas.width = imageWidth;
                        displayCanvas.height = imageHeight;

                        displayCtx.drawImage(originalCanvas, 0, 0);

                        downloadButton.style.display = 'inline';
                    };
                };

                reader.readAsDataURL(file);
            });
        };

        downloadButton.addEventListener('click', () => {
            const link = document.createElement('a');
            link.download = 'FGI Eu vou.png';
            link.href = originalCanvas.toDataURL();
            link.click();
        });
    </script>


@endsection
@section('CSS')
    <style>
        /* Estilo para garantir que o canvas ocupe 100% da largura da tela */
        #displayCanvas {
            width: 100%;
            height: auto;
            /* Mantém a proporção */
            display: block;
        }
    </style>

@endsection
