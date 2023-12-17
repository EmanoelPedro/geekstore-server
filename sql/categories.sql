CREATE TABLE categories (
id BIGINT PRIMARY KEY,
name varchar(255) NOT NULL,
slug varchar(255) UNIQUE NOT NULL,
created_at TIMESTAMP,
updated_at TIMESTAMP,
deleted_at TIMESTAMP,
description longtext NOT NULL
);
