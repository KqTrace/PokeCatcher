<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Poke Catcher</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="pagina">
        <div class="container-wrap-top">
            <div class="container-inside-top">
                <div class="row-top">
                    <div class="col1-row-top">
                        <a href="index.php"><h1>Poke <img src="img/poke_icon_head.png"> Catcher</h1></a>
                    </div>
                    <div class="col2-row-top">
                        <ul id="lista_menu">
                            <a href="index.php"><li onmouseover="mouseOverMenu(this)" onmouseout = "mouseOutMenu(this)">Início</li></a>
                            <a href="#" ><li onmouseover="mouseOverMenu(this)" onmouseout = "mouseOutMenu(this)">Login</li></a>
                            <a href="#" ><li onmouseover="mouseOverMenu(this)" onmouseout = "mouseOutMenu(this)">Cadastrar</li></a>
                            <a href="#" ><li onmouseover="mouseOverMenu(this)" onmouseout = "mouseOutMenu(this)">Sobre</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-wrap-mid">
            <div class="container-inside-mid">
                <div class="row-mid">
                    <div class="col1-row-mid">
                        <div class="container-wrap-form">
                            <div class="container-inside-form">
                                <div class="row1-form">
                                    <div class="col1-form">
                                        <h2>Poke <img src="img/mid_img.png"> Catcher</h2>
                                        <br/>
                                        <h3>Fã Game baseado em Browser</h3>
                                    </div>
                                </div>
                                <div class="row2-form">
                                    <div class="col1-row2-form" onmouseover="mouseOverForm(this)" onmouseout="mouseOutForm(this)">
                                        <a href="#"><p>Log In</p></a>
                                    </div>
                                    <div class="col2-row2-form" onmouseover="mouseOverForm(this)" onmouseout="mouseOutForm(this)">
                                        <a href="#"><p>Cadastrar</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col2-row-mid">
                        <div class="row1-image">
                            <div class="col1-image">
                                <img src="img/pokemon-crowd.png" style="width: 579px; height: 339px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-wrap-bottom">
            <div class="container-inside-bottom">
                <div class="row1-bottom">
                    <div class="col1-bottom">
                        <p>Links</p>
                        <p>Links2</p>
                        <p>Links3</p>
                    </div>
                    <div class="col2-bottom">
                        <p>Direitos</p>
                        <p>Direitos</p>
                        <p>Direitos</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--<script type="text/javascript" src="../JS/brain.js"></script>-->

    <?php
        echo "Testando PHP";
    ?>

</body>

</html>
