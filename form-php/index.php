<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form de Cadastro</title>
</head>

<body>

    <?php 
        $name = $email = $website = $comment = $gender = " ";
    ?>

<form action="index.php" type="POST">

    Nome: <input type="text" name="name" value="<?php echo $name;?>"> <hr>

    Email: <input type="text" name="email" value="<?php echo $email;?>"> <hr>

    Website: <input type="text" name="website" value="<?php echo $website;?>"> <hr>

    Comment: <textarea name="comment" cols="40" rows="5"><?php echo $comment;?></textarea> <hr>

    Gender:
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked"; ?> value="female">
    Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked"; ?> value="female">
    Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="other") echo "checked"; ?> value="female">
    Others    

</form>    

</body>

</html>