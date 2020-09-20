<link rel="stylesheet" type="text/css" href="css2.css">
<?php include 'menuheader.php';?>

<html>
    <head>
        <title>GO</title>
        </head>
    <body>
        <form action="searchtalentnext.php" method="POST">
            <center> <labe>Search-Talent</label>
                    <select name="talent">
                          <option>Singing</option>
                            <option>Dancing</option>
                            <option>Mimicry</option>
                            <option>Drawing</option>
                            <option>Outdoor-Games</option>
                            <option>Indoor-Games</option>
                            <option>Special-talent</option>
                            <option>others</option>
                    </select>
                    <input type="submit"   value="OK">
                    </lable>
        </form>
    </body>
    
</html>
<?php include 'footer.php';?>
