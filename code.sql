CREATE DATABASE catalogo_filmes;
USE catalogo_filmes;


USE catalogo_filmes;
CREATE TABLE filmes (
 id INT AUTO_INCREMENT PRIMARY KEY,
 titulo VARCHAR(100) NOT NULL,
 genero VARCHAR(50) NOT NULL,
 ano INT NOT NULL
);

USE catalogo_filmes;
INSERT INTO filmes (titulo, genero, ano) VALUES
('Interestelar', 'Ficção científica', 2014),
('Toy Story', 'Animação', 1995),
('O Auto da Compadecida', 'Comédia', 2000),
('Procurando Nemo', 'Animação', 2003),
('Cidade de Deus', 'Drama', 2002);