## 68
## Description
In this exercise, I simulated a contact list capable of adding new contacts, searching for them, displaying them, and deleting them.

## Clases
I created a Contact.php class that contains the contact information: Name, Surname, Phone Number, and Email, with a constructor method and a series of getter methods to display each part of the information separately, as well as a toString method to display all the information together.

An Agenda.php class is used to store, display, and delete contacts using various functions. Within this class, I've created a function for each of the agenda's functions, as well as two private methods for loading and saving the JSON data.

Finally, a Menu.php class whose sole function is to display a menu. I found it interesting to create a separate class because I didn't think the agenda should have a menu function or property; rather, it should be able to display the requested information, but delegate the action selection function to a separate class.

## Extra files
An Index.php file is necessary to instantiate the agenda classes and call the menu, which would also generate a do_while loop to simulate the menu and call each function in its proper place.

A Contacts.json file stores and displays the data that users enter into the address book, which operates using address book functions, loading and saving the information, respectively.

## Tecnologies
 - VS Code
 - PHP
 - Json files 

## 69
## Description
In this second exercise, I've applied some validations and tests to verify that everything works correctly, using pure PHP for the validation part and Composer for the testing part.

## Clases
To begin, I created a directory for the validations and used the directory provided by Composer for testing.

In the validations section, I found the CreateValidations class, in which I included different private methods for each use and a final public class that invokes them all at once. This has been very practical for implementing it in addContacts.php. I also created a custom exception for the validations.

In the test interface, I created a CreateValidatedTest class that inherits from Composer's TestCase to perform different tests on each field. I perform different tests on some of them, and although the structure of all of them is the same, I test something different in each one.

## Extra files
I downloaded Composer to run the tests, and with it, various files that help me manage the project, such as gitignore.

## Tecnologies
 - VS Code
 - PHP
 - Json files 
 - Composer