<td <?php echo $view->render('tableelement.php', ['data' => $data]) ?>>
    <?php if (isset($data['content'])): ?><?php echo $data['content'] ?><?php endif; ?>
</td>