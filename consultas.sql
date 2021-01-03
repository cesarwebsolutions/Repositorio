-- SELECIONAR TODOS OS DADOS DE MANEITA BRUTA --
SELECT * FROM estados;
SELECT * FROM cidades;

-- SELECIONAR DADOS UTILIZANDO "ALIAS" (APELIDOS) --
SELECT id AS Cod, nome AS Nome
FROM estados;

SELECT id AS Cod, nome AS Nome, estado_id AS 'Cód Estado'
FROM cidades;

-- SELECIONAR DADOS MESCLANDO DUAS OU MAIS TABELAS
SELECT cidades.id AS Cod, cidades.nome AS Nome, estados.sigla AS UF
From cidades
INNER JOIN estados ON (cidades.estado_id = estados.id);

-- SIMPLIFICANDO A CONSULTA COM INNER JOIN
SELECT c.id Cod, 
		c.nome Nome, 
		e.sigla UF
From 
	cidades c
INNER JOIN 
	estados e ON (c.estado_id = e.id);


-- TRAZER CONSULTA COM DADOS DO CLIENTE: Nome, Cidade, Estado.
SELECT
	cli.nome Nome,
    cid.nome Cidade,
    est.nome UF
FROM
	clientes cli
INNER JOIN
	cidades cid
    ON (cli.cidade_id = cid.id)
    
    
INNER JOIN
	estados est
    ON (cid.estado_id = est.id)
    
WHERE
	cid.id = 2
;
    -- BUSCAR CLIENTES ATIVOS --
SELECT * FROM clientes
WHERE ativo = 1;

SELECT * FROM clientes
WHERE nome LIKE '%SILVA%';

