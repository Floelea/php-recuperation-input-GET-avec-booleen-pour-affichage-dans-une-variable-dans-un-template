<?php 

$secret = "Bien joué !!!";
$pass = "kaamelott";
$modeRevelation = false;

$contenuPage = "<form class='d-flex ms-5'>
                    <input type='text' name='motdepasse' value=''>
                    <button type='submit' name='' value='' class='btn btn-success ms-3' >Découvrir le secret</button>
                </form>";

$type = "";


if(isset($_GET["motdepasse"])){
    $type = $_GET["motdepasse"];
};

// var_dump($pass);
// var_dump($type);
// var_dump($secret);



if($type == $pass){
    $modeRevelation = true;
    // var_dump($modeRevelation);

};

if($modeRevelation){
  $contenuPage = $secret;
}else {
    $contenuPage;
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Php/secret">Page des secrets</a>
     
      </div>
    </div>
  </div>
</nav>
<p class="ms-5 mt-5">Indice : Cette série française est la plus drôle...</p>

<h4 class=""> <?php echo $contenuPage; ?></h4>
    


</body>
</html>