<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/css/global.css">
    </head>
    <body>
        <div id="container">
            <div id="number-panel">
                <?php for ($i = 1; $i <= 90; $i++) {
                    ?><div><span class="number" id="number-<?= $i ?>" ><?= $i ?></span></div><?php }
                ?>
            </div>
            <div id="base">
                <div id="bombo">
                    <img src="/img/bombo.gif" />
                </div>
                <div id="ball-output">
                        <div class="ball" style="display: none"></div>
                </div>
                <div id="controls">
                    <a id="new-ball"  class="button"  href="#">
                        <span>BOLA</span>
                    </a>
                    <br />
                    <a id="new-game" class="button" href="">
                        <span>Nueva Partida</span>
                    </a>

                </div>
            </div>
        </div>

        <script type="text/javascript" src="/js/jquery/jquery.js" ></script>
        <script type="text/javascript" src="/js/script.js" ></script>
    </body>
</html>