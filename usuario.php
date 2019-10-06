<?php
class Usuario{
    //Atributos
    private $username;
    private $email;
    private $senha;
    private $experiencia;
    private $dinheiro;
    private $pokeCapturados;
    private $pokemonTime;
    private $badges;
    private $pokebola;
    private $consumiveis;


    public function __construct($name, $email){
        $this->username = $name;
        $this->email = $email;
        $this->experiencia = 0;
        $this->dinheiro = 0;
        $this->pokeCapturados = 0;
        $this->pokemonTime = 0;
    }

    

}
