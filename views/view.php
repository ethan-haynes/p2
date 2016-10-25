<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
    <body>
        <div class="row">
            <nav class="col-xs-12 col-md-12 navbar navbar-default navbar-static-top">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="http://p1.ehay.me">Project 1</a></li>
                        <li role="presentation"><a href="http://p2.ehay.me">Project 2</a></li>
                        <li role="presentation"><a href="http://p3.ehay.me">Project 3</a></li>
                        <li role="presentation"><a href="http://p4.ehay.me">Project 4</a></li>
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
            <div class="col-xs-10 col-md-8 container text-center">
                <h1 class="title">
                    P2
                </h1>
                <div>
                    <div class="article-title">Password Generator</div>
                    <div class="half-line"></div>
                    <div>Fruits &amp; Veggies Eddition</div>
                </div>
                <br>
                <br>
                <!-- value updated by model -->
                <p><?= $password?></p>
                <form action="index.php" method="POST" class="inner">
                    Word Count:
                        <input type="text" name="wordcount" value="1"><em class="note">*</em><br>
                    Numbers:
                        <input type="checkbox" name="numbers" value="y">
                        <br>
                    Upper Case:
                        <input type="checkbox" name="uppercase" value="y" id="uppercase">
                        <span id="caps">
                            Pascal Case:
                            <input type="radio" name="caps" value="pc" checked>
                            All Caps:
                            <input type="radio" name="caps" value="ac"></span><br>
                    Special Characters:
                        <input type="checkbox" name="specialcharacters" value="y" id="specialChars">
                        <span id="numSC">Number:
                        <input type="text" name="numSC" value="1"><em class="note">*</em></span>
                        <br>
                        <br>
                        <div class="col-xs-12 col-md-12 text-center">
                            <input type="submit" class="btn btn-info">
                        </div>
                </form>
                <div>
                    <div class="line"></div>
                    Please use a valid number between 1-8
                    <em class="note">*</em>
                </div>
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
