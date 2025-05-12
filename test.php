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

        <p>Welcome to Collaborations Workshop 2025 and thank you for checking in with CarpentriesOffline. Would you mind giving
        us your name and email address? You don't have to, but it would be nice to know who visited :-)</p>
        <p>We also have a few questions about your experience connecting to CarpentriesOffline, downloading a file,
        and browsing our web pages.</p>
        <p> Please click the link to download the book,
            <a href="The_Adventures_of_Tom_Sawyer.zip">The Adventures of Tom Sawyer</a>. The file is in zip format
            and its size is 15.8MB. The file was originally downloaded from the Gutenberg Project
            (https://gutenberg.org/ebooks/74).</a>
            Please check how long it takes to download the file.
        </p>
    </section>
    <form class="gform" action="action.php" method="post">
        <div class="form-elements">
            <!--
            <fieldset>
                <label for="name">Full Name</label>
                <input id="name" aria-label="name" type="text" name="name" placeholder="Not required" >
                <label for="institution">Institution</label>
                <input id="institution" aria-label="institution" type="text" name="institution" placeholder="Not required" >

            </fieldset>
            -->
            <fieldset id="questionnaire">
                <label for="difficulty">How easy/difficult was it to connect to carpentries-offline? (1-Easiest, 5-Very difficult)</label>
                <input id="difficulty" aria-label="difficulty" type="range" name="difficulty" min="1" max="5"
                       value="50" class="slider"  oninput="this.nextElementSibling.value = this.value">
                <output style="float:right">0</output>
                <label for="howlong">How long, in minutes, did it take download the file?</label>
                <input id="howlong" aria-label="howlong" type="text" name="howlong" placeholder="enter the number of minutes" >
                <label for="device">What device are you currently using?</label>
                <input id="device" aria-label="device" type="text" name="device" placeholder="device">
                <label for="comments">Some other comments?</label>
                <input id="comments" aria-label="comments" type="text" name="comments" placeholder="other comments">
            </fieldset>
            <button type="submit">Submit</button>
        </div>
    </form>
</main>
</body>
</html>