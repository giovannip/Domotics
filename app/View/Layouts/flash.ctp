<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $pageTitle; ?></title>

        <?php
        if (Configure::read('debug') == 0):
            echo sprintf('<meta http-equiv="Refresh" content="%s;url=%s" />', $pause, $url);
        endif;
        ?>
    </head>
    <body>
        <div class="alert alert-danger"><?php echo $this->Html->link($message, $url); ?></div>
    </body>
</html>
