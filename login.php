<!DOCTYPE html>
<html>
    <head>
        <title>Login Website Layout</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include ('header.php');
            include ('menu.php');
        ?>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2>Login Form</h2>
                    <div class="container">
                        <from action="/action_page.php">
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Username</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="username" placeholder="username..">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="Iname">Password</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="Iname" name="password" placeholder="password...">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                include ('konten_kanan.php');
            ?>
        </div>
        <?php
            include ('footer.php');
            ?>
    </body>
</html>