# seguradora-back
## API para realizar as ações do sistema.
Nesse projeto encontra-se a listagem, editar, excluir consultas

| AÇÃO | RESUMO | URL |  
|----------|----------|----------|  
| Listar (GET) | Listar todas as consultas | https://seguradora-back.herokuapp.com/ |  
| Listar/[:id] (GET) |Listar apenas uma consulta por ID | https://seguradora-back.herokuapp.com/index.php?id=[:id] |  
| Salvar (POST) | Criar uma nova consulta gerada via Json |  https://seguradora-back.herokuapp.com/cadastro.php |  
| Editar (POST) | Editar a consulta selecionada enviada via Json | https://seguradora-back.herokuapp.com/editar.php |  
| Excluir/[:id] (GET) | Excluir a consulta que foi selecionada | https://seguradora-back.herokuapp.com/Excluir.php?id=[:id]|  

# Banco de dados do projeto
O banco de dados se encontra na pasta [/banco](https://github.com/GabrCoimbra/seguradora-back/blob/master/banco/tb_calculo.sql)  
estrutura  
## TB_Consulta  

|NOME | TIPO | NULL| AUTO_INCREMENT|
|----------|----------|----------|----------|  
|cd_Calculo | INT | FALSE | TRUE |
|nm_Condutor| VARCHAR(50)| FALSE | FALSE |
|ds_Sexo | CHAR(1)| FALSE | FALSE |
|dt_Nascimento| DATE | FALSE | FALSE |
|ds_Marca| VARCHAR(20)| FALSE | FALSE |
|ds_Veiculo| VARCHAR(20)| FALSE | FALSE |
|vl_Veiculo| double| FALSE | FALSE |
