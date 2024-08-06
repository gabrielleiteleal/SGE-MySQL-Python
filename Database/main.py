from flask import Flask, url_for, render_template

#Inicialização
app = Flask(__name__, template_folder='Front/HTML')


#Rotas
@app.route('/')
def ola_mundo():
    titulo = "Gestão de Usuários"
    usuarios = [
        {"nome":"Gabriel", "membro-ativo":True},
        {"nome":"Maria", "membro-ativo":False}
    ]
    return render_template("index.html", x=titulo, y=usuarios)



@app.route('/alunos')
def cadastro_alunos():
    return render_template('HTML/index.html')




#Execução
app.run(debug=True)

