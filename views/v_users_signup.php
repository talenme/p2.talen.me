<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email'>
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>

    <?php if(isset($error)): ?>
        <div class='error'>
            All fields are required - please re-check your input to ensure all fields are entered
            and email address is valid.<br>
        </div>
        <br>
    <?php endif; ?>    

    <input type='submit' value='Sign up'>

</form>