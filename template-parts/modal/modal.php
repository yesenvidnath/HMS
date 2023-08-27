<div id="id01" class="modal">

    <form id="login-form" action="login.php" method="POST" class="modal-content animate container" > 

        <!-- Display the error based on the error -->
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger"> <?=$_GET['error']?> 😒 </div>
        <?php }?>

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./img/user.png" alt="Avatar" class="avatar" width="50%">
        </div>

        <div>
            <label for="utype">User Type</label>
            <select id="utype" name="utype" aria-label="User Type">
                <option value="">Select User Type</option>
                <option value="staff">Staff</option>
                <option value="patient">Patient</option>
                <option value="admin">Admin</option>

            </select>
        </div>

        <div>
            <label for="uname">Username</label>
            <input id="uname" type="text" placeholder="Enter Username" name="uname" required="" >
        </div>

        <div>
            <label for="psw">Password</label>
            <input id="password" type="password" placeholder="Enter Password" name="psw" required>
        </div>

        <div>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1;  border-radius: 5px;">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>

    </form>
</div>

