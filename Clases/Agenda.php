<?php

class Agenda {

    protected array $contacts;

    private function loadContacts():void
    {
        if(file_exists("Contacts.json")) {

            $data = json_decode(file_get_contents("Contacts.json"), true);

            $this -> contacts = [];

            foreach($data as $contactData) {

                $this -> contacts[] = new Contact(
                    $contactData ['name'],
                    $contactData ['surname'],
                    $contactData ['num'],
                    $contactData ['email']
                );
            }

        }else {

            $this-> contacts = [];
        }
    }

    private function saveContacts():void
    {
        $data = [];

        foreach($this-> contacts as $contact) {

            $data[] = [
                'name' => $contact -> getName(),
                'surname' => $contact -> getSurname(),
                'num' => $contact -> getNum(),
                'email' => $contact -> getMail()
            ];
        }

        file_put_contents("Contacts.json", json_encode($data, JSON_PRETTY_PRINT));
    }

    public function addContact(string $name, string $surname, string $num, string $email)
    {
        $this -> loadContacts();
        $this -> contacts[] = new Contact($name, $surname, $num, $email);
        $this -> saveContacts();
    }

    public function showContact(): void
    {
        $this -> loadContacts();
        foreach($this -> contacts as $contact) {

            echo $contact;
        }
    }

    public function searchContactByName(string $name): void
    {
        $this -> loadContacts();
        $found = false;

        foreach($this -> contacts as $contact) {

            if($contact -> getName() === $name) {

                echo $contact;
                $found = true;

            }
        }

        if(!$found) {

            echo "Contact not found\n";
        }
    }

    public function deleteContact(string $name): void 
    {
        $this -> loadContacts();
        foreach($this -> contacts as $list => $contact) {

            if($contact -> getName() === $name) {

                unset($this ->contacts [$list]);
                echo "Contact deleted\n";
                $this -> saveContacts();
                return;
            }
        }

        echo "Contact not found\n";
    }
}

?>