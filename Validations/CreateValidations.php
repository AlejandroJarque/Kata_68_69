<?php

class CreateValidations {

    private static function validateEmptyField(string $field, string $value): void {

        if(trim($value) === '' ) {

            throw new ValidatedException("The field $field can't be empty");
        }
    }

    private static function validateNoSpaces(string $field, string $value): void {

        if(strpos($value, ' ')!== false) {

            throw new ValidatedException("The field $field can't contain spaces");
        }
    }

    private static function validatePhoneNumber(string $num): void {

        if(!preg_match('^/d{9}$', $num)) {

            throw new ValidatedException("The number can't contain more than 9 digits");
        }
    }

    private static function validateEmail(string $email): void {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            throw new ValidatedException("Incorrect format email");
            
        }
    }

    public static function validateAllFields(string $name, string $surname, string $num, string $email): void {

        self:: validateEmptyField('name', $name);
        self:: validateEmptyField('surname', $surname);
        self:: validateEmptyField('num', $num);
        self:: validateEmptyField('email', $email);

        self:: validateNoSpaces('name', $name);
        self:: validateNoSpaces('surname', $surname);

        self:: validatePhoneNumber('num', $num);

        self:: validateEmail('email', $email);
    }

}

?>