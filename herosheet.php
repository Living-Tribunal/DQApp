<?php

require_once 'includes/config.php';
require_once 'includes/login_session.php';

require_login($logged_in);

define('DB_DRIVER', 'sqlite');
define('DB_PATH', 'data/character.db');

$dsn = DB_DRIVER . ':' . DB_PATH;

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

        $check_sql_name =  
        "SELECT COUNT(*) FROM name WHERE 
            hero_name = :name AND 
            hero_path = :path AND 
            hero_career = :career";
        
        $stmt_check_name = $db->prepare($check_sql_name);
        $stmt_check_name->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt_check_name->bindParam(':path', $path, PDO::PARAM_STR);
        $stmt_check_name->bindParam(':career', $career, PDO::PARAM_STR);
        $stmt_check_name->execute();
        $name_count = $stmt_check_name->fetchColumn();

        $check_sql_inventory = 
        "SELECT COUNT(*) FROM inventory WHERE 
        cloak = :cloak AND 
        head = :head AND 
        gloves = :gloves AND
        main_hand = :main_hand AND 
        chest = :chest AND 
        left_hand = :left_hand AND
        talisman = :talisman AND 
        feet = :feet AND 
        money_pouch = :money_pouch AND
        necklace = :necklace AND 
        left_ring = :left_ring AND 
        right_ring = :right_ring" AND";



        if ($name_count == 0) {
        $sql_name = 
        "INSERT INTO name
            (hero_name, hero_path, hero_career) 
        VALUES 
            (:name, :path, :career)";

        $stmt_name = $db->prepare($sql_name);
        $stmt_name->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt_name->bindParam(':path', $path, PDO::PARAM_STR);
        $stmt_name->bindParam(':career', $career, PDO::PARAM_STR);
        $stmt_name->execute();

        $sql_inventory = 
        "INSERT INTO inventory
            (cloak, head, gloves, chest, main_hand, left_hand, talisman, feet, left_ring, right_ring, necklace, money_pouch) 
        VALUES
            (:cloak, :head, :gloves, :chest, :main_hand, :left_hand, :talisman, :feet, :left_ring, :right_ring, :necklace, :money_pouch)";

        $stmt_inventory = $db->prepare($sql_inventory);

        $stmt_inventory->bindParam(':cloak', $cloak, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':head', $head, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':gloves', $gloves, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':chest', $chest, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':main_hand', $main_hand, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':left_hand', $left_hand, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':talisman', $talisman, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':feet', $feet, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':left_ring', $left_ring, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':right_ring', $right_ring, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':necklace', $necklace, PDO::PARAM_STR);
        $stmt_inventory->bindParam(':money_pouch', $money_pouch, PDO::PARAM_STR);
        $stmt_inventory->execute();

        $sql_stats = 
        "INSERT INTO stats
            (speed, brawn, magic, armor, health) 
        VALUES
            (:speed, :brawn, :magic, :armor, :health)";
        $stmt_stats = $db->prepare($sql_stats);

        $stmt_stats->bindParam(':speed', $speed, PDO::PARAM_INT);
        $stmt_stats->bindParam(':brawn', $brawn, PDO::PARAM_INT);
        $stmt_stats->bindParam(':magic', $magic, PDO::PARAM_INT);
        $stmt_stats->bindParam(':armor', $armor, PDO::PARAM_INT);
        $stmt_stats->bindParam(':health', $health, PDO::PARAM_INT);
        $stmt_stats->execute();

        $sql_special_abilities = 
        "INSERT INTO special_abilities
            (speed, combat, passive, modifier) 
        VALUES
            (:speed_ability, :combat_ability, :passive_ability, :mod_ability)";

        $stmt_special_abilities = $db->prepare($sql_special_abilities);

        $stmt_special_abilities->bindParam(':speed_ability', $speed_ability, PDO::PARAM_STR);
        $stmt_special_abilities->bindParam(':combat_ability', $combat_ability, PDO::PARAM_STR);
        $stmt_special_abilities->bindParam(':passive_ability', $passive_ability, PDO::PARAM_STR);
        $stmt_special_abilities->bindParam(':mod_ability', $mod_ability, PDO::PARAM_STR);
        $stmt_special_abilities->execute();

        $sql_backpack = 
        "INSERT INTO backpack
            (item_one, item_two, item_three, item_four) 
        VALUES
            (:item1, :item2, :item3, :item4)";

        $stmt_backpack = $db->prepare($sql_backpack);

        $stmt_backpack->bindParam(':item1', $item1, PDO::PARAM_STR);
        $stmt_backpack->bindParam(':item2', $item2, PDO::PARAM_STR);
        $stmt_backpack->bindParam(':item3', $item3, PDO::PARAM_STR);
        $stmt_backpack->bindParam(':item4', $item4, PDO::PARAM_STR);
        $stmt_backpack->execute();
    }
}
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="includes/myFunction.js"></script>

