<html>
<head>
    <link type="text/css" rel="stylesheet" href="/css/global.css">
</head>
<body>
<div id="container">
    <div id="number-panel">
        <?php for ($i = 1; $i <= 90; $i++) {
            ?>
            <div><span class="number" id="number-<?= $i ?>"><?= $i ?></span></div><?php }
        ?>
    </div>
    <div id="base">
        <div id="ball-output">
            <div class="ball output-position--1" position="-1">&nbsp;</div>
            <div class="ball output-position-0" position="0" style="visibility:hidden;">&nbsp;</div>
            <div class="ball output-position-1" position="1" style="visibility:hidden;">&nbsp;</div>
            <div class="ball output-position-2" position="2" style="visibility:hidden;">&nbsp;</div>
            <div class="ball output-position-3" position="3" style="visibility:hidden;">&nbsp;</div>
        </div>
        <div id="bombo">
            <img src="/img/bombo.gif"/>
        </div>
        <div id="controls">
            <a id="new-ball" class="button" href="#">
                <span>BOLA</span>
            </a>
            <br/>
            <a id="new-game" class="button" href="">
                <span>Nueva Partida</span>
            </a>

        </div>
    </div>
</div>

<script type="text/javascript" src="/js/jquery/jquery.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>