<tr <?php echo $view->render('tableelement.php', ['data' => $data]) ?>> 
    <?php foreach ($data['elements'] as $element) : ?>
        <?php echo $view->render($element['template'], ['data' => $element]) ?>
    <?php endforeach ?>
</tr>
