# 1 - Selecione todos os clientes com idade igual ou superior a 29. Os registros devem ser ordenados de forma ascendente pela idade

	select * from clientes where idade >= 29 order by idade asc;

# 2 - Utilize instruções do subconjunto DDL do SQL para realizar a inclusão das colunas abaixo na tabela clientes:
# Adicine a coluna “sexo” do tipo string com tamanho fixo de 1 caractere. Coluna não pode ser vazia na inserção.
# Adicione a coluna “endereço” do tipo string com tamanho variado de até 150 caracteres. Coluna pode ser vazia na inserção

	alter table clientes add column sexo char(1) not null;
    alter table clientes add column endereco varchar(150);

# 3 - Efetue um update em clientes dos registros de id_cliente igual a 1, 2, 3, 6 e 7, atualizando o sexo para “M”. Utilize a instrução IN para este fim.

	update clientes set sexo = 'M' where id_cliente in (1, 2, 3, 6, 7);

# 4 - Efetue um update em clientes dos registros de id_cliente igual a 4, 5, 8, 9 e 10, atualizando o sexo para “F”. Como desafio, faça este update utilizando dois between’s no filtro.

	update clientes set sexo = 'F' where id_cliente between 4 and 5 or id_cliente between 8 and 10;
    
# 5 - Selecione todos os registros de clientes que possuam relação com pedidos e com pedidos produtos (apenas registros com relacionamentos entre si). Recupe também os detalhes dos produtos da tabela tb_produtos. A consulta deve retornar de clientes as colunas “id_cliente”, “nome”, “idade” e de produtos deve ser retornado as colunas “produto” e “valor”.

	select c.id_cliente, c.nome, c.idade, prod.produto, prod.valor 
    from clientes as c
    inner join pedidos as p on (c.id_cliente = p.id_cliente)
    inner join pedidos_produtos as pp on (p.id_pedido = pp.id_pedido)
    left join produtos as prod on (pp.id_produto = prod.id_produto);