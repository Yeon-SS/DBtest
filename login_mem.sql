create table login_mem(
    id varchar(20) not null,
    pass varchar(20) not null,
    name varchar(20) not null,
    hp varchar(20) not null,
    email varchar(80),  
    primary key(id)
)engine=innoDB charset=utf8;