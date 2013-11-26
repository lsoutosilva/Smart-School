<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<?php
foreach ($js as $jsFile) {
    echo '<script type="text/javascript" src="' . $jsFile . '.js"></script>' . PHP_EOL;
}
?>

</body>

</html>
