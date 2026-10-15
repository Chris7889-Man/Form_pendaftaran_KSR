CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO admin(username, password)
VALUES ('admin', MD5('admin123'));

CREATE TABLE pendaftar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255),
    nim VARCHAR(50),
    angkatan VARCHAR(10),
    whatsapp VARCHAR(20),
    program_studi VARCHAR(255),
    jenis_kelamin VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);