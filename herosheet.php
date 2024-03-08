<?php

require_once 'includes/config.php';
require_once 'includes/login_session.php';
require_once 'load_character.php';

require_login($logged_in);

$name = '';

try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $name = $_POST['name'];
        $path = $_POST['path'];
        $career = $_POST['career'];
        $cloak = $_POST['cloak'];
        $head = $_POST['head'];
        $gloves = $_POST['gloves'];
        $chest = $_POST['chest'];
        $main_hand = $_POST['main_hand'];
        $left_hand = $_POST['left_hand'];
        $talisman = $_POST['talisman'];
        $feet = $_POST['feet'];
        $left_ring = $_POST['left_ring'];
        $right_ring = $_POST['right_ring'];
        $necklace = $_POST['necklace'];
        $money_pouch = $_POST['money_pouch'];
        $speed = $_POST['speed'];
        $brawn = $_POST['brawn'];
        $magic = $_POST['magic'];
        $armor = $_POST['armor'];
        $health = $_POST['health'];
        $speed_ability = $_POST['speed_ability'];
        $combat_ability = $_POST['combat_ability'];
        $passive_ability = $_POST['passive_ability'];
        $mod_ability = $_POST['mod_ability'];
        $item1 = $_POST['item1'];
        $item2 = $_POST['item2'];
        $item3 = $_POST['item3'];
        $item4 = $_POST['item4'];
        

        if (!empty($_POST['name'])) {
            $sql_update_name = "UPDATE name SET hero_name = :name WHERE id = 1";
            $stmt_update_name = $db->prepare($sql_update_name);
            $stmt_update_name->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt_update_name->execute();
        }

        if (!empty($_POST['path'])) {
            $sql_update_path = "UPDATE name SET hero_path = :path WHERE id = 1";
            $stmt_update_path = $db->prepare($sql_update_path);
            $stmt_update_path->bindParam(':path', $path, PDO::PARAM_STR);
            $stmt_update_path->execute();
        }

        if (!empty($_POST['career'])) {
            $sql_update_career = "UPDATE name SET hero_career = :career WHERE id = 1";
            $stmt_update_career = $db->prepare($sql_update_career);
            $stmt_update_career->bindParam(':career', $career, PDO::PARAM_STR);
            $stmt_update_career->execute();
        }

