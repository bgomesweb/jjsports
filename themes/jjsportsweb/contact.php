<?php $v->layout("_theme"); ?>
<article class="contact_optin">
    <div class="contact_optin_content container content">
        <header class="contact_optin_content_flex">
            <h2>Viva essa experiência, colha os frutos no futuro!</h2>
            <div class="contact_optin_content_flex_general">
                <div class="contact_optin_content_flex_general_mascot">
                    <img src="<?= theme("/assets/images/mascote_contact.png") ;?>">
                </div>
                <div class="contact_optin_content_flex_contacts">
                    <p class="icon-phone"><b>Telefone:</b> (19) 99711-5378</p>
                    <p class="icon-phone"><b>Telefone:</b> (19) 99655-6064</p>
                    <p class="icon-envelope"><b>E-mail:</b> contato@jjsports.com.br</p>
                    <p class="icon-map-marker"><b>Endereço:</b> Rua 10, Nº1569, Santa Cruz (Grêmio da Cia Paulista)</p>
                    <p class="icon-map-marker"><b>Cidade:</b>Rio Claro/SP</p>
                    <p><a target="_blank" class="icon-facebook" href="https://www.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE; ?>" title="JJ Sports no Facebook">/jjsportsacademyfb</a></p>
                    <p><a target="_blank" class="icon-instagram" href="https://www.instagram.com/<?= CONF_SOCIAL_INSTAGRAM_PAGE; ?>" title="JJ Sports no Instagram">/jjsportsacademy</a></p>
                </div>
            </div>

        </header>

        <div class="contact_optin_content_flex">
            <span class="icon icon-check-square-o icon-notext"></span>
            <h4>Entre em contato conosco</h4>
            <form action="<?= url("/contato") ;?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash() ;?></div>
                <?= csrf_input() ;?>
                <input type="text" name="fullname" placeholder="Nome Completo" required>
                <input type="email" name="email" placeholder="Melhor e-mail" required>
                <input class="mask-phone" type="text" name="phone" placeholder="Telefone" required>
                <textarea name="message" placeholder="Deixe sua mensagem aqui..." required></textarea>
                <button class="radius transition gradient gradient-blue gradient-hover">Enviar</button>
            </form>
        </div>
    </div>
</article>


