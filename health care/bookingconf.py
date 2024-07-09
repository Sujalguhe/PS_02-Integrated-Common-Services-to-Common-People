import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="healthcare"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT `id` FROM appointments ORDER BY `appointments`.`id` DESC LIMIT 1")

myresult = mycursor.fetchall()

for x in myresult:
  print(x[0])
