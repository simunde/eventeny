CREATE TABLE application_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    deadline DATE,
    cover_photo TEXT,
    address VARCHAR(255) 
);

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    application_type_id INT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    status ENUM('submitted', 'approved', 'waitlisted') DEFAULT 'submitted',
    FOREIGN KEY (application_type_id) REFERENCES application_types(id)
);
