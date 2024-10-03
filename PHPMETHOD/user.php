<?php
 class formulaireHandler{
    public $nom;
    public $prenom;
    public $date;
    public $année=2024;
    public $age;  

    function _construct($param1, $param2, $param3){
        $this -> nom = $param1;
        $this -> prenom = $param2;
        $this -> date = $param3;
    
      }
    public function recup(){
        $age;
        $année=2024;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nom = isset($_POST['nom'])?
            htmlspecialchars($_POST['nom']):'';
            $prenom = isset($_POST['prenom'])?
            htmlspecialchars($_POST['prenom']):'';
            $date = isset($_POST['date'])?
            htmlspecialchars($_POST['date']):'';

            $age = $année - (int)$date;

            echo  "Votre nom est $nom  $prenom  et vous avez  $age  ans";
        }else{
            echo "occune donées soumise !!!!";
        }
    }
 }
?>