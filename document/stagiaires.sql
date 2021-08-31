-- Base de données: 'Stagiaires'
--
create database if not exists stagiaires default character set utf8 collate utf8_general_ci;
use stagiaires;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table stagiaires
drop table if exists stagiaires;
create table stagiaires (
	sta_id int not null auto_increment primary key,
	sta_nom varchar(500),
	sta_prenom varchar(500),
	sta_adresse varchar (500),
	sta_ville varchar (500),
    sta_codepostal int not null,
	sta_classe varchar (500),	
    sta_promotion int	
)engine=innodb;

-- table promotion
drop table if exists promotion;
create table promotion (
	pro_id int not null auto_increment primary key,
	pro_label varchar(50)
)engine=innodb;

set foreign_key_checks =1;

-- contraintes
alter table stagiaires add constraint cs1 foreign key (sta_promotion) references promotion (pro_id);

-- Jeu de données promotion   
insert into promotion values (null,'Preparatoire');
insert into promotion values (null,'Tertiaire');
insert into promotion values (null,'IFMK');