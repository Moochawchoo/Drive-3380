CREATE TABLE member_loc(
    `userid` char(23) NOT NULL,
    `lat` FLOAT(10,6) NOT NULL,
    `lng` FLOAT(10,6) NOT NULL,
    FOREIGN KEY (userid) REFERENCES members(id)
);