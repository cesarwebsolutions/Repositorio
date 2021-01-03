USE db_loja_segunda;

INSERT INTO estados (nome, sigla) VALUES
("Acre", "AC"),
("Alagoas","AL"),
("Amapá", "AP"),
("Amazonas", "AM"),
("Bahia", "BA"),
("Ceará", "CE"),
("Distrito Federal", "DF"),
("Espirito Santo", "ES"),
("Goiás", "GO"),
("Maranhão", "MA"),
("Mato Grosso", "MT"),
("Mato Grosso do Sul", "MS"),
("Minas Gerais", "MG"),
("Pará", "PA"),
("Paraiba", "PB"),
("Paraná", "PR"),
("Pernanbuco", "PE"),
("Piauí", "PI"),
("Rio de Janeiro", "RJ"),
("Rio Grande do Norte", "RN"),
("Rio grande do Sul", "RS"),
("Rondônia", "RO"),
("Roraima", "RR"),
("Santa Catarina", "SC"),
("São Paulo", "SP"),
("Sergipe", "SE"),
("Tocantins", "TO");

INSERT INTO cidades (nome, estado_id) VALUES
("São Paulo", 25),
("São José do Rio Preto", 25),
("Rio de Janeiro", 19),
("Salvador", 5),
("Belo Horizonte", 13),
("Mirassol", 25);


INSERT INTO clientes 
(
	nome, 
	email, 
	senha, 
	telefone, 
	cpf, 
	cep, 
	endereco, 
	bairro, 
	numero, 
	cidade_id, 
	ativo, 
	criado, 
	modificado
) 
VALUES
("João Silva","jp@js.com", "123" , "(17)9999-9999", "999.999.999-99", "15.000-000", "Rua 1", "Centro", "S/N", 1, 1, NOW(),NOW()),
("Luana Alves","la@js.com", "456" , "(17)8888-8888", "999.999.999-99", "15.000-000", "Rua 2", "Centro", "S/N", 2, 1, NOW(),NOW()),
("Manuel Portuga","jp@js.com", "789" , "(17)7777-7777", "999.999.999-99", "15.000-000", "Rua 3", "Centro", "S/N", 2, 1, NOW(),NOW());





