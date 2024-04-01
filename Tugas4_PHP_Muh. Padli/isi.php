<div class="" >
    <?php
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    if (!empty($hal)) {
        include_once $menu_bawah[$hal];
    } else {
        $hal = 'home';
        include_once "home.php";
    }
    ?>
</div>
