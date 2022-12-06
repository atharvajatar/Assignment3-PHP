CREATE TABLE members (
    id int(30) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    bio varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;