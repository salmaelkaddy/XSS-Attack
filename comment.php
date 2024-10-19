<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presistant XSS Attack</title>
</head>
<body>
    <h1 align="center"> Presistant XSS Attach</h1>
    <table align="center">
        <tr><td>
            <form action="includes/comment.php" method="post">
                <textarea row="6" cols="55" name ="comment" placeholder="Leave your comment" maxlength="400"></textarea>
                <table align="center">
                    <tr><td>
                        <input type="submit" name="Comment"/>
                    </td></tr>
                </table>
            </form>
        </td></tr>
    </table>
<br>
<br>
<table align="center">
<tr><td>
    <form action="includes/comment.php" method="post">
    Clear Table: <input type="submit" name="clear" value="Clear Table"/>
    </form>

</td></tr>

</table>
    
</body>
</html>