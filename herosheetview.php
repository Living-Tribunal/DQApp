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
        <div class="hero_name">
            <table class="character">   
                <tr>
                    <label id="character">Character</label>
                    <th><img src="images/name.png" alt="Name Icon"></th>
                    <th><img src="images/path.png" alt="Path Icon"></th>
                    <th><img src="images/career.png" alt="Career Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $path ?></td>
                    <td><?php echo $career ?></td>
                </tr>
            </table>
        </div>
        <div class="hero_inv">
            <table class="inventory">
                <tr>
                    <label id="inventory">Inventory</label>
                    <th><img src="images/cloak.png" alt="Cloak Icon"></th>
                    <th><img src="images/helmet.png" alt="Head Icon"></th>
                    <th><img src="images/gloves.png" alt="Gloves Icon"></th>
                    <th><img src="images/chest.png" alt="Chest Icon"></th>
                </tr>
                <tr>   
                    <td><?php echo $cloak; ?></td>
                    <td><?php echo $head; ?></td>
                    <td><?php echo $gloves; ?></td>
                    <td><?php echo $chest; ?></td>
                </tr>
                <tr>
                    <th><img src="images/sword.png" alt="Sword Icon"></th>
                    <th><img src="images/shield.png" alt="Shield Icon"></th>
                    <th><img src="images/talisman.png" alt="Talsiman Icon"></th>
                    <th><img src="images/boot.png" alt="Boot Icon"></th>
                </tr>
                <tr>    
                    <td><?php echo $main_hand; ?></td>
                    <td><?php echo $left_hand; ?></td>
                    <td><?php echo $talisman; ?></td>
                    <td><?php echo $feet; ?></td>
                </tr>
                <tr>
                    <th><img src="images/pouch.png" alt="Pouch Icon"></th>
                    <th><img src="images/necklace.png" alt="Necklace Icon"></th>
                    <th><img src="images/ring.png" alt="Right Ring Icon"></th>
                    <th><img src="images/ring.png" alt="Left Ring Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $money_pouch; ?></td>
                    <td><?php echo $necklace; ?></td>
                    <td><?php echo $left_ring; ?></td>
                    <td><?php echo $right_ring; ?></td>
                </tr>
            </table>
        </div>
        <div class="hero_stats">
            <table class="stats">
                <tr>
                    <label id="stats">Stats</label>
                    <th><img src="images/speed.png" alt="Speed Icon"></th>
                    <th><img src="images/brawn.png" alt="Brawn Icon"></th>
                    <th><img src="images/magic.png" alt="Magic Icon"></th>
                    <th><img src="images/armor.png" alt="Armor Icon"></th>
                    <th><img src="images/health.png" alt="Health Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $speed; ?></td>
                    <td><?php echo $brawn; ?></td>
                    <td><?php echo $magic; ?></td>
                    <td><?php echo $armor; ?></td>
                    <td><?php echo $health; ?></td>
                </tr>
            </table>
        </div>
        <div class="hero_abilities">
            <table class="modifiers">
                <tr>
                    <label id="mod">Modifiers</label>
                    <th><img src="images/commod.png" alt="Combat Mod Icon"></th>
                    <th><img src="images/pmod.png" alt="Passive Mod Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $combat_ability; ?></td>
                    <td><?php echo $passive_ability; ?></td>
                </tr>
                <tr>
                    <th><img src="images/mod.png" alt="Mod Icon"></th>
                    <th><img src="images/spdmod.png" alt="Speed Mod Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $modifier_ability; ?></td>
                    <td><?php echo $speed_ability; ?></td>
                </tr>
            </table>
        </div>
        <div class="hero_backpack">
            <table class="backpack">
                <tr>
                    <label id="backpack">Backpack</label>
                    <th><img src="images/backpack.png" alt="backpack Icon"></th>
                    <th><img src="images/backpack.png" alt="backpack Icon"></th>
                    <th><img src="images/backpack.png" alt="backpack Icon"></th>
                    <th><img src="images/backpack.png" alt="backpack Icon"></th>
                </tr>
                <tr>
                    <td><?php echo $item_one; ?></td>
                    <td><?php echo $item_two; ?></td>
                    <td><?php echo $item_three; ?></td>
                    <td><?php echo $item_four; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>