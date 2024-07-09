import sys
import mysql.connector

# Function to insert doctor details into database
def insert_doctor(name, specialization, contact, email, fees):
    try:
        # Connect to the database (replace with your actual database credentials)
        connection = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='healthcare'
        )

        # Insert query
        cursor = connection.cursor()
        sql = "INSERT INTO doctor (name, specialization, contact, email, fees) VALUES (%s, %s, %s, %s, %s)"
        cursor.execute(sql, (name, specialization, contact, email, fees))
        connection.commit()

        # Fetch the last inserted ID
        last_id = cursor.lastrowid
        print(last_id)  # Output the last inserted ID

    except mysql.connector.Error as e:
        print(f"Error: {e}")
    finally:
        if 'connection' in locals() and connection.is_connected():
            cursor.close()
            connection.close()

# Get arguments passed from PHP script
if __name__ == '__main__':
    args = sys.argv[1:]
    if len(args) == 5:
        name, specialization, contact, email, fees = args
        insert_doctor(name, specialization, contact, email, fees)
    else:
        print("Incorrect number of arguments.")
