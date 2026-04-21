CREATE DATABASE rdj_checklist;

USE rdj_checklist;

CREATE TABLE maquinas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    config TEXT,
    checklist TEXT,
    tecnico VARCHAR(255),
    imagem VARCHAR(255),
    historico_tecnico TEXT,
    observacoes_internas TEXT,
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    senha VARCHAR(255)
);

INSERT INTO usuarios (usuario, senha)
VALUES ('admin', MD5('123456'));