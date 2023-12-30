<?php
define("TITLE", "Menu | The name of resturant");
include('includes/header.php');

function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    $dish = $menuItems[$menuItem];
}


//calc the suggeted tip

function suggestedTip($price, $tip)
{
    $totalTip = $price * $tip;
}


?>
<hr>

<div id="dish">
    <h1>
        <?php echo $dish['title']; ?>
        <span class="price"><sup>$</sup>
            <?php echo $dish['price']; ?>
        </span>
    </h1>
    <p><?php echo $dish['blurb']; ?></p>

    <br>

    <p><strong>Suggested beveraye : <?php echo $dish['drink'] ?></strong></p>
    <p><em>Suggested Tip : <sup>$</sup> <?php suggestedTip($dish['price'], 0.20); ?> 5.5</em></p>

</div>
<hr>
<a href="menu.php" class="button previous">&laquo; back to menu</a>


<?php
include('includes/footer.php');
?>