# insert_service.py

import sys
import mysql.connector

# Function to insert service details into database
def insert_service(service_name, price, provider_name, contact, city):
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
        sql = "INSERT INTO services (service_name, price, provider_name, contact, city) VALUES (%s, %s, %s, %s, %s)"
        cursor.execute(sql, (service_name, price, provider_name, contact, city))
        connection.commit()

        # Close connection
        cursor.close()
        connection.close()

        print("Success")  # Output success message

    except Exception as e:
        print(f"Error: {e}")
        sys.exit(1)

# Get arguments passed from PHP script
if __name__ == '__main__':
    if len(sys.argv) == 6:
        service_name = sys.argv[1]
        price = float(sys.argv[2])
        provider_name = sys.argv[3]
        contact = sys.argv[4]
        city = sys.argv[5]

        insert_service(service_name, price, provider_name, contact, city)
    else:
        print("Incorrect number of arguments")
        sys.exit(1)
