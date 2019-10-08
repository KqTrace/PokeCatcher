<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Developing</title>
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
                    <div class="col1-row-mid" style="height: 400px; overflow: auto;">

                        <div id="feedback-form">
                          <h2 class="header">Registre-se em</br>Poke Catcher</h2>
                        <div>
                        <form method="get" action="index.php">
                            <input type="text" name="name" placeholder="Nome público"></input>
                            <input type="text" name="lname" placeholder="Nome de usuário"
                            <input type="text" name="email" placeholder="E-mail"></input>
                            <!--<label for="feedback-notify">Remind me about this event via SMS</label>
                            <input type="checkbox" id="feedback-notify" name="notify">-->
                            <input type="text" id="feedback-phone" name="phone" placeholder="Phone number"></input>
                            <button type="submit">Register</button>
                        </form>
                        </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="container-wrap-bottom" style="margin-top: 5px;">
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

    <!--
    <script type="text/javascript" src="../JS/brain.js"></script>
    <script type="text/javascript" src="../JS/gaming.js"></script>
    <script type="text/javascript" src="../JS/Sprite.js"></script>
    -->
    <?php
    include("Conexao.php");

     ?>

     <script type="text/javascript" src="js/interaction.js"></script>
</body>

</html>
