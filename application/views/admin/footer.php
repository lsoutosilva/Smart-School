<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<?php
foreach ($js as $jsFile) {
    echo '<script type="text/javascript" src="' . $jsFile . '.js"></script>' . PHP_EOL;
}
?>



<script src="<?= base_url('/assets/admin/js/footable/js/footable.js?v=2-0-1') ?>" type="text/javascript"></script>
<script src="<?= base_url('/assets/admin/js/footable/js/footable.sort.js?v=2-0-1') ?>" type="text/javascript"></script>
<script src="<?= base_url('/assets/admin/js/footable/js/footable.filter.js?v=2-0-1') ?>" type="text/javascript"></script>
<script src="<?= base_url('/assets/admin/js/footable/js/footable.paginate.js?v=2-0-1') ?>" type="text/javascript"></script>
<script src="<?= base_url('/assets/admin/js/footable/js/footable.paginate.js?v=2-0-1') ?>" type="text/javascript"></script>



</body>

</html>
