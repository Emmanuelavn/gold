CREATE DATABASE petrolm_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    invitation_code VARCHAR(50),
    is_confirmed BOOLEAN DEFAULT FALSE,
    confirmation_token VARCHAR(255),
    wallet_address VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    amount DECIMAL(10,2),
    currency VARCHAR(10),
    status ENUM('pending', 'completed', 'failed'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE investments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL, -- Référence à l'utilisateur
    amount_invested DECIMAL(10,2) NOT NULL,
    date_invested TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expected_return DECIMAL(10,2) DEFAULT 0, -- Gain attendu
    current_return DECIMAL(10,2) DEFAULT 0, -- Gain accumulé
    status VARCHAR(50) DEFAULT 'active', -- Statut de l'investissement (actif, terminé, etc.)
    FOREIGN KEY (user_id) REFERENCES users(id)
);
