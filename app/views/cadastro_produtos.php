<?php require_once 'cabecalho.php'; ?>

<div class="ui text container form-sobre-fotos" >
    <div class="ui text container centered aligned">
        <h1><label><font color="white">Cadastro de Produto</font> </h1>
        </div><br>

        <!--formulario de cadastro -->
        <form class="ui form" action="../controllers/produto_controller.php?acao=salvar" method="post">

            <div class="field">
                <label><font color="#363636">Nome do Produto</font></label>
                <input type="text" name="nome" placeholder="Primeiro nome">
            </div>
            <div class="ui form">
                <div class="two fields">
                    <div class="field">
                        <label><font color="#363636">Tipo</font></label>
                        <input type="text" name="tipo" placeholder="Ex: Blusa">
                    </div>
                    <div class="field">
                        <label><font color="#363636" size="2">Cor</font></label>
                        <input type="text" name="cor" placeholder="Ex : Amarelo">
                    </div>
                </div>

                <div class="ui form">
                    <div class="three fields">
                        <div class="field">
                            <label><font color="#363636">Tamanho</font></label>
                            <input type="text" placeholder="Ex: M">
                        </div>
                        <div class="field">
                            <label><font color="#363636" size="2">Estoque Mínimo</font></label>
                            <input type="text" placeholder="Ex : 30">
                        </div>
                        <div class="field">
                            <label><font color="#363636">Estoque Atual</font></label>
                            <input type="text" placeholder="Ex: 100">
                        </div>
                    </div>
                </div>

                <div class="hundred wide field">
                    <label><font color="#363636">Descrição</font></label>
                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>
                    <textarea rows="2" placeholder="Escreva aqui a descrição de seu produto."></textarea>
                </div>
                <div class="">
                    <label><font color="black">Importar Imagens</font></label>
                    <div class="hundred wide field">
                        <div class="hundred wide field">
                            <input type="file" name="" >
                        </div>
                    </div>
                </div>
                <br>
                <button class="ui button" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

</div>
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