<?php 
    $tipo_usuario = 2;
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Projeto</title>
    <link rel="stylesheet" type="text/css" href="../../assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">

    <script src="../../assets/library/jquery.min.js"></script>
    <script src="../../assets/semantic/components/visibility.js"></script>
    <script src="../../assets/semantic/components/sidebar.js"></script>
    <script src="../../assets/semantic/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>
<body>

    <?php if($tipo_usuario == 1): ?>
        <p>botaoooooooooooo</p>
    <?php endif; ?>



<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Início</a>
    <a class="item">Ajuda</a>
    <a class="item">Sobre</a>
    <a class="item">Login</a>
</div>

<!-- Page Contents -->
<div class="pusher">

    <div class="ui inverted vertical masthead center aligned segment tela-catalogo" >

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>

                <a href="tela_inicio.html" class="active item">Início</a>
                <a href="ajuda.html" class="item">Ajuda</a>
                <a href="tela_sobre.html" class="item">Sobre</a>
                <br class="ui search"><br>
                <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>

            </div>
        </div>
        <!--AQUI É ONDE VAMOS COLOCAR AS COISAS TODAS!!!-->

        <div><div class="ui huge breadcrumb">
            <a class="section">Verão</a>
            <span class="divider">/</span>
            <a class="section">Feminino</a>
            <span class="divider">/</span>
            <div class="active section">Blusas</div>
        </div>

        </div>

            <?php foreach($listaProdutos as $produto): ?>

            <div class="ui small image imagem-catalogo">
                <img  src="../../assets/images/blusa6.jpg">
                <h2><?= $produto['nome']; ?></h2>
                <h3>R$<?= $produto['preco']; ?></h3>
                <a href="tela_informacoes.html">ver mais|editar</a>
            </div>

            <?php endforeach; ?>


        </div>

        <div>
            
        <br><br><i class="big spinner loading icon"></i><br></div>

    <!--aqui acaba as coisas!!!-->

</div>


<!-- RODAPE-->
<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Sobre Nós</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Onde estamos</a>
                    <a href="#" class="item">Clientes</a>
                    <a href="#" class="item">Relatos</a>
                    <a href="#" class="item">Contato</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">O que fazemos</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Controle de estoque</a>
                    <a href="#" class="item">Vitrine Virtual</a>
                    <a href="#" class="item">Relatórios</a>
                </div>

            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Siga-nos!</h4>
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&data-colorscheme=dark&action=like&size=small&show_faces=false&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>