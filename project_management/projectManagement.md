==========================================================================================

user story :

as a user i want to register 
so i can have a personal 

as a user i want to login to my account
so i can have access to my data

as a user i want to creat my personal data
so i can track my appointments

as a user i want to visualise data i've created 
so i can analyze my appointments

as a user i want to visualise more details about data i've created 
so i can take the best decision if needed

as a user i want to creat diffrent kind of data 
so i can't be limited on data type

as a user i want to verifie that data are correct befor confirmation 
so i can make that there is no error

as a user i want to sync data with all my devices
so i can access it from diffrent devices

as a user i want to filter data i've created
so i can be accurate on want i want to visualise

as a user i want to search for data i've created 
so i can find where i'm looking for

as a user i want to have the ability to remanage the table columns
so i can have my personal tables 

as a user i want to add 1 or more category for each data created
so i can regroup data by category

==========================================================================================

UML :
class diagram :

_____________________________________
  user:
    -> user_id
    -> name
    -> email
    -> password
    -------------------
    + subscribe
    + login
    + logout
    + creat data
    + delete data
    + add category
    + delete category
    + add column
    + delete column
    + deplace columns

_____________________________________
  data:
    -> data_id
    -> category_id
    -> data_type
    -------------------
    + insert_data
    + get_data
    + delete_data
    + get_data_by_id
    + update_data


_____________________________________
  column:
    -> column_id
    -> data_id
    -> category_id
    -------------------
    + creat_column
    + get_column
    + delete_column
    + get_column_by_id
    + update_column


_____________________________________
  data_category:
    -> data_id
    -> category_id
    -> category
    -------------------
    + get_data_category
    + delete_data_category
    + get_data_category_by_id
    + update_data_category


==========================================================================================

component diagram:

    registration page.

    sign in page.

    data management page.

    data_details visualisation page.

    category management page.

==========================================================================================

