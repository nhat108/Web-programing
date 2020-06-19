<html>

<head>
    <style>
        th {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $name = "";
    $email = "";
    $website = "";
    $gender = "";
    $comment = "";
    $nameError = "";
    $emailError = "";
    $genderError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailError="Email is required";
        }else{
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["gender"])){
            $genderError="Gender is required";
        }else{
            $gender = test_input($_POST["gender"]);
        }
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h1>PHP Form Validation Example</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <th>Name</th>
                <td>
                    <input type="text" name="name">
                    <span style="color: red;"><?php echo $nameError?></span>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="email" name="email">
                    <span style="color: red;"><?php echo $emailError?></span>
                </td>
            </tr>
            <tr>
                <th>Website</th>
                <td>
                    <input type="url" name="website">
                </td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>
                    <textarea rows="5" name="comment"></textarea>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <input type="radio" name="gender" value="female">
                    <label>Female</label>
                    <input type="radio" name="gender" value="male">
                    <label>Male</label>
                    <span style="color: red;"><?php echo $genderError?></span>
                </td>
            </tr>
            <tr>
                <th>
                    <input type="submit" name="submit" value="Submit">
                </th>
            </tr>

        </table>
    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Comment: $comment <br>";
    echo "Gender: $gender <br>";
    ?>
</body>

</html>
