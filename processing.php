<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cricket.css">
    <title>Signed up</title>
</head>
<body>
    <header><H1>Mahalo for Signing up</H1></header>
    <nav>
            <a href="Home.html">Home</a>
            <a href="History.html">History</a>
            <a href="Rankings.html">Ranking</a>
            <a href="Platforms.html">Platforms</a>
            <a href="Teams.html">Teams</a>
            <a href="form.html">Signup</a>
            
        </nav>
   
<main>

<P>Team Name: <?php print $_POST['Team']?></P> 
<P>Coach Name: <?php print $_POST['Firstname']?></P> 
<P>Email: <?php print $_POST['Email']?></P> 
<P>Contact Number: <?php print $_POST['Contactnumber']?></P> 
<P>State: <?php print $_POST['State']?></P> 

</main>    
</body>
<footer>
Your information is Encrypted
</footer>
</html>