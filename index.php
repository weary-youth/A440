
<?php
session_start();
?>



<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project_A440</title>
        <link rel="stylesheet" href="indexCSS.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>


    <body>
        <div id="container">
            <div id="header"></div>

            <div id="loginContainer">

                <button class="loginButton" id="hostButton">Host a Session</button>

                <button class="loginButton" id="guestButton">Login as Guest</button>

            </div>
            <!-- Login Container -->

            <!-- Host's Login -->
            <div id="hostLoginCon" class="modal">

                <form id="hostForm" class="modal-content animate"  action="/action_page.php">
                    <div class="imgcontainer">
                        <span class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname">
                            <b>Username</b>
                        </label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <button type="submit">Login</button>
                    </div>

                    <div class="container cancelCon" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- Guest Login Modal -->
            <div id="guestLoginCon" class="modal">

                <form id="guestForm" class="modal-content animate" action="/action_page.php">
                    <div class="imgcontainer">
                        <span class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname">
                            <b>Username</b>
                        </label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="sessionID">
                            <b>Session ID</b>
                        </label>
                        <input type="text" placeholder="Enter Session ID" name="sessionID" required>

                        <button type="submit">Login</button>
                    </div>

                    <div class="container cancelCon" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div> <!-- End of Login Modal -->

            <div id="footer"></div>

        </div> <!-- End of container -->

        <!--JS functions-->
        <script src="scripts/functions.js"></script>
        <!--JS scripts-->
        <script src="scripts/login.js"></script>
        <script src="scripts/initialize.js"></script>
        <script src="scripts/aesthetics.js"></script>

    </body>

</html>