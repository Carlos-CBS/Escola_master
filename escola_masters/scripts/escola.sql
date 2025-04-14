-- Para ejecutarlo en el vagrantfile: 
--sudo mysql < /home/vagrant/scripts/escola.sql

CREATE DATABASE IF NOT EXISTS escola_masters;

CREATE USER IF NOT EXISTS 'escola_user'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON escola_masters.* TO 'escola_user'@'localhost';
FLUSH PRIVILEGES;