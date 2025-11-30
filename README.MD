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
