import mysql.connector
from mysql.connector import Error
import sys

# MySQL database connection parameters
host = 'localhost'
database = 'healthcare'
user = 'root'
password = ''

# Function to insert appointment into database
def insert_appointment(patient_name, doctor, service, appointment_date, appointment_time, details):
    try:
        connection = mysql.connector.connect(host=host,
                                             database=database,
                                             user=user,
                                             password=password)
        if connection.is_connected():
            cursor = connection.cursor()

            # SQL query to insert appointment
            sql_query = "INSERT INTO appointments (patient_name, doctor, service, appointment_date, appointment_time, details) VALUES (%s, %s, %s, %s, %s, %s)"
            appointment_data = (patient_name, doctor, service, appointment_date, appointment_time, details)
            cursor.execute(sql_query, appointment_data)

            # Commit changes to database
            connection.commit()
            print("Appointment stored successfully.")

    except Error as e:
        print(f"Error storing appointment: {e}")

    finally:
        # Close database connection
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("MySQL connection is closed.")

# Retrieve command line arguments from PHP
if __name__ == "__main__":
    args = sys.argv[1:]
    if len(args) == 6:
        patient_name = args[0]
        doctor = args[1]
        service = args[2]
        appointment_date = args[3]
        appointment_time = args[4]
        details = args[5]

        # Call function to insert appointment
        insert_appointment(patient_name, doctor, service, appointment_date, appointment_time, details)
    else:
        print("Invalid number of arguments.")
