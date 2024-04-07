create database opi ;

use opi;

create Table `users`(
    `id`int(11)not null auto_increment, 
    `Frist` varchar (100) not null,
    `Last`varchar (100)not null,
   primary key(`id`)
);

