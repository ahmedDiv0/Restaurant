<?php
define("TITLE", "Menu | The name of resturant");
include('includes/header.php');
?>
<div id="menu-items">
    <h1>Our Deliciay Menu</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sunt nulla doloremque cum reiciendis magni ipsam maxime placeat id pariatur eaque, molestiae quibusdam illo vitae soluta harum, ex laudantium voluptate?</p>
    <p><em>Click any menu items to learn more about it </em></p>
    <hr>

    <ul>
        <?php
        foreach ($menuItems as $dish => $item) {
        ?>
            <li>
                <a href="dish.php?item=<?php echo $dish; ?>">
                    <?php echo $item["title"]; ?> <sup>$</sup> <?php echo $item["price"] ?>
                </a>
            </li>


        <?php } ?>
    </ul>
</div>



<?php
include('includes/footer.php');
?>