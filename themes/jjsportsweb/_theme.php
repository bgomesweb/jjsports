<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2020-08-13T17:02:10-3:00+186039">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>">
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>">
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>
<!--HEADER-->
<header class="main_header gradient gradient-blue">
    <div class="container_icons">
    <div class="main_header_icons">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/brasil.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/eua.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/canada.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/espanha.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/italia.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/portugal.jpg") ;?>">
        <img alt="Bandeira Brasil" src="<?= theme("/assets/images/australia.jpg") ;?>">
    </div>
    </div>
    <div class="container">
        <div class="main_header_logo">
            <a href="<?= url(); ?>" title="Inicio"><img src="<?= theme("/assets/images/logo_jjsports.png"); ?>" title="Logo JJ Sports" alt="Logo JJ Sports"></a>
        </div>
        <nav class="main_header_nav">
            <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
            <div class="main_header_nav_links j_menu_mobile_tab">
                <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                <a class="link transition radius" title="Intercâmbio" href="<?= url("/intercambio"); ?>">Intercâmbio</a>
                <a class="link transition radius" title="Agenciamentos" href="<?= url("/agenciamentos"); ?>">Agenciamentos</a>
                <!--<a class="link transition radius" title="Seletivas" href="<?= url("/seletivas"); ?>">Seletivas</a>-->
                <a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Academy</a>
                <a class="link transition radius" title="Parceiros" href="<?= url("/parceiros"); ?>">Parceiros</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>
                <a class="link transition radius" title="Contato" href="<?= url("/contato"); ?>">Contato</a>
            </div>
        </nav>
    </div>
</header>

<!-- CONTENT -->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<!-- FOOTER -->
<footer class="main_footer">
    <div class="container content">
        <section class="main_footer_content">
            <article class="main_footer_content_item">
                <h2>Sobre:</h2>
                <p>A JJ Sports Academy é uma agência de consultoria esportiva especializada em preparar jovens atletas que desejam ingressar nos programas esportivos de universidades de outros países ou em clubes profissionais nacionais e internacionais de futebol.</p>
            </article>

            <article class="main_footer_content_item">
                <h2>Mais:</h2>
                <a class="link transition radius" title="Intercambio" href="<?= url("/intercambio"); ?>">Intercâmbio</a>
                <a class="link transition radius" title="Agenciamentos" href="<?= url("/agenciamentos"); ?>">Agenciamentos</a>
                <!--<a class="link transition radius" title="Seletivas" href="<?= url("/seletivas"); ?>">Seletivas</a>-->
                <a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Academy</a>
                <a class="link transition radius" title="Parceiros" href="<?= url("/parceiros"); ?>">Parceiros</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>
                <a class="link transition radius" title="Contato" href="<?= url("/contato"); ?>">Contato</a>
            </article>

            <article class="main_footer_content_item">
                <h2>Contato:</h2>
                <p class="icon-phone"><b>Telefone:</b> (19) 99711-5378</p>
                <p class="icon-phone"><b>Telefone:</b> (19) 99655-6064</p>
                <p class="icon-envelope"><b>E-mail:</b> contato@jjsports.com.br</p>
                <p class="icon-map-marker"><b>Endereço:</b> Rua 10, Nº1569, Santa Cruz (Grêmio da Cia Paulista)</p>
                <p class="icon-map-marker"><b>Cidade:</b> Rio Claro/SP</p>
            </article>

            <article class="main_footer_content_item social">
                <h2>Social:</h2>
                <a target="_blank" class="icon-facebook" href="https://www.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE; ?>" title="JJ Sports no Facebook">/jjsportsacademyfb</a>
                <a target="_blank" class="icon-instagram" href="https://www.instagram.com/<?= CONF_SOCIAL_INSTAGRAM_PAGE; ?>" title="JJ Sports no Instagram">/jjsportsacademy</a>
                <img src="<?= theme("/assets/images/cbf.png");?>">
            </article>
        </section>
    </div>
</footer>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q82P8YY8SN"></script>
<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>
</body>
</html>