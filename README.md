# AutomatedSite-and-DatabaseManagement

This project provides a solution for copying a site and setting up a database, then loading a SQL file into the database using PHP and a bash script. The user inputs the site name using an HTML form, which is then processed by a PHP script. The PHP script executes the bash script, passing the site nameas an argument, and displays the output on the page.

The bash script performs the following tasks:

- Copies the site to a backup directory
- Creates a new database and grants privileges to a user
- Loads the SQL file into the new database
- Confirms that the database has been loaded successfully

# Planned Features

- Auto subdomain such as user.yourdomain.com

# Information

- This project can be useful for automating the process of setting up a database and loading data into it, making it easier for users to manage their sites.

- Join our discord: discord.gg/landify
