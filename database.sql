create database myDB;
use myDB;


CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `newpassword` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ); ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `password`, `newpassword`) VALUES
(1, 'admin', 'admin', 'admin');
