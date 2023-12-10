CREATE TABLE codestore.products (
	id BIGINT PRIMARY KEY auto_increment NOT NULL,
	name varchar(255) NOT NULL,
	price DECIMAL(15,2) NOT NULL
	slug varchar(255) NOT NULL,
	created_at TIMESTAMP,
	updated_at TIMESTAMP
)