////////// Update INVENTORY table
        if (!empty($_POST['cloak'])) {
            $sql_update_cloak = "UPDATE inventory SET cloak = :cloak WHERE id = 1";
            $stmt_update_cloak = $db->prepare($sql_update_cloak);
            $stmt_update_cloak->bindParam(':cloak', $cloak, PDO::PARAM_STR);
            $stmt_update_cloak->execute();
        }


        if (!empty($_POST['head'])) {
            $head = $_POST['head'];
            $sql_update_head = "UPDATE inventory SET head = :head WHERE id = 1";
            $stmt_update_head = $db->prepare($sql_update_head);
            $stmt_update_head->bindParam(':head', $head, PDO::PARAM_STR);
            $stmt_update_head->execute();
        }

        if (!empty($_POST['gloves'])) {
            $gloves = $_POST['gloves'];
            $sql_update_gloves = "UPDATE inventory SET gloves = :gloves WHERE id = 1";
            $stmt_update_gloves = $db->prepare($sql_update_gloves);
            $stmt_update_gloves->bindParam(':gloves', $gloves, PDO::PARAM_STR);
            $stmt_update_gloves->execute();
        }

        if (!empty($_POST['chest'])) {
            $chest = $_POST['chest'];
            $sql_update_chest = "UPDATE inventory SET chest = :chest WHERE id = 1";
            $stmt_update_chest = $db->prepare($sql_update_chest);
            $stmt_update_chest->bindParam(':chest', $chest, PDO::PARAM_STR);
            $stmt_update_chest->execute();
        }

        if (!empty($_POST['main_hand'])) {
            $main_hand = $_POST['main_hand'];
            $sql_update_main_hand = "UPDATE inventory SET main_hand = :main_hand WHERE id = 1";
            $stmt_update_main_hand = $db->prepare($sql_update_main_hand);
            $stmt_update_main_hand->bindParam(':main_hand', $main_hand, PDO::PARAM_STR);
            $stmt_update_main_hand->execute();
        }

        if (!empty($_POST['left_hand'])) {
            $left_hand = $_POST['left_hand'];
            $sql_update_left_hand = "UPDATE inventory SET left_hand = :left_hand WHERE id = 1";
            $stmt_update_left_hand = $db->prepare($sql_update_left_hand);
            $stmt_update_left_hand->bindParam(':left_hand', $left_hand, PDO::PARAM_STR);
            $stmt_update_left_hand->execute();
        }

        if (!empty($_POST['talisman'])) {
            $talisman = $_POST['talisman'];
            $sql_update_talisman = "UPDATE inventory SET talisman = :talisman WHERE id = 1";
            $stmt_update_talisman = $db->prepare($sql_update_talisman);
            $stmt_update_talisman->bindParam(':talisman', $talisman, PDO::PARAM_STR);
            $stmt_update_talisman->execute();
        }

        if (!empty($_POST['feet'])) {
            $feet = $_POST['feet'];
            $sql_update_feet = "UPDATE inventory SET feet = :feet WHERE id = 1";
            $stmt_update_feet = $db->prepare($sql_update_feet);
            $stmt_update_feet->bindParam(':feet', $feet, PDO::PARAM_STR);
            $stmt_update_feet->execute();
        }

        if (!empty($_POST['left_ring'])) {
            $left_ring = $_POST['left_ring'];
            $sql_update_left_ring = "UPDATE inventory SET left_ring = :left_ring WHERE id = 1";
            $stmt_update_left_ring = $db->prepare($sql_update_left_ring);
            $stmt_update_left_ring->bindParam(':left_ring', $left_ring, PDO::PARAM_STR);
            $stmt_update_left_ring->execute();
        }

        if (!empty($_POST['right_ring'])) {
            $right_ring = $_POST['right_ring'];
            $sql_update_right_ring = "UPDATE inventory SET right_ring = :right_ring WHERE id = 1";
            $stmt_update_right_ring = $db->prepare($sql_update_right_ring);
            $stmt_update_right_ring->bindParam(':right_ring', $right_ring, PDO::PARAM_STR);
            $stmt_update_right_ring->execute();
        }

        if (!empty($_POST['necklace'])) {
            $necklace = $_POST['necklace'];
            $sql_update_necklace = "UPDATE inventory SET necklace = :necklace WHERE id = 1";
            $stmt_update_necklace = $db->prepare($sql_update_necklace);
            $stmt_update_necklace->bindParam(':necklace', $necklace, PDO::PARAM_STR);
            $stmt_update_necklace->execute();
        }

        if (!empty($money_pouch)) {
            $sql_update_money_pouch = "UPDATE inventory SET money_pouch = :money_pouch WHERE id = 1";
            $stmt_update_money_pouch = $db->prepare($sql_update_money_pouch);
            $stmt_update_money_pouch->bindParam(':money_pouch', $money_pouch, PDO::PARAM_INT);
            $stmt_update_money_pouch->execute();
        }

////////// Update STATS table
        if (!empty($speed)) {
            $sql_update_speed = "UPDATE stats SET speed = :speed WHERE id = 1";
            $stmt_update_speed = $db->prepare($sql_update_speed);
            $stmt_update_speed->bindParam(':speed', $speed, PDO::PARAM_STR);
            $stmt_update_speed->execute();
            ///debugs start prints might be set to null
        }

        if (!empty($brawn)) {
            $sql_update_brawn = "UPDATE stats SET brawn = :brawn WHERE id = 1";
            $stmt_update_brawn = $db->prepare($sql_update_brawn);
            $stmt_update_brawn->bindParam(':brawn', $brawn, PDO::PARAM_STR);
            $stmt_update_brawn->execute();
        }

        if (!empty($magic)) {
            $sql_update_magic = "UPDATE stats SET magic = :magic WHERE id = 1";
            $stmt_update_magic = $db->prepare($sql_update_magic);
            $stmt_update_magic->bindParam(':magic', $magic, PDO::PARAM_STR);
            $stmt_update_magic->execute();
        }

        if (!empty($armor)) {
            $sql_update_armor = "UPDATE stats SET armor = :armor WHERE id = 1";
            $stmt_update_armor = $db->prepare($sql_update_armor);
            $stmt_update_armor->bindParam(':armor', $armor, PDO::PARAM_STR);
            $stmt_update_armor->execute();
        }

        if (!empty($health)) {
            $sql_update_health = "UPDATE stats SET health = :health WHERE id = 1";
            $stmt_update_health = $db->prepare($sql_update_health);
            $stmt_update_health->bindParam(':health', $health, PDO::PARAM_STR);
            $stmt_update_health->execute();
        }

