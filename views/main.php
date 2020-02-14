<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 15:21
 */
?>

<div id="container">

    <div id="display" style="height:350px; overflow:auto;">
        <ul>
            <?php
            foreach(array_reverse($personnage->getActions()) as $action)
            {
                ?>
                <li><?= $action ?></li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div id="controls">
        <form method="post" class="form" id="formBtn">
            <div>
                <button name="move" value="top">UP</button>
                <button name="move" value="left">LEFT</button>
                <button name="move" value="right">RIGHT</button>
                <button name="move" value="bottom">DOWN</button>
                <!--<input type="submit" value="Envoyer">-->

                <select name="action">
                    <option value="" selected></option>
                    <option value="attack">Attaquer</option>
                </select>

            </div>
        </form>
    </div>

</div>