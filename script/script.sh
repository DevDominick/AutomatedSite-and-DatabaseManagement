#!/bin/bash

sitename=$1
site_dir="/path/to/site/"
sql_file="/path/to/database.sql"

# Copy the site to a backup directory
cp -r $site_dir "$sitename-backup"

# Create a new database and grant privileges to a user
mysql -u root -p <<EOF
CREATE DATABASE sitename;
GRANT ALL PRIVILEGES ON site_db.* TO 'site_user'@'localhost' IDENTIFIED BY 'password';
EOF

# Load the SQL file into the new database
mysql -u site_user -p sitename < $sql_file

# Confirm that the database has been loaded successfully
if [ $? -eq 0 ]; then
  echo "SQL file loaded into database successfully"
else
  echo "Error loading SQL file into database"
fi
