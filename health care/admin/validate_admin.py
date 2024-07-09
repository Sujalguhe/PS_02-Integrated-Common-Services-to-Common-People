import sys
import mysql.connector

# Database connection parameters
db_config = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'healthcare'
}

# Function to validate admin credentials
def validate_admin(username, password):
    try:
        # Connect to database
        conn = mysql.connector.connect(**db_config)
        cursor = conn.cursor()

        # Query to check admin credentials
        query = "SELECT * FROM admin WHERE email = %s AND password = %s"
        cursor.execute(query, (username, password))
        admin = cursor.fetchone()

        # Close cursor and connection
        cursor.close()
        conn.close()

        return admin

    except mysql.connector.Error as err:
        print("Database Error:", err)
        return None

# Main function to validate admin credentials from command-line arguments
if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python validate_admin.py <username> <password>")
        sys.exit(1)

    username = sys.argv[1]
    password = sys.argv[2]

    admin = validate_admin(username, password)

    if admin:
        print("Login successful")
    else:
        print("Invalid credentials")
