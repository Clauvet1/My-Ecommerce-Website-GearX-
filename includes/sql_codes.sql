CREATE TABLE Products(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(20) not null, 
    price varchar(10) not null,
    quantity varchar(10) not null,
    description varchar(1000) not null,
    img blob not null
);

CREATE TABLE customeraddress(
    address_id int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    first_name varchar(20) not null,
    last_name varchar(20) not null,
	country varchar(20) NOT NULL,
    company_name varchar(20) NOT null,
    c_address varchar(20) NOT NULL,
    other_address varchar(20),
    town varchar(20) NOT NULL,
	post_code varchar(60) NOT NULL,
    phone int(20) not null,
    email varchar(20) not NULL
);

CREATE TABLE users(
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	first_name varchar(60) NOT NULL,
    last_name varchar(60) NOT NULL,
    email varchar(60) NOT NULL,
    userName varchar(60) NOT NULL,
	user_password varchar(60) NOT NULL
);

INSERT INTO `products` (`id`, `product_name`, `price`, `quantity`, `description`, `img`) VALUES (NULL, 'Hammer Drill', '$320', '100', 'Good for drilling planks and walls with accuracy and it minimizes the amount of damage done.', 