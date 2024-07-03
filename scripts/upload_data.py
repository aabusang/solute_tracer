import os, sys
import pandas as pd
import mysql.connector
from mysql.connector import Error
from dotenv import load_dotenv

load_dotenv()




def main():
    connection = connect_to_database()
    if connection:
        upload_data_to_db(connection)
        connection.close()
        print("Data uploaded successfully!")
    else:
        print("Failed to connect to the database")



def connect_to_database():
    try:
        connection = mysql.connector.connect(
            host=os.getenv('DB_HOST'),
            user=os.getenv('DB_USER'),
            password=os.getenv('DB_PASSWORD'),
            database=os.getenv('DB_NAME')
        )
        if connection.is_connected():
            print("Successfully connected to the database")
            return connection
    except Error as e:
        print(f"Error: {e}")
        return None
    

def upload_data_to_db(connection):

    helpers = HelperFunctions()

    xls = pd.ExcelFile('data/db.xlsm')
    sheets = xls.sheet_names[2:]
    for sheet in sheets:
        df = pd.read_excel(xls, sheet_name=sheet, skiprows=1, usecols="B:E")
        df = df.set_index('Parameter')


        # try:
        #     cursor = connection.cursor()
                

        #     cursor.executemany(query, data)
        #     connection.commit()
        #     print(f"{cursor.rowcount} records inserted successfully.")
        
        # except Error as e:
        #     print(f"Error: {e}")
        #     connection.rollback()
        # finally:
        #     if cursor:
        #         cursor.close()

class HelperFunctions:
    def num_or_zero(value):
        try:
            return float(value)
        except ValueError:
            return 0

    def get_sheet_names():
        xls = pd.ExcelFile('data/db.xlsm')
        return xls.sheet_names[2:]



if __name__ == "__main__":
    main()







#         flow_rate = num_or_zero(df.loc['Flow Rate']['Values'])
#         flow_velocity = num_or_zero(df.loc['Flow Velocity']['Values'])
#         print(f"Flow Rate: {flow_rate}, Flow Velocity: {flow_velocity} ")
        
#         insert_query = """ INSERT INTO stream_hydrologies (flow_rate, flow_velocity) VALUES (%s, %s) """


#         cursor.execute(insert_query, (flow_rate, flow_velocity))
        
#         if counter < 5:
#             counter += 1
#         else:
#             break
#     # Commit changes and close connection
#     conn.commit()
#     cursor.close()
#     conn.close()

#     print("Data uploaded successfully!")

# # Run the function
# upload_data_to_db()
