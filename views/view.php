<DOCTYPE html>
<html>
<head>
    <title>Project 2</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
</head>
    <body>
        <div class="row">
            <nav class="col-xs-12 col-md-12 navbar navbar-default navbar-static-top">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="http://p1.ehay.me">Project 1</a></li>
                        <li role="presentation"><a href="http://p2.ehay.me">Project 2</a></li>
                        <li role="presentation"><a href="#">Project 3</a></li>
                        <li role="presentation"><a href="#">Project 4</a></li>
                    </ul>
                </div>
            </nav>
            <br>
            <br>
            <br>
        </div>
        <div class="row">
            <!-- main column left -->
            <div class="col-xs-1 col-md-2"></div>
            <!-- main column center -->
            <div class="col-md-8 container">
                <p><?= $password?></p>
                <form action="index.php" method="POST" class="inner">
                    Word Count:
                        <input type="text" name="wordcount" value="1"><br>
                    Numbers:
                        <input type="checkbox" name="numbers" value="y"><br>
                    Upper Case:
                        <input type="checkbox" name="uppercase" value="y"><br>
                    Special Characters:
                        <input type="checkbox" name="specialcharacters" value="y"><br>
                    <input type="submit" class="btn btn-info">
                </form>

            </div>
            <div class="col-xs-1 col-md-2"></div>
        </div>
        <footer class="divider"></footer>

        <!-- js scripts -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>
