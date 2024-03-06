<?php

require_once 'includes/config.php';
require_once 'includes/login_session.php';

require_login($logged_in);

$db = new PDO($dsn);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql_fetch_attribute = "SELECT * FROM name WHERE id = 1";
$stmt = $db->query($sql_fetch_attribute);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$name = $row['hero_name'];
$path = $row['hero_path'];
$career = $row['hero_career'];

$sql_fetch_attribute = "SELECT * FROM inventory WHERE id = 1";
$stmt = $db->query($sql_fetch_attribute);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$cloak = $row['cloak'];
$head = $row['head'];
$gloves = $row['gloves'];
$main_hand = $row['main_hand'];
$chest = $row['chest'];
$left_hand = $row['left_hand'];
$talisman = $row['talisman'];
$feet = $row['feet'];
$money_pouch = $row['money_pouch'];
$necklace = $row['necklace'];
$left_ring = $row['left_ring'];
$right_ring = $row['right_ring'];

$sql_fetch_attribute = "SELECT * FROM stats WHERE id = 1";
$stmt = $db->query($sql_fetch_attribute);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$speed = $row['speed'];
$brawn = $row['brawn'];
$magic = $row['magic'];
$armor = $row['armor'];
$health = $row['health'];

$sql_fetch_attribute = "SELECT * FROM special_abilities WHERE id = 1";
$stmt = $db->query($sql_fetch_attribute);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$combat_ability = $row['combat_ability'];
$passive_ability = $row['passive_ability'];
$modifier_ability = $row['mod_ability'];
$speed_ability = $row['speed_ability'];

$sql_fetch_attribute = "SELECT * FROM backpack WHERE id = 1";
$stmt = $db->query($sql_fetch_attribute);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$item_one = $row['item_one'];
$item_two = $row['item_two'];
$item_three = $row['item_three'];
$item_four = $row['item_four'];

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/herostyle.css">
<script src="includes/myFunction.js"></script>
</head>
<body id="herosheetview">
    <div class="home">
        <a href="logout.php" id="logout">Log Out</a>
        <a href="herosheet.php" id="home">Modify Hero</a>
    </div>
    <div class="container">
    <h1>Destiny Quest Hero Sheet</h1>
    <label id="character">Character</label>
    <div class="hero_name">
        <table class="character">        
            <tr>
                <th>Name:</th>
                <td><?php echo $name ?></td>
                <th>Path:</th>
                <td><?php echo $path ?></td>
                <th>Career:</th>
                <td><?php echo $career ?></td>
            </tr>
        </table>
    </div>
    <label id="character">Inventory</label>
    <div class="hero_inv">
        <table class="inventory">
            <tr>
                <th>Cloak:</th>
                <td><?php echo $cloak; ?></td>
                <th>Head:</th>
                <td><?php echo $head; ?></td>
                <th>Gloves:</th>
                <td><?php echo $gloves; ?></td>
                <th>Main Hand:</th>
                <td><?php echo $main_hand; ?></td>
            </tr>
            <tr>   
                <th>Chest:</th>
                <td><?php echo $chest; ?></td>
                <th>Left Hand:</th>
                <td><?php echo $left_hand; ?></td>
                <th>Talisman:</th>
                <td><?php echo $talisman; ?></td>
                <th>Feet:</th>
                <td><?php echo $feet; ?></td>
            </tr>
            <tr>
                <th>Money Pouch:</th>
                <td><?php echo $money_pouch; ?></td>
                <th>Necklace:</th>
                <td><?php echo $necklace; ?></td>
                <th>Left Ring:</th>
                <td><?php echo $left_ring; ?></td>
                <th>Right Ring:</th>
                <td><?php echo $right_ring; ?></td>
            </tr>
        </table>
    </div>
    <label id="character">Stats</label>
    <div class="hero_stats">
        <table class="stats">
            <tr>
                <th>Speed:</th>
                <td><?php echo $speed; ?></td>
                <th>Brawn:</th>
                <td><?php echo $brawn; ?></td>
            </tr>
            <tr>
                <th>Magic:</th>
                <td><?php echo $magic; ?></td>
                <th>Armor:</th>
                <td><?php echo $armor; ?></td>
                <th>Health:</th>
                <td><?php echo $health; ?></td>
            </tr>
        </table>
    </div>
    <label id="character">Modifiers</label>
    <div class="hero_abilities">
        <table class="modifiers">
            <tr>
                <th>Combat Ability:</th>
                <td><?php echo $combat_ability; ?></td>
                <th>Passive Ability:</th>
                <td><?php echo $passive_ability; ?></td>
            </tr>
            <tr>
                <th>Modifier Ability:</th>
                <td><?php echo $modifier_ability; ?></td>
                <th>Speed Ability:</th>
                <td><?php echo $speed_ability; ?></td>
            </tr>
        </table>
    </div>
    <label id="backpack">Backpack</label>
    <div class="hero_backpack">
        <table class="backpack">
            <tr>
                <th>Item One:</th>
                <td><?php echo $item_one; ?></td>
                <th>Item Two:</th>
                <td><?php echo $item_two; ?></td>
            </tr>
            <tr>
                <th>Item Three:</th>
                <td><?php echo $item_three; ?></td>
                <th>Item Four:</th>
                <td><?php echo $item_four; ?></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>