function myResetButtonInput(){ // asks user if the wanna reset hero
  if (confirm('Are you sure you want to reset your character?')) {
    var inputs = document.getElementsByTagName("input");
    var textAreas = document.getElementsByTagName("textarea");
    for(var i = 0; i<inputs.length; i++){
      inputs[i].value = "";
    }
    for(var i = 0; i<textAreas.length; i++){
      textAreas[i].value = "";
    }
  }
}

function mySubmitButton(){
  alert("Your character has entered the Halls of Rememberance.")
}

function stat_numbers() {
  let speed = document.getElementById("sp");
  let speed_input = parseInt(speed.value);

  let brawn = document.getElementById("br");
  let brawn_input = parseInt(brawn.value);

  let magic = document.getElementById("mg");
  let magic_input = parseInt(magic.value);

  let armor = document.getElementById("ar");
  let armor_input = parseInt(armor.value);

  let health = document.getElementById("health");
  let health_input = parseInt(health.value);

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
  }