////////// Update SPECIAL_ABILITIES table
        if (!empty($speed_ability)) {
            $sql_update_speed_ability = "UPDATE special_abilities SET speed_ability = :speed_ability WHERE id = 1";
            $stmt_update_speed_ability = $db->prepare($sql_update_speed_ability);
            $stmt_update_speed_ability->bindParam(':speed_ability', $speed_ability, PDO::PARAM_STR);
            $stmt_update_speed_ability->execute();
        }

        if (!empty($combat_ability)) {
            $sql_update_combat_ability = "UPDATE special_abilities SET combat_ability = :combat_ability WHERE id = 1";
            $stmt_update_combat_ability = $db->prepare($sql_update_combat_ability);
            $stmt_update_combat_ability->bindParam(':combat_ability', $combat_ability, PDO::PARAM_STR);
            $stmt_update_combat_ability->execute();
        }

        if (!empty($passive_ability)) {
            $sql_update_passive_ability = "UPDATE special_abilities SET passive_ability = :passive_ability WHERE id = 1";
            $stmt_update_passive_ability = $db->prepare($sql_update_passive_ability);
            $stmt_update_passive_ability->bindParam(':passive_ability', $passive_ability, PDO::PARAM_STR);
            $stmt_update_passive_ability->execute();
        }

        if (!empty($mod_ability)) {
            $sql_update_mod_ability = "UPDATE special_abilities SET mod_ability = :mod_ability WHERE id = 1";
            $stmt_update_mod_ability = $db->prepare($sql_update_mod_ability);
            $stmt_update_mod_ability->bindParam(':mod_ability', $mod_ability, PDO::PARAM_STR);
            $stmt_update_mod_ability->execute();
        }

////////// Update BACKPACK table
        if (!empty($item1)) {
            $sql_update_item_one = "UPDATE backpack SET item_one = :item1 WHERE id = 1";
            $stmt_update_item_one = $db->prepare($sql_update_item_one);
            $stmt_update_item_one->bindParam(':item1', $item1, PDO::PARAM_STR);
            $stmt_update_item_one->execute();
        }

        if (!empty($item2)) {
            $sql_update_item_two = "UPDATE backpack SET item_two = :item2 WHERE id = 1";
            $stmt_update_item_two = $db->prepare($sql_update_item_two);
            $stmt_update_item_two->bindParam(':item2', $item2, PDO::PARAM_STR);
            $stmt_update_item_two->execute();
        }

        if (!empty($item3)) {
            $sql_update_item_three = "UPDATE backpack SET item_three = :item3 WHERE id = 1";
            $stmt_update_item_three = $db->prepare($sql_update_item_three);
            $stmt_update_item_three->bindParam(':item3', $item3, PDO::PARAM_STR);
            $stmt_update_item_three->execute();
        }

        if (!empty($item4)) {
            $sql_update_item_four = "UPDATE backpack SET item_four = :item4 WHERE id = 1";
            $stmt_update_item_four = $db->prepare($sql_update_item_four);
            $stmt_update_item_four->bindParam(':item4', $item4, PDO::PARAM_STR);
            $stmt_update_item_four->execute();
        }

      }

} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="includes/myFunction.js"></script>
</head>
<body>
<form method="POST">
<?php if(isset($name) && trim($name) !== '' || isset($path) && trim($path) !== '' || isset($career) && trim($career) !== ''): ?>
<div class="home">
    <div class="hero_button">
        <table class="button">
            <tr>
                <td><button onclick="mySubmitButton()" id="submit" type="submit" value="Save Character">Save Hero</button></td>
                <td><a href="herosheetview.php" id="hero">Character Sheet</a></td>
                <td><a href="logout.php" id="logout">Log Out</a></td>
            </tr>
        </table>
    </div>
<?php endif; ?> 
    <div class="welcome">
        <?php if(empty($name) && empty($path) && empty($career)): ?>
            <div class="hero_button">
                <table class="button">
                    <tr>
                        <td><button onclick="mySubmitButton()" id="submit_not_set" type="submit" value="Save Character">Save Hero</button></td>
                        <td><a href="herosheetview.php" id="hero_not_set">Character Sheet</a></td>
                        <td><a href="logout.php" id="logout_not_set">Log Out</a></td>
                    </tr>
                </table>
            </div>
            <p class="hello">Welcome to Your Hero Sheet!<br>
            This is your central hub for updating your Hero as you embark on your epic adventure. <br>
            Once you're satisfied, don't forget to hit "Save Hero". <br>
            To view your character sheet, simply navigate to "Character Sheet". <br>
            And when you're ready to take a break, simply click "Logout". <br>
            Happy Adventuring!<br></p>
            <script>modify_button_color()</script>
        <?php endif; ?>
    </div>
