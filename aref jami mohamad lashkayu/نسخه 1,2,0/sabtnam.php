<?php include 'sabtnamsors.php';?>
<!doctypehtml>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <title>sing</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet"href="sabtnam.css">
    </head>
    <body class="main">
        <div class="form">
            <div id="w1">
                <form action="" method="post">
                    <div class="form-control"><input name="name" required type="value"> <label><span style="transition-delay:0s">n</span><span style="transition-delay:50ms">a</span><span style="transition-delay:.1s">m</span><span style="transition-delay:150ms">e</span></label></div>
                    <div class="form-control"><input name="username" required type="value"> <label><span style="transition-delay:0s">U</span><span style="transition-delay:50ms">s</span><span style="transition-delay:.1s">e</span><span style="transition-delay:150ms">r</span><span style="transition-delay:.2s">n</span><span style="transition-delay:250ms">a</span><span style="transition-delay:.3s">m</span><span style="transition-delay:350ms">e</span></label></div>
                    <div class="form-control"><input name="email" required> <label><span style="transition-delay:0s">e</span><span style="transition-delay:50ms">m</span><span style="transition-delay:.1s">a</span><span style="transition-delay:150ms">i</span><span style="transition-delay:.2s">l</span></label></div>
                    <div class="form-control"><input name="password" required type="password"> <label><span style="transition-delay:0s">p</span><span style="transition-delay:50ms">a</span><span style="transition-delay:.1s">s</span><span style="transition-delay:150ms">s</span><span style="transition-delay:.2s">w</span><span style="transition-delay:250ms">o</span><span style="transition-delay:.3s">r</span><span style="transition-delay:350ms">d</span></label></div><label>لطفا جمع<?php echo $_SESSION['randomNumber1']; ?>و<?php echo $_SESSION['randomNumber2']; ?>را وارد کنید:</label><br><input name="captchaa"><br>
            </div>
            <div class="main"><button class="btn" id="e" name="e">submit</button></div>
            <div class="button-sing" style="display:flex;justify-content:center;align-items:center"><a class="taga" href="singin.php" style="margin-left:50px">sing in</a></div>
        </div>
    </body>

    </html>