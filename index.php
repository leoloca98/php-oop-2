<?php

//* Classe per i prodotti
class Product
{
    protected $name;
    protected $price;
    protected $amount;

    public function __construct($nome, $prezzo, $quantità)
    {
        $this->name = $nome;
        $this->price = $prezzo;
        $this->amount = $quantità;
    }

    public function getInfo()
    {
        return "Product: $this->name" . " </br>" . "Price: $this->price" . "€" . " </br>"  . "Quantity: $this->amount" . " </br>" . "<hr> ";
    }
};

//* Classe per gli utenti
class User
{
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $email;


    public function __construct($nome, $cognome, $età, $mail, $tipo)
    {
        $this->first_name = $nome;
        $this->last_name = $cognome;
        $this->age = $età;
        $this->email = $mail;
        $this->type = $tipo;
    }

    public function getDiscount()
    {
        if ($this->type == 'standard') {
            return "Congratulazioni $this->email! Lei ha diritto ad uno sconto del 20% essendo un utente $this->type." . "</br>" . "<hr>";
        }
    }
};

//* Classe per gli utenti premium
class PremiumUser extends User
{

    public function __construct($nome, $cognome, $età, $mail, $tipo)
    {
        $this->first_name = $nome;
        $this->last_name = $cognome;
        $this->age = $età;
        $this->email = $mail;
        $this->type = $tipo;
    }

    public function getDiscount()
    {
        if ($this->type == 'premium') {
            return "Congratulazioni $this->email! Lei ha diritto ad uno sconto del 45% essendo un utente $this->type." . "</br>" . "<hr>";
        }
    }
}

$usb_c_cable = new Product('Usb-c Cable 2m', 1, 3);
$Monitor = new Product('Monitor 144hz Full HD 24"', 185, 1);

$user_1 = new User('Roberto', 'Morreno', 48, 'robymor48@gmail.com', 'standard');
$user_2 = new PremiumUser('Angelo', 'Riva', 23, 'angeloriva@yahoo.it', 'premium');

echo ($usb_c_cable->getInfo());
echo ($Monitor->getInfo());
echo ($user_1)->getDiscount();
echo ($user_2)->getDiscount();
