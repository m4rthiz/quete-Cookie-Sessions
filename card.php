<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Votre Pannier</h2>
            <ul>
                <?php foreach ($_COOKIE as $cookieName => $val) : ?>
                <p><?php echo $cookieName !== 'PHPSESSID' ?  'il y a ' . ' ' .  $val . ' ' . $cookieName . ' dans votre pannier '  : '' ?></p>
                <?php endforeach ?>
            </ul>

          </div>
</section>
<?php require 'inc/foot.php'; ?>
