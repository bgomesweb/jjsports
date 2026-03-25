<?php $v->layout("_theme"); ?>

    <article class="home_featured">
        <div class="home_featured_content container">
            <header class="home_featured_header">
                <h1>A grande oportunidade de ingressar no mundo do esporte universitário e profissional</h1>
                <p>Nós realizamos o seu sonho, entre em contato conosco e mude a sua vida!</p>
                <p><span data-go=".home_optin" class="home_featured_btn gradient gradient-green gradient-hover radius transition icon-check-square-o">
                    SEJA JJ SPORTS
                    </span></p>
                <p class="features">Profissionalismo | Gestão de Carreira | Intercâmbio</p>
            </header>
        </div>
    </article>

    <!--<div class="home_features">
        <section class="container content">
            <header class="home_featured_header">
                <h2>Paises em que atuamos</h2>
            </header>

            <div class="home_features_content">
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/brasil.jpg") ;?>">
                    <h3>Brasil</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/eua.jpg") ;?>">
                    <h3>EUA</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/canada.jpg") ;?>">
                    <h3>Canadá</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/espanha.jpg") ;?>">
                    <h3>Espanha</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/italia.jpg") ;?>">
                    <h3>Itália</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/portugal.jpg") ;?>">
                    <h3>Portugal</h3>
                </article>
                <article class="radius">
                    <img alt="Bandeira Brasil" src="<?= theme("/assets/images/australia.jpg") ;?>">
                    <h3>Austrália</h3>
                </article>
            </div>
        </section>
    </div>-->
<article class="home_optin_jay">
    <div class="home_optin_content_jay container content">
        <header class="home_optin_content_flex_jay">
            <img src="<?= theme("/assets/images/jayjay.png") ;?>">
            <h3>Jay Jay <br></b><span>mascote da JJ Sports</span></h3>
        </header>

        <div class="home_optin_content_flex_jay">
            <p>- Preparo esportivo e acadêmico</p>
            <p>- Assessoria pré e pós embarque</p>
            <p>- Gestão de carreira</p>
            <p>- Equipe de profissionais qualificados</p>
            <p>- Treinamentos de alto rendimento</p>
            <p>- Avaliação e acompanhamento esportivo e acadêmico individual de cada atleta</p>
            <p>- Participação em competições esportivas de alto nível</p>
        </div>
    </div>
</article>

<!--OPTIN-->
<article class="home_optin">
    <div class="home_optin_content container content">
        <header class="home_optin_content_flex">
            <h2>Entre em contato conosco e venha fazer parte do time JJ Sports</h2>
            <p>Não deixe a oportunidade passar, seja JJ SPORTS.</p>
            <p>Deixe uma mensagem preenchendo o formulário ao lado, ou se preferir acesse nossas redes sociais!</p>
            <p>
                <ul>
                    <li><img src="<?= theme("/assets/images/mascote_contact.png") ;?>"></li>
                    <li><a target="_blank" class="icon-facebook" title="Facebook JJ Sports" alt="Facebook JJ Sports" href="https://www.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE; ?>" title="JJ Sports no Facebook"></a></li>
                    <li><a target="_blank" class="icon-instagram" title="Instagram JJ Sports" alt="Instagram JJ Sports" href="https://www.instagram.com/<?= CONF_SOCIAL_INSTAGRAM_PAGE; ?>" title="JJ Sports no Instagram"></a></li>
                    <li><a target="_blank" class="icon-whatsapp transition" href="https://api.whatsapp.com/send?phone=5519997115378&amp;text=Olá, quero fazer parte do time JJ Sports."></a></li>
                    <li><a target="_blank" class="icon-whatsapp transition" href="https://api.whatsapp.com/send?phone=5519996556064&amp;text=Olá, quero fazer parte do time JJ Sports."></a></li>
                </ul>
            </p>
            <h3>EDUCAÇÃO E ESPORTE NO EXTERIOR É NA JJ SPORTS</h3>
        </header>

        <div class="home_optin_content_flex">
            <span class="icon icon-check-square-o icon-notext"></span>
            <h4>Vamos conversar futuro atleta?</h4>
            <form action="<?= url("/contato") ;?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash() ;?></div>
                <?= csrf_input() ;?>
                <input type="text" name="fullname" placeholder="Nome Completo" required>
                <input type="email" name="email" placeholder="Melhor e-mail" required>
                <input type="phone" class="mask-phone" name="phone" placeholder="Telefone" required>
                <textarea name="message" placeholder="Deixe sua mensagem aqui..." required></textarea>
                <button class="radius transition gradient gradient-blue gradient-hover">Enviar</button>
            </form>
        </div>
    </div>
</article>