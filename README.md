# Wordpress Restaurant Theme

A responsive WordPress restaurant theme that features an elegant full-width layout with color customization, custom fields, and offers online reservations.

## View Project


[![wp-restaurant](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-display.png)]

# Install WordPress Locally
### STEP 1. DOWNLOAD WORDPRESS

Download latest version of WordPress as zip file

Create new folder in directory and place zip file in it


### STEP 2. INSTALL & LAUNCH MAMP ON COMPUTER

Download free version of MAMP (must run Mac OS X 10.6.6 or later)

Install and launch MAMP (go to Applications folder)

### STEP 3. SET THE PORTS

A window should appear. Click on "Preferences".

Select the "Ports" tab. Default should have Apache as 8888 and MySQL as 8889. Go ahead click ok and leave as is.

### STEP 4. CONFIGURE WEB SERVE & DOCUMENT ROOT

Select "Web Server" tab.

Make sure the web server is "Apache".

Change document root to the folder that you created earlier with the WordPress zip file in it. (You're specifying where MAMP will be looking for all your files)

### STEP 5. START SERVERS

Click "Start Servers"

A window should open with info indicating your setup and other MAMP info.

### STEP 6. CREATE A MYSQL DATABASE

You need to go to phpMyAdmin by 
You should see these databases on the side panel:

* information_schema
* mysql
* performance_schema

Click on the "databases" tab in the top navigation.

Name your database (ie. "website_db").

Click the "create" button.

### STEP 7. UNZIP WORDPRESS INSTALL

Head back over to foot folder you set up in step one.

Upzip the WordPress zip file.

Rename new folder to something relevant to site.

Open the folder.

### STEP 8. CONFIGURE WP-CONFIG.PHP FILE

Find and open the "wp-config-sample.php" file with text editor.

Replace 'database__name__here' with name of your database (ie. 'website_db')

Replace 'username_here' and 'password_here' with 'root' (which is the default for the database your created before in phpMyAdmin.

Save file and exit out of it.

IMPORTANT: Rename the file from wp-config-sample.php to wp-config.php (remove the word sample)

### STEP 9. INSTALL WORDPRESS

Open browser and type in the url pointing to your site folder.

**localhost:8888/name-of-root-folder**

### STEP. 10 LOG INTO THE WORDPRESS DASHBOARD

Log into the local site by visting:

**http://localhost:8888/site-directory/wp-admin**

You should see a login screen. Input your username and password to login.

Once inputted, the WordPress dashboard should appear.

WordPress has been set up locally! Yeeee!!!
