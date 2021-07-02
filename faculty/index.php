<?php

$message = '';

class UrlPass
{
    public function getUrl()
    {
        extract($_POST);
        ini_set("allow_url_fopen", 1);
        $link = "https://bubt.edu.bd/global_file/getData.php?id=$faculty_id&type=empVerify";
        $json = file_get_contents($link);
        $obj = json_decode($json)[0];
        $check = $obj->EmpName;
        $check2 = $obj->FatherName;
        if ($check == NULL) {
            // return $msg1;
            return "You are not a faculty of BUBT";
        } else {
            // return $msg2;
            return "Welcome" . ' ' . $check . '' . "<br>" . '' . "Son of" . ' ' . $check2;
        }
    }
}

if (isset($_POST['btn'])) {
    $btn = new UrlPass();
    // $btn->getUrl();
    $message = $btn->getUrl();
}



//$string = 'I am happy today.';
//$replacement = 'very ';
//
//echo substr_replace($string, $replacement, 4, 0); // I am very happy today.


//echo $obj->sis_std_name;

//echo $check;

// $msg1 = "You are not a student of BUBT";
// $msg2 = "Welcome" . ' ' . $check;




?>

<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/signin.css">
<link rel="stylesheet" href="./css/style.css">

<form action="" method="POST" class="form-signin">
    <div class="container">
        <div class="text-center">
            <img src="img/studlab-animated.svg" alt="" width="250" height="250">
        </div>
        <label for="facultyId">Enter Your ID: </label>
        <input type="text" name="faculty_id" id="facultyId" class="form-control mb-3" placeholder="Enter full ID here..">
        <p> <?php echo $message; ?> </p>
        <input type="submit" name="btn" class="btn btn-lg btn-primary btn-block" value="Verify">
    </div>
</form>