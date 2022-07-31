BEGIN TRANSACTION;
DROP TABLE IF EXISTS PRODUTOS;
CREATE TABLE PRODUTOS (
    PRODUTOS_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    PRODUTOS_NOME TEXT NOT NULL,
    PRODUTOS_VAL_UNIT REAL
);

DROP TABLE IF EXISTS PRATELEIRAS;
CREATE TABLE PRATELEIRAS(
    PRATELEIRAS_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    PRATELEIRAS_NOME TEXT NOT NULL,
    PRATELEIRAS_LOCALIZACAO INTEGER
);

DROP TABLE IF EXISTS NOTA;
CREATE TABLE NOTA(
    NOTA_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    NOTA_NUMERO REAL NOT NULL,
    NOTA_DATA TEXT NOT NULL,
    NOTA_CLIENTE TEXT NOT NULL,
    NOTA_ATENDENTE TEXT NOT NULL
);

DROP TABLE IF EXISTS ITENS_NOTA;
CREATE TABLE ITENS_NOTA(
    ITENS_NOTA_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    ITENS_NOTA_SEQUENCIA REAL NOT NULL,
    ITENS_NOTA_PRODUTO REAL NOT NULL,
    ITENS_NOTA_QUANTIDADE REAL NOT NULL,
    ITENS_NOTA_VALOR_UNIT REAL NOT NULL,
    ITENS_NOTA_VALOR_TOTAL REAL NOT NULL
);

DROP TABLE IF EXISTS ATENDENTES;
CREATE TABLE ATENDENTES (
    ATENDENTES_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    ATENDENTES_NOME CHAR(40) NOT NULL
);

DROP TABLE IF EXISTS CLIENTES;
CREATE TABLE CLIENTES (
    CLIENTES_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    CLIENTES_NOME CHAR(40) NOT NULL,
    CLIENTES_TELEFONE INTEGER,
    CLIENTES_CPF TEXT,
    CLIENTES_TOTAL_COMPRAS REAL NOT NULL
);

COMMIT;
