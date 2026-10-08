USE Farmacia ;

CREATE TABLE IF NOT EXISTS usuario (
  id_usuario INT primary key NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  tipo_usuario VARCHAR(30) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT '1'
  );

CREATE TABLE IF NOT EXISTS categoria (
  id_categoria INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  descricao VARCHAR(150) NULL
  );

CREATE TABLE IF NOT EXISTS cliente (
  id_cliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NOT NULL COMMENT 'Em desenvolvimento'
  );


CREATE TABLE IF NOT EXISTS venda (
    id_venda     INT AUTO_INCREMENT,
    id_cliente   INT NULL,
    id_usuario   INT NULL,
    data_venda   DATETIME NOT NULL,
    valor_total  DECIMAL(10,2) NOT NULL,
    
    CONSTRAINT pk_venda PRIMARY KEY (id_venda),
    CONSTRAINT fk_venda_cliente FOREIGN KEY (id_cliente) 
        REFERENCES cliente (id_cliente) 
        ON DELETE NO ACTION 
        ON UPDATE NO ACTION,
        
    CONSTRAINT fk_venda_usuario FOREIGN KEY (id_usuario) 
        REFERENCES usuario (id_usuario) 
        ON DELETE NO ACTION 
        ON UPDATE NO ACTION
);


CREATE TABLE IF NOT EXISTS estoque (
  id_estoque INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  quantidade INT NOT NULL,
  estoque_minimo INT NOT NULL,
  localizacao VARCHAR(50) NULL COMMENT 'Em desenvolvimento'
);

CREATE TABLE IF NOT EXISTS fornecedor (
  id_fornecedor INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cnpj VARCHAR(18) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NULL COMMENT 'Em desenvolvimento'
  );

CREATE TABLE IF NOT EXISTS compra (
    id_compra      INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario     INT NOT NULL,
    id_fornecedor  INT NOT NULL,
    data_compra    DATETIME NOT NULL,
    valor_total    DECIMAL(10,2) NOT NULL,
    
    CONSTRAINT fk_compra_usuario FOREIGN KEY (id_usuario)
        REFERENCES usuario (id_usuario)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
        
    CONSTRAINT fk_compra_fornecedor FOREIGN KEY (id_fornecedor)
        REFERENCES fornecedor (id_fornecedor)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
);


CREATE TABLE IF NOT EXISTS medicamento (
  id_medicamento INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  principio_ativo VARCHAR(100) NOT NULL,
  dosagem VARCHAR(50) NULL,
  tipo VARCHAR(50) NOT NULL,
  preco_venda DECIMAL(10,2) NOT NULL,
  id_categoria INT NOT NULL,
  quantidade INT NOT NULL,
  
  CONSTRAINT fk_medicamento_categoria 
    FOREIGN KEY (id_categoria)
    REFERENCES categoria (id_categoria)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


CREATE TABLE IF NOT EXISTS item_compra (
  id_item_compra INT PRIMARY KEY AUTO_INCREMENT,
  id_compra INT NOT NULL,
  id_medicamento INT NOT NULL,
  quantidade INT NOT NULL,
  preco_unitario DECIMAL(10,2) NOT NULL,
  subtotal DECIMAL(10,2) NOT NULL,
  
  CONSTRAINT fk_item_compra_compra
    FOREIGN KEY (id_compra)
    REFERENCES compra (id_compra)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    
  CONSTRAINT fk_item_compra_medicamento
    FOREIGN KEY (id_medicamento)
    REFERENCES medicamento (id_medicamento)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS item_venda (
  id_item_venda INT PRIMARY KEY AUTO_INCREMENT,
  id_venda INT NOT NULL,
  id_medicamento INT NOT NULL,
  quantidade INT NOT NULL,
  preco_unitario DECIMAL(10,2) NOT NULL,
  subtotal DECIMAL(10,2) NOT NULL,

  CONSTRAINT fk_item_venda_venda
    FOREIGN KEY (id_venda)
    REFERENCES venda (id_venda)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    
  CONSTRAINT fk_item_venda_medicamento
    FOREIGN KEY (id_medicamento)
    REFERENCES medicamento (id_medicamento)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

drop table estoque;

ALTER TABLE fornecedor
RENAME COLUMN enedereco TO endereco;