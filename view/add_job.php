<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a job</title>
</head>
<body>
<fieldset>
    <legend>Crer job</legend>
    <form action="../index.php?action=addJob" method="post">
    <div>
        <label for="nom">Nom:</label><br />
        <input type="text" id="nom" name="nom" />
    </div>
    <br>
    <div>
        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" />
    </div>
    <br>
    <div>
        <label for="password">Password:</label><br />
        <input type="text" id="password" name="password" />
    </div>
    <br>
    <div>
        <label for="contact">Contact:</label><br />
        <input type="text" id="nom" name="contact" />
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

</fieldset>
</body>
</html>