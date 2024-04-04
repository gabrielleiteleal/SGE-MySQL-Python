import requests
import json

link = 'https://gerenciamentoescolar-d4451-default-rtdb.firebaseio.com/'

#Requisições
#Get = Pega
#Post = Cria
#Patch = Altera
#Delete = Deleta

dados = {'nome':'Jose', 'matricula':'123'}
requisicao = requests.post(f'{link}/Alunos/.json', data=json.dumps(dados))
print(requisicao)
print(requisicao.text)