<?php
define("TITLE", "Team | The name of resturant");

include('includes/header.php');
?>
<div id="team-members" class="cf">
    <h1>out team in the resturant</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, exercitationem quas perferendis inventore asperiores dolorum non labore pariatur laborum repellendus sint fugiat hic. Eius nam quam, itaque velit eos commodi!</p>

    <hr>

    <div class="big-member">

        <?php
        foreach ($teamMembers as $member) {

        ?>

            <div class="member">
                <img id="photo" style="width: 200px;" src="img/<?php echo $member['img']; ?>.jpg" alt="<?php echo $member['name']; ?>">
                <h2><?php echo $member['name']; ?></h2>
                <p><?php echo $member['bio']; ?></p>
            </div>
        <?php
        }
        ?>

    </div>


</div>

<?php
include('includes/footer.php');
?>