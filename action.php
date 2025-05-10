<?php
$file = 'people.txt';
$name = $_POST["name"];
$institution = $_POST["institution"];
$difficulty = $_POST["difficulty"];
$howlong = $_POST["howlong"];
$device  = $_POST["device"];
$comments = $_POST["comments"];
$entry = $file . "," . $name . "," . $institution . "," . $difficulty . "," . $howlong . "\n";
// Write the contents to the file,
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CarpentriesOffline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Online registration form, HTML, CSS, Mobile First">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!--Header section-->

<header>
    <h1>CarpentriesOffline</h1>
</header>
<main>
    <section>
        <h2>Hi there,</h2>

        <p>
            Thank you very much for helping us out. If you haven't done so yet, please also connect to our
            other access point to do the same as you have done here.
        </p>
    </section>
    <section>
        <h3>Your resonses were:</h3>
        <p>Name: <?php echo htmlspecialchars($_POST['name']); ?>.</br>
        Institution: <?php echo htmlspecialchars($_POST['institution']); ?>.</br>
        Difficulty: <?php echo (int) $_POST['difficulty']; ?>.</br>
        How long: <?php echo htmlspecialchars($_POST['howlong']); ?>.</br>
        Device: <?php echo htmlspecialchars($_POST['device']); ?>.</br>
        Comments: <?php echo htmlspecialchars($comments); ?>.</p>
    </section>

