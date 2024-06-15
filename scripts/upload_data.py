import pandas as pd
import mysql.connector as connector


def num_or_zero(value):
    try:
        print(f"trying to convert {value} to float")
        return float(value)
    except ValueError:
        print(f"Failed to convert {value} to float")
        return 0.0
    
def upload_data_to_db():
    # Database configuration
    db_config = {
        'database': 'solute_tracer',
        'user': 'aabusang',
        'password': '',  
        'host': '',
        'port': '3306'
    }

    # Connect to the database
    conn = connector.connect(**db_config)
    cursor = conn.cursor()

    # Read the Excel file
    xls = pd.ExcelFile('data/db.xlsm')
    sheets = xls.sheet_names[2:]
    counter = 0
    for sheet in sheets:
        df = pd.read_excel(xls, sheet_name=sheet, skiprows=1, usecols="B:E")
        df = df.set_index('Parameter')

        flow_rate = num_or_zero(df.loc['Flow Rate']['Values'])
        flow_velocity = num_or_zero(df.loc['Flow Velocity']['Values'])
        print(f"Flow Rate: {flow_rate}, Flow Velocity: {flow_velocity} ")
        
        insert_query = """ INSERT INTO stream_hydrologies (flow_rate, flow_velocity) VALUES (%s, %s) """


        cursor.execute(insert_query, (flow_rate, flow_velocity))
        
        if counter < 5:
            counter += 1
        else:
            break
    # Commit changes and close connection
    conn.commit()
    cursor.close()
    conn.close()

    print("Data uploaded successfully!")

# Run the function
upload_data_to_db()
