<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/functions.php'; 
if(isset($_GET['id']) && $_GET['mode'])
{
$id = $assignment=$_GET['id'];
$mode = $_GET['mode'];
$updatedata = $task->updatedata($id);
$username = $updatedata[0]['u_name'];
$useremail = $updatedata[0]['u_email'];
$userphone = $updatedata[0]['u_phone'];
$userdob = $updatedata[0]['u_dob'];
}
else{
    $id = '';
    $mode = '';    
$username = '';
$useremail = '';
$userphone = '';
$userdob = '';
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link rel="stylesheet" href="css/raghu.css" />
    <title>Assignment</title>
    <style>
    .tabs .indicator {
        position: absolute;
        bottom: 0;
        height: 2px;
        background-color: #3f51b5;
        will-change: left, right;
    }

    .tabs .tab a {
        color: #3f51b5;
        font-size: 15px;
        font-weight: 800;
    }

    .tabs .tab a:hover,
    .tabs .tab a.active {
        background-color: transparent;
        color: #b1787a;
    }

    .tabs {
        font-family: "lato", sans-serif;
        font-weight: ;
    }

    .goal {
        font-family: "Galada", cursive;
    }

    @media only screen and (min-width: 600px) {
        .gallery-image {
            min-height: 10vh;
            height: auto;
            max-height: 10vh;
        }

        .brand-logo {
            width: 400px;
        }
    }

    @media only screen and (min-width: 900px) {
        .gallery-image {
            min-height: 30vh;
            height: auto;
            max-height: 30vh;
        }
    }
    </style>
</head>


<body class="grey lighten-4">
    <header>
        <nav>
            <nav class="white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Assignment</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="table.php">Table</a></li>
                    </ul>
                </div>


            </nav>
        </nav>
    </header>
    <main>
        <div class="section">
            <div class="row">
                <div class="col s12 m4 l4 offset-l4">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <form method="POST">
                                    <div class="input-field col s12 ">
                                        <label for="username">Name</label>
                                        <input type="text" name="username" id="username" value="<?=$username;?>">
                                    </div>
                                    <div class="input-field col s12 ">
                                        <label for="useremail">Email</label>
                                        <input type="text" name="useremail" id="useremail" value="<?=$useremail;?>">
                                    </div>
                                    <div class="input-field col s12 ">
                                        <label for="userphone">Contact number</label>
                                        <input type="text" name="userphone" id="userphone" value="<?=$userphone;?>">
                                    </div>
                                    <div class="input-fields col s12 ">
                                        <label for="userdob">DOB</label>
                                        <input type="text" class="datepicker" name="userdob" id="userdob"
                                            value="<?=$userdob;?>">
                                    </div>
                                    <p>GENDER</br>
                                        <label>
                                            <input name="gender" id="gender" type="radio" checked value="male" />
                                            <span>Male</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="gender" id="gender" type="radio" value="female" />
                                            <span>Female</span>
                                        </label>
                                    </p>
                                    <?php
                                    if($mode=="edit"){
                                        ?>
                                    <input type="hidden" name="id" id="id" value="<?=$id;?>">
                                    <div class="col s12">
                                        <button style="width:100%" id="buttonUpdate"
                                            class="btn waves-effect waves-light" type="button" name="submit">Update
                                        </button>
                                    </div>
                                    <?php }else{

                                    
                                    ?>
                                    <div class="col s12">
                                        <button style="width:100%" id="button" class="btn waves-effect waves-light"
                                            type="button" name="submit">Submit
                                        </button>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>