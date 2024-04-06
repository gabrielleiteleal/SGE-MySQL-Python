import mysql.connector

# Criando conexão com o banco de dados
conexao = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="gerenciamentoescolar",
)

cursor = conexao.cursor()

# CREATE
insert_matricula = ""
insert_nome = ""
insert_idade = ""
insert_data_nasc = ""
insert_cpf = ""
insert_genero = ""
insert_email = ""
insert_telefone = ""

#VARIAVEIS DE COMANDOS
inserirDados_Alunos = f"INSERT INTO Alunos (matricula, nome, idade, data_nascimento, cpf, genero, email, telefone) values ('{insert_matricula}', '{insert_nome}', '{insert_idade}', '{insert_data_nasc}', '{insert_cpf}', '{insert_genero}', '{insert_email}', '{insert_telefone}'); "
lerDados_Alunos = f"SELECT * FROM Alunos;"
atualizarDados_Alunos = f"UPDATE Alunos SET nome = 'Gabriel Leite' WHERE matricula = '1234567890'"
deletarDados_Alunos = f"DELETE FROM Alunos WHERE matricula = '1234567890'"


# Executa a variavel de comando
cursor.execute(deletarDados_Alunos)
cursor.execute(lerDados_Alunos)


# READ
# Se for comando de leitura usa fetchall
resultado = cursor.fetchall()
print(resultado)


# Se o comando for de edição faz um commit
# conexao.commit()

# Fechando cursor e conexao
cursor.close()
conexao.close()
