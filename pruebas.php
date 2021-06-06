<?php
require_once("part/head.php");
require_once("part/header.php");
?>

<h1>hola mundo</h1>
<div>
    <div class="btn-group w-100 mb-2">
        <a class="btn btn-info" href="javascript:void(0)" data-filter="all"> All items </a>
        <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
        <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
        <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
        <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
    </div>
</div>

<?php
require_once('part/footer.php');
require_once('part/java.php');
?>
</body>