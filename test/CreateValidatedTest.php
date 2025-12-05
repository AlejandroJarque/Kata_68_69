<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../validaciones/ValidacionesCrear.php';
require_once __DIR__ . '/../validaciones/ValidationException.php';

class CreateValidatedTest extends TestCase {

    public function testEmptyNameException() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "", "Jarque", "123456789", "jakistaki@gmail.com");
    }

    public function testEmptySurnameException() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Alejandro", "", "123456789", "jakistaki@gmail.com");
    }

    public function testEmptPhoneException() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Alejandro", "Jarque", "", "jakistaki@gmail.com");
    }

    public function testEmptyEmailException() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "", "Jarque", "123456789", "");
    }





    public function testNoSpaceName() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "123456789", "jakistaki@gmail.com");
    }

    public function testNoSpaceSurname() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Alejandro", "Jar que", "123456789", "jakistaki@gmail.com");
    }





    public function testLongPhoneNumber() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Alejandro", "Jarque", "12345678922", "jakistaki@gmail.com");
    }

    public function testNumberPhoneNumber() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "12er56789", "jakistaki@gmail.com");
    }

    public function testNoSpaceNumber() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "123456 789", "jakistaki@gmail.com");
    }



    

    public function testEmailProperSimbols() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "123456789", "jakistaki.gmail.com");
    }

    public function testEmailProperEnding() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "123456789", "jakistaki@gmail.mom");
    }

    public function testEmailNoSpace() {

        $this -> expectException(ValidatedException::class);

        CreateValidations::validateAllFields( "Ale jandro", "Jarque", "123456789", "jakistaki @gmail.com");
    }

}

?>