# exercicios-php-turma-tarde
repositório para exercícios de php

---------------------------------------
<-- Utilizando if e else -->

1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite;

2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
A mensagem "Reprovado", se a média for menor do que seis;
A mensagem "Aprovado com Distinção", se a média for igual a dez.

3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente.

---------------------------------------

<-- Utilizando switch -->

1 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar

2 - O cardápio de uma casa de lanches é dado pela tabela abaixo:
Código Produto Preço Unitário (R$)

100 Cachorro quente R$ 12,70

101 Bauru Simples R$ 4,00

102 Bauru com ovo R$ 4,60

103 Hambúrguer R$ 15,00

104 Cheeseburger R$ 13,50

05 Refrigerante R$ 4,50

---------------------------------------

1 - crie um formulário que receba o nome do estudante, 3 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado! Faça a validação dos campos de modo que usuário tenha que preencher todos os campos e todos devem ser numéricos.

2 - crie um formulário que receba três números e verifique qual deles é o maior. Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.

3 - Crie um formulário que receba um login e senha de um usuário. Faça a validação dos campos de modo que usuário tenha que preencher todos os campos. Se o login for “aluno” e a senha “desenv”, exiba uma mensagem na tela de “logado com sucesso”.

4 - Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de nascimento e escolha em um select o tipo de pagamento (pix, cartão de crédito ou boleto). Ao clicar em em botão de submit, exiba todos os dados na tela.

---------------------------------------
*** Mini projeto ***

colocar o header e footer do HTML em arquivos separados, e fazer a chamada do arquivo para incluir (include/require).

1 - crie uma tela de login. usuário e senha, ao clicar no botão LOGIN precisa validar os campos. a validação de campos deverá ser feito em um arquivo separado.
se o login for bem sucedido, chamar outra página, se não for bem sucedido, mostrar msg de erro na tela. (login para verificação, crie seu nome e uma senha qualquer)

2 - após realizar o login.
deverá fazer uma tela onde mostrará as opções de cardápio, um input para inserir os códigos dos lanches e um botão para inserir e já calcular o pedido, deverá verificar se o código existe, se não existir, mostrar erro na tela. poderá inserir quantos códigos quiser.

3 - TELA pedido deve aparecer o total do pedido com uma mensagem com o nome do usuário logado e o valor total da compra

4 - na Tela pedido deverá aparecer os itens pedidos pelo cliente (criar uma função para isso).

--------------------------------------
Exercícios
01.01

Tela principal deverá mostrar as pizzas disponíveis para venda e valores. 5 pizzas/valores diferentes. 
na próxima tela deverá aparecer a quantidade do item vendido, valor unitário, valor total (caso tenha sido escolhido mais de 1), um sabor por venda.
nessa tela deverá ter a opção "rachar a conta"... caso escolham rachar a conta, deverá informar em quantas vezes o valor deverá ser dividido.

01.02 
adicionando ao exercício anterior, deverá ter opção de fidelização do cliente, gerando pontos. A cada 50 reais, gera 1 ponto.
No final da compra, deverá aparecer o saldo gerado na compra atual.

02 - Retirada de dinheiro caixa eletrônico
Tela principal terá que ter as opções consulta de saldo e retirada de valor.
A tela de consulta, irá mostrar o saldo atual do cliente. (5k);
A tela de retirada deve ter a opção do cleinte colocar o valor que ele queira tirar. Na próxima tela, primeiramente precisa verificar se o cliente tem saldo suficiente para fazer a retirado do valor indicado. Caso tenha, deverá mostrar as notas que o caixa eletrônico tem disponível (um array, que pode variar dentre as notas disponíveis);
Próximo passo, o sistema deve mostrar a quantidade de notas que o cliente irá receber e o valor que ele informou.
No final, o sistema deverá mostrar o saldo atual que existe na conta;

03 - Uma biblioteca deseja fazer empréstimos de livro via sistema. Tipo de usuário (professor ou aluno); Mostrar um recibo do livro emprestado, data de empréstimo, data de devolução e tipo de usuário. Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias

04 - Criar uma função que receba uma data em formato internacional, e mostre na tela em formato Brasileiro a data e o dia da semana
