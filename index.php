<?php 

@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$age=$_POST["age"];
@$valider=$_POST["valider"];
$erreur ="";
if(isset($valider)) 
 if(empty($nom)) $erreur ="<li> nom laissé vide </li> ";
 if(isset($valider))
 if(empty($prenom)) $erreur.="<li> Prenom laissé vide </li>";
 if(isset($valider))
 if(! is_numeric($age)) $erreur.="<li> age laissé vide </li>";
 if(isset($valider))

 
  if((isset($valider))) {
    echo "$nom <br>";
    echo "$prenom <br>";
    echo "$age <br>";
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header> Inscription</header>

    <section>
        <form name="fo" method="post" action="">
            <div class="label">Nom</div>
            <div class="input">
                <input type="text" name="nom" value="<?php echo $nom?>"/>
            </div>
            <div class="label">Prenom</div>
            <div class="input">
                <input type="text" name="prenom"  value="<?php echo $prenom?>" />
            </div>
            <div class="label">Age</div>
            <div class="input">
            <input type="number" min="12" name="age"  value="<?php echo $age?>"/>
            </div>
            <div class="input">
                <input type="submit" name="valider" value="M'inscrire"/>
            </div>
    
        </form>
        <?php if(!empty($erreur)) {?>
        <div id="erreur"> <?php echo $erreur ?></div>
        <?php } ?>
    </section>
    <!-- 16mn -->
    
</body>
</html>