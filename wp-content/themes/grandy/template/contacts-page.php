<?php
/*
Template name: Контакты
*/
get_header();
?>


    <section class="contacts row">
        <div class="col-lg-6 col-12  left">
            <div id="map"></div>
        </div>
        <div class="col-lg-6 col-12 right">
            <?php if(ot_get_option('contacts_address')) { ?>
            <div class="address-cont">
                <p class="address"><?php echo ot_get_option('contacts_address') ?></p>
            </div>
            <?php } ?>
            <?php if(ot_get_option('contacts_tel1')) { ?>
                <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('contacts_tel1')) ?>" class="tel"><?php echo ot_get_option('contacts_tel1') ?></a>
            <?php } ?>
            <?php if(ot_get_option('contacts_tel2')) { ?>
                <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('contacts_tel2')) ?>" class="tel"><?php echo ot_get_option('contacts_tel2') ?></a>
            <?php } ?>
            <?php if(ot_get_option('contacts_mail')) { ?>
                <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('contacts_mail')) ?>" class="mail"><?php echo ot_get_option('contacts_mail') ?></a>
            <?php } ?>
            <form method="post" id="contacs-form"  class="contacts-form">
                <label for="contacts-mail" class="label"></label>
                <input type="mail" name="contacts-mail" required id="contacts-mail" placeholder="Эл.почта">
                <textarea class="message" name="message"></textarea>
                <button type="submit" class="btn contacts-btn">Отправить</button>
            </form>
        </div>
    </section>

<?php
get_footer();
