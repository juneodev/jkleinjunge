<?php
/**
 * Created by PhpStorm.
 * User: ggdu1
 * Date: 15/12/2017
 * Time: 19:28
 */
?>

<section id="contact">
    <div id="contact_polynesian-pattern-bg" style="background-image: url('img/polynesian-pattern-black.png')";>
        <h2>
            Contactez-moi
        </h2>
        <form action="#contact" method="POST" id="contact_form">
            <?php
            if (isset($errors)) {
                foreach ($errors as $error) { ?>

                    <p class="contact_flash-error"><?= $error; ?></p>

                <?php }
            }

            if (isset($success)) { ?>

                <p class="contact_flash-success"><?= $success; ?></p>

            <?php } ?>
            <fieldset>
                <input name="mail_name" placeholder="Nom" type="text">
                <input name="mail_email" placeholder="Email" type="text">
                <input name="mail_5qv16er" placeholder="Tel" type="text">
                <textarea placeholder="Message" name="mail_message" id=""></textarea>
            </fieldset>
            <input value="Envoyer" id="contact_submit-button" type="submit" name="mail_send">
        </form>
    </div>
</section>