</head>
<body>
    <div class="home">
        <a href="logout.php" id="logout">Log Out</a>
    </div>
    <h1>Destiny Quest Hero Sheet</h1>
<form method="POST">
    <div class="container">
        <div class="hero_name">
            <table class="character">
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" size="50" id="name" name="name"></td>
                    <th><label for="path">Path:</label></th>
                    <td><input type="text" size="50" id="path" name="path"></input></td>
                    <th><label for="career">Career:</label></th>
                    <td><input type="text" size="50" id="career" name="career"></input></td>
                </tr>
            </table>
        </div>
        <div class="hero_inv">
            <label id="inv">Inventory</label>
            <table class="inventory">
                <tr>
                    <th><label for="cloak">Cloak:</label></th>
                    <td><input type="text" size="50" id="cloak" name="cloak"></td>
                    <th><label for="head">Head:</label></th>
                    <td><input type="text" size="50" id="head" name="head"></td>
                </tr>
                <tr>
                    <th><label for="gloves">Gloves:</label></th>
                    <td><input type="text" size="50" id="gloves" name="gloves"></td>
                    <th><label for="chest">Chest:</label></th>
                    <td><input type="text" size="50" id="chest" name="chest"></td>
                </tr>
                <tr>
                    <th><label for="main_hand">Main Hand:</label></th>
                    <td><input type="text" size="50" id="main_hand" name="main_hand"></td>
                    <th><label for="left_hand">Left Hand:</label></th>
                    <td><input type="text" size="50" id="left_hand" name="left_hand"></td>
                </tr>  
                    <th><label for="talisman">Talisman:</label></th>
                    <td><input type="text" size="50" id="talisman" name="talisman"></td>
                    <th><label for="feet">Feet:</label></th>
                    <td><input type="text" size="50" id="feet" name="feet"></td>
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
                    <th><label for="money_pouch">Money Pouch:</label></th>
                    <td><input type="number" size="50" id="money_pouch" name="money_pouch"></td>
                </tr>
            </table>
        </div>
        <div class="hero_stats">  
            <label id="stat">Stats</label>          
            <table class="stats">
                <tr>
                    <th><label for="sp">Speed:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="sp" name="speed"></td>
                    <th><label for="br">Brawn:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="br" name="brawn"></td>
                    <th><label for="mg">Magic:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="mg" name="magic"></td>
                    <th><label for="ar">Armor:</label></th>
                    <td><input oninput="stat_numbers()" type="number" id="ar" name="armor"></td>
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
                    <td><textarea rows="4" cols="40" id="speed_ability" name="speed_ability"></textarea></td> 
                    <th><label for="combat_ability">Combat:</label></th>
                    <td><textarea rows="4" cols="40" id="combat_ability" name="combat_ability"></textarea></td> 
                    <th><label for="passive_ability">Passive:</label></th>
                    <td><textarea rows="4" cols="40" id="passive_ability" name="passive_ability"></textarea></td> 
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
                    <td><input type="text" id="item1" name="item1"></td>
                    <th><label for="item2">Item 2:</label></th>
                    <td><input type="text" id="item2" name="item2"></td>
                    <th><label for="item3">Item 3:</label></th>
                    <td><input type="text" id="item3" name="item3"></td>
                    <th><label for="item4">Item 4:</label></th>
                    <td><input type="text" id="item4" name="item4"></td>
                </tr>
            </table>
        </div>
        <div class="hero_button">
            <table class="button">
                <tr>
                    <td><button onclick="mySubmitButton()" id="submit" type="submit" value="Save Character">Save Hero</button></td>
                    <td><button onclick="" id="load" type="submit" value="Load Character">Load Hero</button></td>
                    <td><button onclick="myResetButtonInput()" id="reset" type="reset" value="Reset Character">Reset Hero Sheet</button></td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>