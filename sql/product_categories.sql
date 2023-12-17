CREATE TABLE product_categories (
id BIGINT PRIMARY KEY,
product_id BIGINT NOT NULL,
category_id BIGINT NOT NULL,
created_at TIMESTAMP,
updated_at TIMESTAMP,
deleted_at TIMESTAMP,
FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE
);