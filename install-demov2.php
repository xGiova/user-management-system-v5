<?php
require './__autoload.php';
use sarassoroberto\usm\config\local\AppConfig;
use sarassoroberto\usm\model\DB;

$conn = DB::serverConnectionWithoutDatabase();
$dbname = AppConfig::DB_NAME;

$sql = "DROP DATABASE if exists $dbname;
        CREATE database if not exists $dbname; 
        use $dbname;
        CREATE table if not exists User (
            userId int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            firstName varchar(255) NOT NULL,
            lastName varchar(255)  NOT NULL,
            email varchar(255) NOT NULL,
            password varchar(50) NOT NULL,
            birthday DATE,
            UNIQUE (email)
        );
        CREATE table if not exists interesse (
            interesseId int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome varchar(255) NOT NULL
        ); 
        
        CREATE table if not exists user_interesse (
            userId int(10) NOT NULL,
            interesseId int(10) NOT NULL,
            FOREIGN KEY (userId) REFERENCES User(userId),
            FOREIGN KEY (interesseId) REFERENCES interesse(interesseId),
            CONSTRAINT UC_user_interesse UNIQUE (userId,interesseId)
        );";

$conn->exec($sql);

$sqlToInsertUserQuery = "INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (1, 'Adamo', 'ROSSI', 'adamo.rossi@email.com', '2002-06-12', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (2, 'Mario', 'FERRARI', 'mario.ferrari@email.com', '2001-06-12', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (3, 'Luigi', 'RUSSO', 'luigi.russo@email.com', '2007-08-06', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (4, 'Achille', 'BIANCHI', 'achille.bianchi2@email.com', '2006-03-14', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (5, 'Adriano', 'ROMANO', 'adriano.romano2@email.com', '2005-01-16', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (6, 'Gianni', 'ROSSI', 'gianni.rossi@email.com', '2005-04-22', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (7, 'Giuliano', 'FERRARI', 'giuliano.ferrari@email.com', '2007-07-16', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (8, 'Giusto', 'RUSSO', 'giusto.russo@email.com', '2001-03-28', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (9, 'Livio', 'BIANCHI', 'livio.bianchi@email.com', '2003-01-19', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (10, 'Paolo', 'ROMANO', 'paolo.romano@email.com', '2001-09-28', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (11, 'Onorato', 'ROSSI', 'onorato.rossi@email.com', '2005-06-29', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (12, 'Silvio', 'FERRARI', 'silvio.ferrari@email.com', '2005-04-11', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (13, 'Tancredi', 'RUSSO', 'tancredi.russo@email.com', '2000-07-30', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (14, 'Valter', 'BIANCHI', 'valter.bianchi@email.com', '2000-06-10', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (15, 'Zeno', 'ROMANO', 'zeno.romano@email.com', '2001-07-21', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (16, 'Adamo', 'ROSSI', 'adamo.rossi2@email.com', '2007-07-18', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (17, 'Mario', 'FERRARI', 'mario.ferrari2@email.com', '2000-08-15', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (18, 'Luigi', 'RUSSO', 'luigi.russo2@email.com', '2003-10-15', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (19, 'Achille', 'BIANCHI', 'achille.bianchi@email.com', '2000-05-08', '595de35024027486d7aef6a8585f6982');
                            INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (20, 'Adriano', 'ROMANO', 'adriano.romano@email.com', '2007-04-23', '595de35024027486d7aef6a8585f6982'); 
                            INSERT INTO interesse (interesseId, nome) VALUES (1, 'Sport');
                            INSERT INTO interesse (interesseId, nome) VALUES (2, 'Automobili');
                            INSERT INTO interesse (interesseId, nome) VALUES (3, 'Musica');
                            INSERT INTO interesse (interesseId, nome) VALUES (4, 'Scacchi');
                            INSERT INTO interesse (interesseId, nome) VALUES (5, 'Droga');";

$conn->exec($sqlToInsertUserQuery);