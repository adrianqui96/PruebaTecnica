create database seguro;
use seguro;

create table rol(
	id int not null auto_increment primary key,
	name varchar(50) not null,
        kind varchar(50),
        tipos varchar(50),
        created_at datetime not null
);

insert into rol (name,kind,tipos,created_at) value ("Administrador","1","1",NOW());
insert into rol (name,kind,tipos,created_at) value ("Usuario","1","1",NOW());

create table users(
	id int not null auto_increment primary key,
	cedula varchar(50) not null,
	image varchar(255),
	name varchar(50) not null,
	lastname varchar(50) not null,
	username varchar(50),
	email varchar(255) not null,
	password varchar(60) not null,
	phone varchar(255),
        address varchar(255),
	status boolean not null default 0,
	rol_id int not null,
	created_at datetime not null,
        foreign key (rol_id) references rol(id)
);
INSERT INTO `users` (`id`, `cedula`, `image`, `name`, `lastname`, `username`, `email`, `password`, `phone`, `address`, `status`, `rol_id`, `created_at`) VALUES
(1, '132131', NULL, 'harol', 'batista', 'admin', 'caba@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '4546', 'fghfgh', 1, 1, '2020-11-28 00:00:00');




create table poliza(
id int not null auto_increment primary key,
name varchar(50) not null,
porcen varchar(30) not null,
price varchar(30) not null,
created_at datetime
);
INSERT INTO `poliza` (`id`, `name`, `porcen`, `price`, `created_at`) VALUES
(1, 'Robo', '50', '100', '2020-11-28 20:37:42'),
(2, 'Terremoto', '30', '500', '2020-11-28 21:18:06');


create table riesgo(
id int not null auto_increment primary key,
name varchar(100) not null,
sueldo varchar(100) not null,
poliza_id int not null,
status boolean not null default 0,
 foreign key (poliza_id) references poliza(id),
created_at datetime not null
);

INSERT INTO `riesgo` (`id`, `name`, `sueldo`, `poliza_id`, `status`, `created_at`) VALUES
(1, 'Media', '', 1, 1, '2020-11-28 20:38:01'),
(2, 'Alto', '', 2, 1, '2020-11-28 21:18:37');



create table cliente(
	id int not null auto_increment primary key,
	cedula varchar(50) not null,
	image varchar(255),
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(255) not null,
	phone varchar(255),
	address varchar(255),
	status boolean not null default 0,
users_id int not null,
    created_at datetime not null,
        foreign key (users_id) references users(id)  
);

INSERT INTO `cliente` (`id`, `cedula`, `image`, `name`, `lastname`, `email`, `phone`, `address`, `status`, `users_id`, `created_at`) VALUES
(1, '321313', '', 'adrian', 'zambrano', 'luz@gmil.com', '(317) 309-5475', 'san jose', 1, 1, '2020-11-28 20:36:55'),
(2, '201466', '', 'luisa', 'mejia', 'caballero_1114@live.com', '6546465', 'san jose', 1, 1, '2020-11-28 21:19:43');

create table clientepoliza(
        id int not null auto_increment primary key,
	cliente_id int not null,
	riesgo_id int not null,
	foreign key (cliente_id) references cliente(id),
	foreign key (riesgo_id) references riesgo(id)
);
INSERT INTO `clientepoliza` (`id`, `cliente_id`, `riesgo_id`) VALUES
(1, 1, 1),
(2, 2, 2);
