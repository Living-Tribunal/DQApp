function mySubmitButton(){
  alert("Your character has entered the Halls of Rememberance.")
}

function stat_numbers() {
  let speed = document.getElementById("speed");
  let speed_input = parseInt(speed.value);

  let brawn = document.getElementById("brawn");
  let brawn_input = parseInt(brawn.value);

  let magic = document.getElementById("magic");
  let magic_input = parseInt(magic.value);

  let armor = document.getElementById("armor");
  let armor_input = parseInt(armor.value);

  let health = document.getElementById("health");
  let health_input = parseInt(health.value);

    console.log("Executing stat_numbers()");

  let money = document.getElementById("money");
  console.log("Money input value:", money.value);
  let money_input = parseInt(money.value);

    if (speed_input < 0) {
      speed_input = 0;
    } else if (speed_input > 99) {
      speed_input = 99;
    }
    speed.value = speed_input;

    if (brawn_input < 0) {
      brawn_input = 0;
    } else if (brawn_input > 99) {
      brawn_input = 99;
    }
    brawn.value = brawn_input;
  
    if (magic_input < 0) {
      magic_input = 0;
    } else if (magic_input > 99) {
      magic_input = 99;
    }
    magic.value = magic_input;

    if (armor_input < 0){
      armor_input = 0;
    } else if (armor_input > 99){
      armor_input = 99;
    }
    armor.value = armor_input;

    if (health_input < 0){
      health_input = 0;
    } else if (health_input > 99){
      health_input = 99;
    }
    health.value = health_input;

    if (money_input < 0){
      money_input = 0;
    } else if (money_input > 99){
      money_input = 99;
    }
    money.value = money_input;
  }
