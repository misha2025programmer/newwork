<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    header("Content-Type:text/html;charset=UTF-8");
    $connect=mysqli_connect("localhost","root","","commentbase");
    if(isset($_POST["comment"]))
    {
        $comment=$_POST["comment"];
        $comment=mysqli_real_escape_string($connect,$comment);
        $comment=htmlspecialchars($comment, ENT_QUOTES | ENT_HTML5);
        if($comment!="")
        {
            mysqli_query($connect,"INSERT INTO `comments` (`comment`) VALUES ('$comment')");
        }
    }
    echo "Список комменатриев";
    echo "<br>";
    $result=mysqli_query($connect,"SELECT * FROM `comments`");
    $numrows=mysqli_num_rows($result);
    if($numrows)
    {
        $result=mysqli_fetch_all($result);
        for($i=0;$i<$numrows;$i++)
        {
            echo $result[$i][1];
            echo "<br>";
        }
    }
    mysqli_close($connect);
    ?>
    <form action="index8.php" method="post" name="commentform">
        <input type="text" placeholder="ВВЕДИТЕ КОММЕНТАРИЙ" name="comment">
        <button type="submit" name="commentbutton">
            Добавить комментарий
        </button>
    </form>
</body>
</html>