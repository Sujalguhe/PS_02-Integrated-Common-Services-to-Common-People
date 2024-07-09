# Import required libraries
import sys
import mysql.connector

# Function to fetch appointment details from the database
def fetch_appointment_details(appointment_id):
    try:
        # Connect to the database (replace with your actual database credentials)
        connection = mysql.connector.connect(host='localhost',
                                             database='healthcare',
                                             user='root',
                                             password='')

        # Query to fetch appointment details
        cursor = connection.cursor(dictionary=True)
        sql = "SELECT * FROM appointments WHERE id = %s"
        cursor.execute(sql, (appointment_id,))
        appointment = cursor.fetchone()

        if appointment:
            print(f"Patient Name: {appointment['patient_name']}")
            print(f"<br>")
            print(f"Doctor Name: {appointment['doctor']}")
            print(f"<br>")
            print(f"Appointment Date: {appointment['appointment_date']}")
            print(f"<br>")
            print(f"Time: {appointment['appointment_time']}")
            print(f"<br>")
            print(f"Status: {appointment['status']}")
            print(f"<br>")
            print(f"Details: {appointment['details']}")
            print(f"<br>")
        else:
            print("No appointment found with the specified ID.")

    except mysql.connector.Error as error:
        print(f"Error: {error}")
    finally:
        if 'connection' in locals() and connection.is_connected():
            cursor.close()
            connection.close()

# Get the appointment ID from command-line argument
if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Usage: python appointmentdetails.py <appointment_id>")
        sys.exit(1)

    appointment_id = int(sys.argv[1])
    fetch_appointment_details(appointment_id)