<h1>Modify Your Hero</h1>
    <div class="container">
        <div class="hero_name">
            <table class="character">
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" size="50" id="name" value="<?php echo $name ?>" name="name"></td>
                    <th><label for="path">Path:</label></th>
                    <td><input type="text" size="50" id="path" name="path"> </input></td>
                    <th><label for="career">Career:</label></th>
                    <td><input type="text" size="50" id="career" name="career" ></input></td>
                </tr>
            </table>
        </div>
        <div class="hero_inv">
            <label id="inv">Inventory</label>
            <table class="inventory">
                <tr>
                    <th><label for="cloak">Cloak:</label></th>
                    <td><input type="text" size="50" id="cloak" name="cloak" ></td>
                    <th><label for="head">Head:</label></th>
                    <td><input type="text" size="50" id="head" name="head"> </td>
                </tr>
                <tr>
                    <th><label for="gloves">Gloves:</label></th>
                    <td><input type="text" size="50" id="gloves" name="gloves"></td>
                    <th><label for="chest">Chest:</label></th>
                    <td><input type="text" size="50" id="chest" name="chest" ></td>
                </tr>
                <tr>
                    <th><label for="main_hand">Main Hand:</label></th>
                    <td><input type="text" size="50" id="main_hand" name="main_hand"></td>
                    <th><label for="left_hand">Left Hand:</label></th>
                    <td><input type="text" size="50" id="left_hand" name="left_hand""></td>
                </tr>  
                    <th><label for="talisman">Talisman:</label></th>
                    <td><input type="text" size="50" id="talisman" name="talisman"></td>
                    <th><label for="feet">Feet:</label></th>
                    <td><input type="text" size="50" id="feet" name="feet"> </td>
                </tr>
                <tr>  
                    <th><label for="left_ring">Left Ring:</label></th>
                    <td><input type="text" size="50" id="left_ring" name="left_ring"></td>
                    <th><label for="right_ring">Right Ring:</label></th>
                    <td><input type="text" size="50" id="right_ring" name="right_ring"></td>
                </tr>
                <tr>
                    <th><label for="necklace">Necklace:</label></th>
                    <td><input type="text" size="50" id="necklace" name="necklace"></td>
                    <th><label for="money">Money Pouch:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="money" name="money_pouch"></td>
                </tr>
            </table>
        </div>
        <div class="hero_stats">  
            <label id="stat">Stats</label>          
            <table class="stats">
                <tr>
                    <th><label for="sp">Speed:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="speed" name="speed"></td>
                    <th><label for="br">Brawn:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="brawn" name="brawn"></td>
                    <th><label for="mg">Magic:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="magic" name="magic"></td>
                    <th><label for="ar">Armor:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="armor" name="armor"></td>
                    <th><label for="health">Health:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="health" name="health"></td>
                </tr>
            </table>
        </div>
        <div class="hero_abilities">
            <label id="special">Special Abilities</label>
            <table class="abilities">
                <tr>
                    <th><label for="speed_ability">Speed:</label></th>
                    <td><textarea rows="4" cols="40" id="speed_ability" name="speed_ability" ></textarea></td> 
                    <th><label for="combat_ability">Combat:</label></th>
                    <td><textarea rows="4" cols="40" id="combat_ability" name="combat_ability" ></textarea></td> 
                    <th><label for="passive_ability">Passive:</label></th>
                    <td><textarea rows="4" cols="40" id="passive_ability" name="passive_ability" ></textarea></td> 
                    <th><label for="mod_ability">Modifier:</label></th>
                    <td><textarea rows="4" cols="40" id="mod_ability" name="mod_ability"></textarea></td> 
                </tr>
            </table>
        </div>
        <div class="hero_backpack">
            <label id="pack">Backpack</label>
            <table class="backpack">
                <tr>
                    <th><label for="item1">Item 1:</label></th>
                    <td><input type="text" id="item1" name="item1" ></td>
                    <th><label for="item2">Item 2:</label></th>
                    <td><input type="text" id="item2" name="item2" ></td>
                    <th><label for="item3">Item 3:</label></th>
                    <td><input type="text" id="item3" name="item3" ></td>
                    <th><label for="item4">Item 4:</label></th>
                    <td><input type="text" id="item4" name="item4" ></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</form>
</body>
</html>