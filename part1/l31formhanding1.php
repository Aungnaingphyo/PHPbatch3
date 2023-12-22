<?php

    //  group variation
    $name = $email = $password = $city = $favcolor = $bio = "";

    // if($_SERVER["REQUEST_METHOD"] === "POST"){
    //     $name = $_POST["name"];
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     $city = $_POST["city"];
    //     $favcolor = $_POST["favcolor"];
    //     $bio = $_POST["bio"];
    // }
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = textfilter($_POST["name"]);
        $email = textfilter($_POST["email"]);
        $password = textfilter($_POST["password"]);
        $city = textfilter($_POST["city"]);
        $favcolor = textfilter($_POST["favcolor"]);
        $bio = textfilter($_POST["bio"]);
    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling 1</title>
</head>
<body>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="" value="">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="" value="">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="" value="">
        </div>
        
        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="" value="">
        </div>
    
        <div>
            <label>Fav Color</label>
            <input type="radio" name="favcolor" id="favrd" class="" value=""><label for="favrd">Red</label>
            <input type="radio" name="favcolor" id="favgn" class="" value=""><label for="favgn">Green</label>
            <input type="radio" name="favcolor" id="favbl" class="" value=""><label for="favbl">Blue</label>
        </div>

        <div>
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" class="" id="" rows="5" cols="50"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>

    <?php
        echo "<h2>My Information Are...</h2>";
        echo "Name is $name <br/>";
        echo "Email is $email <br/>";
        echo "Password is $password <br/>";
        echo "City is $city <br/>";
        echo "Fav Color is $favcolor <br/>";
        echo "Bio is $bio <br/>";
    ?>

</body>
</html>

<!-- get နဲ့ပို့ တာ url address နဲ့လှမ်းပို့တာ  -->