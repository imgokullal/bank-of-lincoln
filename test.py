import mysql.connector
mydb= mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="testdb"

)
mycursor = mydb.cursor()

#insert
# name=("LAL",99)
# sqlFormula=("INSERT INTO students (name,mark) VALUES(%s,%s)")
# mycursor.execute(sqlFormula,name)
# mydb.commit()

#select
# mycursor = mydb.cursor(dictionary=True)
# mycursor.execute("SELECT * FROM students WHERE name='ren'")
# myresults= mycursor.fetchall()
# for row in myresults:
#     print(row["mark"])

# sql=("UPDATE students SET name='Ren', mark=99 WHERE stid=5")
# mycursor.execute(sql)
# mydb.commit()
