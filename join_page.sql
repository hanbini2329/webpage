create table join_page(
    id varchar(15) not null,
    pwd1 varchar(15) not null,
    email varchar(80),
    name varchar(10) not null,
    birth varchar(8) not null,
    hp varchar(20) not null,
    addr varchar(80) not null,   
    primary key (id)
)engine=InnoDB charset=utf8;