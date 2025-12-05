<?php

require_once __DIR__.'/Clases/Agenda.php';
require_once __DIR__.'/Clases/Contact.php';
require_once __DIR__.'/Clases/Menu.php';

require_once __DIR__.'/validaciones/ValidacionesCrear.php';
require_once __DIR__.'/validaciones/ValidacionesListar.php';
require_once __DIR__.'/validaciones/ValidacionesBorrar.php';
require_once __DIR__.'/validaciones/ValidationException.php';

$my_Agenda = new Agenda();
$option = 0;

do{

    echo Menu :: OPTION_MENU;
    $option = (int) readline("\nCoose an option from 1-5");

    switch($option) {

        case 1:
            $name = readline("Name: ");
            $surname = readline("Surname: ");
            $num = readline("Telefon Number: ");
            $email = readline("Email: ");
            $my_Agenda -> addContact($name, $surname, $num, $email);
            break;
        case 2:
            $name = readline("Name to search: ");
            $my_Agenda -> searchContactByName($name);
            break;
        case 3:
            $name = readline("Name to delete: ");
            $my_Agenda -> deleteContact($name);
            break;
        case 4:
            $my_Agenda -> showContact();
            break;
        case 5:
            echo "Goodbye\n";
        default:
            echo "invalid option\n";
            break;

    }

} while($option !== 5);

?>