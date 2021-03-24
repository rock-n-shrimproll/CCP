CREATE TABLE client (
    client_id INT NOT NULL AUTO_INCREMENT,
    credit INT,
    discount INT,
    birthday DATE, 
    regday TIMESTAMP,
    email VARCHAR(255),
    login VARCHAR(255),
    password VARCHAR(255),
    surname VARCHAR(255),
    name VARCHAR(255),
    status TINYINT,
    PRIMARY KEY (client_id)
);

INSERT INTO client (surname, name, email, birthday, regday, login, password, status, credit, discount) VALUES ('test', 'test', 'test@test.test', '2001-01-20', '2021-03-22 17:12:03', 'test', '123', '0', '0', '0')

INSERT INTO client (surname, name, email, birthday, regday, login, password, status, credit, discount) VALUES ('new', 'new', 'new@new.new', '2002-02-20', '2021-03-22 17:12:25', 'new', '456', '0', '0', '0')