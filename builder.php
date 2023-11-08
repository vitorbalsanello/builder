<?php
 class PersonagemRPG
{
    private $nome;
    private $raca;
    private $classe;
    private $nivel;
    
    public function __construct($nome, $raca, $classe, $nivel)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->classe = $classe;
        $this->nivel = $nivel;
    }

    public function __toString()
    {
        return "Personagem: {$this->nome}, Raça: {$this->raca}, Classe: {$this->classe}, Nível: {$this->nivel}";
    }
}
interface ConstrutorPersonagemRPG
{
    public function construir();
}


 class ConstrutorPersonagemRPGConcreto implements ConstrutorPersonagemRPG
{
    private $nome;
    private $raca;
    private $classe;
    private $nivel;

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;
        return $this;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
        return $this;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
        return $this;
    }

    public function construir()
    {
        return new PersonagemRPG($this->nome, $this->raca, $this->classe, $this->nivel);
    }
}

class DiretorPersonagemRPG
{
    private $construtor;

    public function __construct(ConstrutorPersonagemRPG $construtor)
    {
        $this->construtor = $construtor;
    }

    public function criarPersonagem($nome, $raca, $classe, $nivel)
    {
        return $this->construtor
            ->setNome($nome)
            ->setRaca($raca)
            ->setClasse($classe)
            ->setNivel($nivel)
            ->construir();
    }
}

$construtor = new ConstrutorPersonagemRPGConcreto();
$diretor = new DiretorPersonagemRPG($construtor);

$personagem = $diretor->criarPersonagem("Eldric", "Humano", "Mago", 5);

echo $personagem;

?>