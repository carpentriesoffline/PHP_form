<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Athena Ozanich's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Online registration form, HTML, CSS, Mobile First">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!--Header section-->

<header>
    <h1>The Code Review</h1>
</header>

<main>

    <section>
        <h2>Sign up for our news letter</h2>
        <p>Get the latest news on how your code is doing right in your inbox</p>
    </section>

    <!--Main body of form-->
    <form class="gform" action="https://script.google.com/macros/s/AKfycbzVXiKwtEi89ZtOC0Ez_UiPmzDeLlYLqetn4EiDJWHjhXs25Kw/exec" method="POST">
        <!--Contact section of the form-->
        <div class="form-elements">
            <fieldset>
                <legend><h2>Contact Information</h2></legend>

                <label for="name">Full Name</label>
                <input id="name" aria-label="name" type="text" name="name" placeholder="This field is required" required>

                <label for="email">Email Address</label>
                <input id="email" aria-label="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="This field is required" required>

                <label for="phone-number">Phone Number</label>
                <input id="phone-number" aria-label="phone-number" type="tel" name="phone-number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="xxx-xxx-xxxx" placeholder="(xxx)xxx-xxxx">

                <label for="address">Street Address</label>
                <input id="address" aria-label="address" type="text" name="address" placeholder="1234 Elm Street">

                <label for="city">City</label>
                <input id="city" aria-label="city" type="text" name="city" placeholder="Haven">

                <!--Select and its corresponding options and label-->

                <label for="state">State</label>
                <select id="state" aria-label="state" name="state">
                    <option value="" disabled selected >Choose State</option>
                    <option>Ohio</option>
                    <option>Michigan</option>
                    <option>New York</option>
                    <option>Florida</option>
                </select>

                <label for="postal-code">Postal Code</label>
                <input id="postal-code" aria-label="postal-code" type="text" name="postal-code" placeholder="xxxxx">
            </fieldset>


            <!--Newsletter section of the form.-->


            <fieldset id="newsletter">
                <legend><h2>Newsletter</h2></legend>
                <p>Select the newsletters you would like to recieve.</p>

                <!--Checkboxes-->

                <input id="html" aria-label="html" type="checkbox" name="html">
                <label for="html">Html Newsletter</label>

                <input id="css" aria-label="css" type="checkbox" name="css">
                <label for="css">Css Newsletter</label>

                <input id="jscript" aria-label="jscript" type="checkbox" name="javascript">
                <label for="jscript">Javascript Newsletter</label>

                <p>Newsletter format prefernce.</p>

                <!--Radio buttons-->

                <input id="html-format" aria-label="html-format" type="radio" name="format-choice" value="html">
                <label for="html-format">Html</label>

                <input id="plain-text" aria-label="plain-text" type="radio" name="format-choice" value="plain-text">
                <label for="plain-text">Plain Text</label>

                <p>Other topics you'd like to hear about.</p>

                <!--Textarea and label-->

                <label for="message"></label>
                <textarea id="message" aria-label="message" name="message" placeholder="Type your messaage here."></textarea>
            </fieldset>
            <button type="submit">Submit</button>
        </div class="form-elements">
    </form>

    <!--End form-->

</main>

<footer>
    <p>Copyright The Code Review</p>
</footer>
<script data-cfasync="false" type="text/javascript" src="js/form-submission-handler.js"></script>
</body>

</html>