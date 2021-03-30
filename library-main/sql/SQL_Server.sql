CREATE DATABASE LivrariaTSI;

CREATE TABLE Usuario (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    Nome VARCHAR(255) NOT NULL,
    CPF INT NOT NULL,
    DataNascimento DATE NOT NULL,
    Sexo VARCHAR(255),
    Endereco VARCHAR(255) NOT NULL,
    CEP INT NOT NULL,
    Cidade VARCHAR(255) NOT NULL,
    UF VARCHAR(255) NOT NULL,
    Telefone INT NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL
);

INSERT INTO Usuario
(Nome, CPF, DataNascimento, Endereco, CEP, Cidade, UF, Telefone, Email, Senha)
VALUES
('Administrador', 0, 20200101, 'Av. Tal, 1000', 0, 'São Paulo', 'SP', 0, 'email@dominio.com', 'password');

CREATE TABLE Livro (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(255),
    Autor VARCHAR(255),
    Genero VARCHAR(255),
    Descricao TEXT,
    Ano DATE,
    NumDePaginas SMALLINT,
    ISBN BIGINT
);

CREATE TABLE Emprestimo (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Leitor INT NOT NULL REFERENCES Usuario(ID),
    Livro INT NOT NULL REFERENCES Livro(ID),
    DataEmprestimo DATE NOT NULL,
    DataDevolucao DATE NOT NULL,
    DevolvidoEm DATE,
    Renovacao DATE
);