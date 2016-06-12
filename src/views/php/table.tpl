<form <?php echo $view->render('formelement.php', ['data' => $data]) ?>
    <?php if (isset($data['name'])): ?> name="<?php echo $data['name'] ?>" <?php endif; ?> 
    <?php if (isset($data['action'])): ?> action="<?php echo $data['action'] ?>" <?php endif; ?>
    <?php if (isset($data['method'])): ?> method="<?php echo $data['method'] ?>" <?php endif; ?>
    <?php if (isset($data['enctype'])): ?> enctype="<?php echo $data['enctype'] ?>" <?php endif; ?>>
    <?php foreach ($data['elements'] as $element) : ?>
        <?php echo $view->render($element['template'], ['data' => $element]) ?>
    <?php endforeach ?>
</form>
