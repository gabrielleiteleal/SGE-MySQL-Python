import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="biel070104",
    database='cadastro'
)

cursor = mydb.cursor()
cursor.execute("create database testePython")



"""
##Manipulando dados##


cursor = mydb.cursor()

cursor.execute("select * from gafanhotos;")

meusResultados = cursor.fetchall()

print(meusResultados)
"""