# Anleitung

---

## Voraussetzungen

- Ein Ubuntu- oder Debian-basiertes Betriebssystem

---

## 1. Packages installieren

Vorm installieren ein Systemupdate:

```bash
sudo apt update && sudo apt upgrade
```

Packages installieren:

```bash
sudo apt install nginx php php-fpm php-mysql mysql-server
```
Starte nginx.service und php-fpm service (version kann anders sein):

```bash
sudo systemctl start nginx
sudo systemctl start php8.1-fpm
```
## 2. Setup
Die 'default' Datei **runterladen** und in /etc/nginx/sites-enabled/ einfügen und nginx restarten:

```bash
sudo mv ~/Downloads/miniprojekt2/default /etc/nginx/sites-enabled/
```

Alle PHP Dateien in den default server Ordner legen:

```bash
sudo mv ~/Downloads/miniprojekt2/*.php /var/www/html/
```

SQL öffnen:
```bash
sudo mysql
```
Die Testdatenbank und einträge erstellen:
```sql
CREATE DATABASE miniprojekt2;

USE miniprojekt2;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO users (username, email, password) VALUES
('john_doe', 'john.doe@example.com', 'password123'),
('jane_smith', 'jane.smith@example.com', 'securepass456'),
('alice_wonder', 'alice.wonder@example.com', 'wonderland789'),
('bob_builder', 'bob.builder@example.com', 'builditnow000'),
('charlie_brown', 'charlie.brown@example.com', 'peanuts456'),
('test', 'test@bla', '1234'),
('admin', 'admin@admin.com', 'VERYSECURE');

SELECT * FROM users;

EXIT;
```
nginx neu laden:

```bash
sudo systemctl reload nginx
```

## Rekreieren
Es können user registriert werden und sich "einloggen". Wenn allerdings folgendes SQL statement:

```sql
' OR 1=1--
```
exakt in das username Feld eingegeben wird, wird die gesamte Datenbank und nicht nur der user ausgegeben.
