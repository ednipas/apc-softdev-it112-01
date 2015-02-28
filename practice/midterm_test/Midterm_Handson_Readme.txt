Yii 2.0 Hands- On Exam: 3rd Term 2014-2015  SOFTDEV IT-112, IT-111

2015 February 28

Yii 2.0 Hands On Test (with git on code.google.com)

Prerequisites: Xampp installed and working, TortoiseGit installed and working, yii 2.0 basic template downloaded, code.google.com accessible, apc.csf.ph/moodle accessible.

Set your computer clock to the correct date and time.

Note: Always write a concise, descriptive message for every commit that you make.

Before you start: Your code.google.com group repository cloned into d:\softdev_(yoursection)\

Preparation: One member of the group add a new folder to your group repository:  /practice/midterm_test

pull, commit - write a concise, descriptive message, push

All other group members pull to update your own repositories

A. Each group member create a new folder in  /practice/midterm_test called (last_name_firstname_midterms)

example:  /practice/midterm_test/Delacruz_Juan_Paolo_midterms

pull, commit - write a concise, descriptive message, push

B. Creating a Project in Yii: Inside of your  /practice/midterm_test/Lastname_Firstname_midterms folder:  1. copy the yii 2.0 basic template zip file and extract inside this folder. 2. Rename the folder from basic, to ourspace. 3. populate the secret key field with a value

pull, commit - write a concise, descriptive message, push

C. create a link using the mklink command - Create a link in your htdocs folder called ourspace connected to  /practice/midterm_test/Lastname_Firstname_midterms/ourspace

Raise your hand and show me the following page on your computer:http://localhost/ourspace

D. Create a new database with the following database name: softdev_lastname_firstname_ourspace using PHPMyAdmin

Add the following two tables to the database using PHPMyAdmin

table: myaddress:

id: (primary key)

firstname: varchar(30)

middlename: varchar(30)
lastname: varchar(30)
gender: varchar(1)
created_at: (timestamp)

table: mycomment:

id: (primary key)

myaddress_id: int

author: varchar(255)
body: longtext
created_at: (timestamp)

Add the following foreign key relationship:

ALTER TABLE `mycomment`
ADD CONSTRAINT `mycomment_ibfk_1` 
FOREIGN KEY (`myaddress_id`) REFERENCES `myaddress` (`id`)

Export the Database as a .sql file and save it in  /practice/midterm_test/Lastname_Firstname_midterms/

pull, commit - write a concise, descriptive message, push

E. Change the database connection of ourspace to connect to softdev_lastname_firstname_ourspace.

pull, commit - write a concise, descriptive message, push

F. Configure Gii and generate model and CRUD code for myaddress and mycomment tables.

pull, commit - write a concise, descriptive message, push

show me:

http://localhost/ourspace/index.php?r=myaddress

http://localhost/ourspace/index.php?r=mycomment

G. Edit the site.css file and change the background color, font type, etc.

Change the title of your project from My Company to Our Space

pull, commit - write a concise, descriptive message, push

show me:

http://localhost/ourspace/index.php?r=myaddress

H. Modify your database

-Add the following fields to the schema: (use phpmyadmin)
-Add to table myaddress:
home_address: varchar(50) (null)
landline: varchar(20) (null)
cellphone: varchar(20) (null)

Export the Database as a .sql file and save it using the same filename (overwrite the first sql file you created) in  /practice/midterm_test/Lastname_Firstname_midterms/

pull, commit - write a concise, descriptive message, push

I. Generate Model and CRUD for myaddress

pull, commit - write a concise, descriptive message, push

show me the following page: http://localhost/ourspace/index.php?r=myaddress

J. Insert one record for address and insert one record for comment

Export the Database as a .sql file and save it using the same filename (overwrite the first sql file you created) in  /practice/midterm_test/Lastname_Firstname_midterms/

pull, commit - write a concise, descriptive message, push

Show me for add edit, list: http://localhost/ourspace/index.php?r=myaddress

K. Update field myaddress_id in the form for mycomment to show the last name as a drop down instead of an empty text field.

pull, commit - write a concise, descriptive message, push

L. Change the display labels for all the views (create, update, view) to show: First Name, Middle Name, Last Name, Male/Female

pull, commit - write a concise, descriptive message, push

M. Update the field myaddress in the list and view pages to show the last name instead of the numeric foreign key field value.

pull, commit - write a concise, descriptive message, push

Show me for add edit, list: http://localhost/ourspace/index.php?r=myaddress

Show me for add edit, list: http://localhost/ourspace/index.php?r=mycomment

N. Update the search field of myaddress in the comment index page to allow a search of the last name for the myaddress field.

pull, commit - write a concise, descriptive message, push