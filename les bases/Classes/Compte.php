<?php
//Le fichier "Compte.php" contiendra donc la déclaration de classe "Compte" comme ceci
class Compte // Classe correspondant à un compte bancaire
{
    //nous allons pouvoir déclarer les propriétés de l'objet.
    public $titulaire; //Titulaire du compte
    public $solde; //solde du compte

    //Construteur de notre objet Compte
    //@param string $titulaire Titulaire du compte
    //@param float $solde Solde du compte

    public function __construct(string $titulaire, float $solde = 500)
    {
        // On affecte le titulaire à la propriété titulaire
        $this->titulaire = $titulaire;

        //On affecte le solde à la propriété solde
        $this->solde = $solde;
    }

    //Voir le solde du compte
    public function voirSolde() 
    {
        echo"le solde du compte est de $this->solde euros";
    }

    //Déposer de l'argent sur le compte
    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    }

    //Retire un montant du solde du compte
    public function retirer(float $montant)
    {
        //On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }

}