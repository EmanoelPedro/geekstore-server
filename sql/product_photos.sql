CREATE TABLE product_photos (
id BIGINT PRIMARY KEY,
product_id BIGINT NOT NULL,
photo_name varchar(255) NOT NULL UNIQUE,
photo_order int(3) NOT NULL,
created_at TIMESTAMP,
updated_at TIMESTAMP,
deleted_at TIMESTAMP,
FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
);