import mysql.connector
import json
from datetime import datetime

def fetch_todays_appointments(doctor):
    try:
        # Database connection parameters
        db_config = {
            'user': 'root',         # Replace with your MySQL username
            'password': '',         # Replace with your MySQL password
            'host': 'localhost',
            'database': 'healthcare' # Replace with your database name
        }
        
        # Establish database connection
        conn = mysql.connector.connect(**db_config)
        cursor = conn.cursor(dictionary=True)

        # Get today's date
        today = datetime.now().strftime('%Y-%m-%d')

        # SQL query to fetch today's appointments for the specified doctor
        query = "SELECT appointment_time, patient_name, doctor, id FROM appointments WHERE doctor = %s AND appointment_date = %s"
        cursor.execute(query, (doctor, today))

        # Fetch all rows
        appointments = cursor.fetchall()

        # Close the cursor and connection
        cursor.close()
        conn.close()

        # Return appointments as JSON
        return json.dumps(appointments)

    except mysql.connector.Error as err:
        return json.dumps({"error": str(err)})

if __name__ == "__main__":
    import sys
    if len(sys.argv) != 2:
        print(json.dumps({"error": "Doctor username not provided"}))
    else:
        doctor = sys.argv[1]
        print(fetch_todays_appointments(doctor))
