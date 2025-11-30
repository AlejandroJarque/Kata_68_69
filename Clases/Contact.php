<?php

class Contact {

    protected string $name;
    protected string $surname;
    protected int $num;
    protected string $email;

    public function __construct(string $name, string $surname, int $num, string $email)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> num = $num;
        $this -> email = $email;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function getSurname(): string
    {
        return $this -> surname;
    }

    public function getNum(): int
    {
        return $this -> num;
    }

    public function getMail(): string
    {
        return $this -> email;
    }

    public function __toString()
    {
        return " - Contact:\n".
        " -- Name: ". $this -> name."\n".
        " -- Surname: ". $this -> surname."\n".
        " -- Telefon Number: ". $this -> num."\n".
        " -- Email: ". $this -> email."\n";
    }

}
?>