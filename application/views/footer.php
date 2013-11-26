
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<?php
foreach ($js as $jsFile) {
    echo '<script type="text/javascript" src="' . $jsFile . '.js"></script>' . PHP_EOL;
}
?>

<script type="text/javascript">
    //CHECKBOX PRETTYFY

    $('.skin-flat input').each(function() {
        var self = $(this),
                label = self.next(),
                label_text = label.text();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-blue',
            radioClass: 'iradio_line-blue',
            insert: '<div class="icheck_line-icon"></div>' + label_text
        });
    });
</script>
</body>

</html>