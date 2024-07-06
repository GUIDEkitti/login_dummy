USE 642db;

DROP TABLE IF EXISTS user_table;

CREATE TABLE `user_table` (
    `id` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
    `user_name` VARCHAR(100) NOT NULL,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `password` VARCHAR(10) NOT NULL,
    `roll` INT(1) NOT NULL,
    `permission` TINYTEXT NOT NULL,
    PRIMARY KEY (`user_name`),
    UNIQUE (`id`)
) ENGINE = MyISAM;

-- dummy
INSERT INTO
    `user_table` (
        `id`,
        `user_name`,
        `first_name`,
        `last_name`,
        `password`,
        `roll`,
        `permission`
    )
VALUES
    (
        NULL,
        'kittisak_kia',
        'kittisak',
        'kia',
        '123456',
        '1',
        '1'
    ),
    (
        NULL,
        'nat_kia',
        'supannee',
        'kittisak',
        '123456',
        '1',
        '1'
    );