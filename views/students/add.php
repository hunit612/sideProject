<div id="addStudent">
    <?php
        if(isset($this->$id)){
            echo "New user has been successfully added";
        }
    ?>
    <form class="Frm" action="add" method="post">
        <ul>
            <li>
                <label>First Name</label>
                <input name="first_name" placeholder="Enter First Name">
            </li>
            <li>
                <label>Last Name</label>
                <input name="last_name" placeholder="Enter Last Name">
            </li>
            <li>
                <label>Address</label>
                <textarea name="address" placeholder="Enter Address">
                </textarea>
            </li>
            <li>
                <label>City</label>
                <input name="city" placeholder="Enter City">
            </li>
            <li>
                <label>State</label>
                <input name="state" placeholder="Enter State">
            </li>
            <li>
                <label>Zipcode</label>
                <input name="zip_code" placeholder="Enter Zip Code">
            </li>
            <li>
                <label>User Name</label>
                <input name="username" placeholder="Enter User Name">
            </li>
            <li>
                <labe>Password</labe>
                <input name="password" type="password">
            </li>
            <li>
                <input type="submit" name="submit" value="Add Student">
            </li>
        </ul>
    </form>
</div>/home/hunit/student-portal
/var/html/
