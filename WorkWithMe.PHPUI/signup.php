<?php
session_start();

/* Check if there is an incoming POST */

/* If so, process the user request */

/* Store result in a variable.  false = failed to create user, true = created successfully */

/* In the HTML below, display different stuff depending on the result */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
</head>
<body>
<header><?php include './includes/header.php' ?></header>
<hr/>
<nav><?php include './includes/nav.php' ?></nav>
<main>
    <form action="signup.php" method="post">

        <fieldset>
            <legend>About You</legend><br />

            <label for="txtFName">First Name:</label>
            <input type="text" id="txtFName" name="txtFName" placeholder="first name" autofocus required><br />

            <label for="LastName">Last Name:</label>
            <input type="text" id="txtLName" name="txtLName" placeholder="last name" required><br />

            <label for="Email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="e-mail" required><br />

        </fieldset>

        <fieldset>
            <legend>Address Information</legend><br />

            <div id="safetyWarningText">Your address will not be shared with anyone unless you choose to share it.</div>
            <label for="txtAddress">Address:</label>
            <input type="text" name="txtAddress" id="txtAddress" placeholder="address" required></input><br />

            <label for="txtCity">City:</label>
            <input type="text" name="txtCity" id="txtCity" placeholder="city" required></input><br />

            <label for="lstState" class="dropdown">State:</label>
            <select name="lstState" id="lstState" value="select" required>

                <option>choose a state</option>
                <option value="AL">AL</option>
                <option value="AR">AR</option>
                <option value="AZ">AZ</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DC">DC</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="IA">IA</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="MA">MA</option>
                <option value="MD">MD</option>
                <option value="ME">ME</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MO">MO</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="NE">NE</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NV">NV</option>
                <option value="NY">NY</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
            </select><br /><br />

            <label for="txtZip">Zip:</label>
            <input type="text" name="txtZip" id="txtZip" maxlength="5"
                   placeholder="5 digit zip code" required></input><br /><br />
        </fieldset>

        <fieldset>
            <legend>Security</legend><br />

            <label for="txtUsername">Username:</label>
            <input type="text" name="txtUsername" id="txtUsername" placeholder="username" required></input><br />

            <label for="txtPassword">Password:</label>
            <input type="password" name="txtPassword" id="txtPassword" placeholder="enter password" required><br />

            <label for="txtPwdVerify">Password Verify:</label>
            <input type="password" name="txtPwdVerify" id="txtPwdVerify" placeholder="re-enter password" required><br />
        </fieldset>

        <fieldset>
            <legend>Finalize</legend><br />

            <div id="buttons">
                <ul>
                    <li><input type="submit" class="button" id="btnRegister" name="btnRegister" value="Register"></li>
                    <li><input type="reset" class="button" id="btnClear" name="btnClear" value="Clear"></li>
                </ul>
            </div>
        </fieldset>

    </form>
</main>
<div id="rightNav"><?php include './includes/rightnav.php' ?></div>
<footer><?php include './includes/footer.php' ?></footer>
</body>
</html>