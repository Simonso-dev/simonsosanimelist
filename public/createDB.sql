CREATE TABLE IF NOT EXISTS Users (
    UserId      INT NOT NULL UNIQUE AUTO_INCREMENT,
    Username    VARCHAR(20) NOT NULL UNIQUE,
    Password    VARCHAR(255),
    is_admin    BOOLEAN,
    PRIMARY KEY (UserId)
);