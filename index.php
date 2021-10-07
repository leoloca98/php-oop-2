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

    public function getDetails()
    {
        return "Product: $this->name" . " </br>" . "<hr>" . "Price: $this->price" . "€" . " </br>" . "<hr> " . "Quantity: $this->amount" . " </br>" . "<hr> ";
    }
};
