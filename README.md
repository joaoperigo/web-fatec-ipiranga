# web-fatec-ipiranga
 Work for discipline Web Programming at the college Fatec Ipiranga, Professor Norton Glasser
 Author: Joao Cabral Périgo

 [07/11 13:02] NORTON BARROS GLASER (Professor)
    

Apresentar trabalho nos dia:
26/11/2020

Utilizar o mesmo grupo e estrutura da tema do projeto P1

## Baseado no tema escolhido, faça as seguintes ações
	
    1. Transformar as páginas estaticas em dinamicas - OK

	2. vitrine - A página vitrine deverá listar a consulta dos produtos em destaque
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_vitrine.png "Search")

    3. produto-detalhe - nesta pagina o codigo do produto será recebido por GET e sera feita uma consulta na tabela produto, exibindo os detalhes do produto, a imagem do produto geralmente e salva em uma pasta com o numero do codigo do produto  Exe: ( 12.jpg)
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_detalhe.png "Search")

	4. produto-busca - o campo busca deverá realizar uma pesquisa por titulo da tabela do produto 
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_busca.png "Search")
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_vitrine.png "Search")

    5. cesta - esta pagina receberá por GET o codigo do produto a ser adicionado na tabela cesta, esta tabela deverá ser lida usando o SESSION ID como chave, a lista dos produtos da cesta devera exibidir  os seus respectivos valores e totais, o botao esvaziar cesta , vai apagar todos os registros do session id especifico
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_cesta.png "Search")

	6. login - Fara a verificação na tabela cliente do email e senha digitado, caso autenticado guardar em uma variavel de sessao o codigo e nome do cliente, logado
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_login.png "Search")
	
    7. cadastro - Fara a inclusao e alteração da tabela cliente
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_login.png "Search")
	
    8. esqueci - enviar por email a senha cadastrada atraves do email informado
![alt text](https://github.com/joaoperigo/web-fatec-ipiranga/blob/master/public/p1_esqueci.png "Search")


## Tabelas Sugeridas

    1. produto{​​​​​​​codigo, titulo, descritivo, valor, destaque, qtd, categoria}​​​​​​​​​​​​​​

    2. cliente{​​​​​​​​​​​​​​codigo, nome, email, senha, documento, telefone}​​​​​​​​​​​​​​

    3. cesta{​​​​​​​​​​​​​​sessionId, codigoCliente, codigoProduto, quantidade, valorUnitario, valorTotal}​​​​​​​​​​​​​​

### Material do professor Norton Barros Glaser - Faculdade: Fatec Ipiranga - Di sciplina: Programação Web
