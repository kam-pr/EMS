<?php   

if (isset($_POST[$data]));

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if (empty($uname)) {
    header("Location: sign in.html?error="Username is required");
    exit();
}else if(empt($pass)){
    header("Location: sign in.html?error="Password is required");
    exit();
}else{
    echo "Valid input";
}

}else{
    header("Location: "sign in.html");
    exit();
}

?>