<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>


<?php include 'components/slider-principal.php'; ?>

<?php include 'components/grid-galeria.php'; ?>

<?php include 'components/grid-lojas-mulher.php'; ?>

<?php include 'components/grid-instagram.php'; ?>

<?php include 'components/grid-lojas-homem.php'; ?>

<section class="sectionStartTwo">
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 newsletter center-align">
                <img src="assets/img/icon-mail.png" alt="">
                <div class="newsletter-title oswaldBold textUpper">
                    receba nossa newsletter:
                </div>
                <div class="input-field">
                    <input type="text" name="" class="newsletter-input" placeholder="Digite seu e-mail...">
                </div>
                <div class="margin_1_top">
                    <a href="#0" class="newsletter-button textUpper">
                        receber
                    </a>
                </div>
            </div>
            <div class="col s12 m12 l4 newsletter-parceiro nopaddingmobile margin_1_top">
                <img src="assets/img/kingjoe.jpg" class="widthfull">
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

</body>

</html>