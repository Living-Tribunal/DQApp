DROP TABLE IF EXISTS name;
DROP TABLE IF EXISTS inventory;
DROP TABLE IF EXISTS stats;
DROP TABLE IF EXISTS special_abilities;
DROP TABLE IF EXISTS backpack;

CREATE TABLE name(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  hero_name TEXT NOT NULL,
  hero_path TEXT NOT NULL,
  hero_career TEXT NOT NULL
);

CREATE TABLE inventory(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  cloak TEXT NULL,
  head TEXT NULL,
  gloves TEXT NULL,
  main_hand TEXT NULL,
  chest TEXT NULL,
  left_hand TEXT NULL,
  talisman TEXT NULL,
  feet TEXT NULL,
  money_pouch INTEGER NULL,
  necklace TEXT NULL,
  left_ring TEXT NULL,
  right_ring TEXT NULL
);

CREATE TABLE stats(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  speed INTEGER NULL,
  brawn INTEGER NULL,
  magic INTEGER NULL,
  armor INTEGER NULL,
  health INTEGER NULL
);

CREATE TABLE special_abilities(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  speed TEXT NULL,
  combat TEXT NULL,
  passive TEXT NULL,
  modifier TEXT NULL
);

CREATE TABLE backpack(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  item_one TEXT NULL,
  item_two TEXT NULL,
  item_three TEXT NULL,
  item_four TEXT NULL
);




