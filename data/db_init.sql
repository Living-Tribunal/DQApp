DROP TABLE IF EXISTS name;
DROP TABLE IF EXISTS inventory;
DROP TABLE IF EXISTS stats;
DROP TABLE IF EXISTS special_abilities;
DROP TABLE IF EXISTS backpack;

CREATE TABLE IF NOT EXISTS name(
  id INTEGER PRIMARY KEY CHECK (id = 1),
  hero_name TEXT NULL,
  hero_path TEXT NULL,
  hero_career TEXT NULL
);

CREATE TABLE IF NOT EXISTS inventory(
  id INTEGER PRIMARY KEY CHECK (id = 1),
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

CREATE TABLE IF NOT EXISTS stats(
  id INTEGER PRIMARY KEY CHECK (id = 1),
  speed INTEGER NULL,
  brawn INTEGER NULL,
  magic INTEGER NULL,
  armor INTEGER NULL,
  health INTEGER NULL
);

CREATE TABLE IF NOT EXISTS special_abilities(
  id INTEGER PRIMARY KEY CHECK (id = 1),
  speed_ability TEXT NULL,
  combat_ability TEXT NULL,
  passive_ability TEXT NULL,
  mod_ability TEXT NULL
);

CREATE TABLE IF NOT EXISTS backpack(
  id INTEGER PRIMARY KEY CHECK (id = 1),
  item_one TEXT NULL,
  item_two TEXT NULL,
  item_three TEXT NULL,
  item_four TEXT NULL
);

INSERT INTO name DEFAULT VALUES;
INSERT INTO inventory DEFAULT VALUES;
INSERT INTO stats DEFAULT VALUES;
INSERT INTO special_abilities DEFAULT VALUES;
INSERT INTO backpack DEFAULT VALUES;