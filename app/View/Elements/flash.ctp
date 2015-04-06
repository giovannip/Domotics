<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $pageTitle; ?></title>

        <?php
        if (Configure::read('debug') == 0):
            echo sprintf('<meta http-equiv="Refresh" content="%s;" />', $pause);
        endif;
        ?>
    </head>
    <body>
        <div class="alert alert-danger"><?php echo $message; ?></div>
    </body>
</html>
