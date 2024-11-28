create table search_applicant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    license_number INT,
    gender VARCHAR(255),
    age INT,
    email VARCHAR(255),
    contact_number VARCHAR(255),
    address VARCHAR(255),
    added_by INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_by INT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
 
CREATE TABLE user_accounts (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE activity_logs (
    activity_log_id INT AUTO_INCREMENT PRIMARY KEY,
    operation VARCHAR(255),
    id INT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    license_number INT,
    gender VARCHAR(255),
    age INT,
    email VARCHAR(255),
    contact_number VARCHAR(255),
    address VARCHAR(255),
    username VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE search_history (
    search_id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(255),
    username VARCHAR(100),
    date_searched TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);