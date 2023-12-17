CREATE TABLE products (
id BIGINT PRIMARY KEY,
name varchar(255) NOT NULL,
slug varchar(255) UNIQUE NOT NULL,
description longtext NOT NULL,
braind bigint DEFAULT NULL,
created_at TIMESTAMP,
updated_at TIMESTAMP,
deleted_at TIMESTAMP,
FOREIGN KEY (braind) REFERENCES brainds(id) ON DELETE SET NULL
);