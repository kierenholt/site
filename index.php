<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Corporate Events UK - Home</title>
</head>
<body>
    <div class="top">

    </div>
    <div class="middle fade-in-bg">
        <div class="left-margin fade-in">
            <h1>Your free venue search,</h1>
            <h1 >done <span class="adverb1">efficiently</span></h1>
            <p class="detail displayNone">info</p>
            <h1 class="margin-top"><span class="transparent">done</span> <span class="adverb2">effortlessly</span></h1>
            <p class="detail displayNone">info</p>
            <h1 class="margin-top"><span class="transparent">done</span> <span class="adverb3">individually</span></h1>
            <p class="detail displayNone">info</p>

            <div class="buttons">
                <button class="show-details" onclick="showdetails()">More info</button>
                <div class="button-spacer"></div>
                <button class="start-enquiry" href="contact.php">Start your enquiry today</button>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p class="company"><a href="about.php">Corporate Venues UK</a><img class="logo" src="images/logo.png"/></p>
    </div>

    <script>
    function showdetails() {
        let foundDetails = document.getElementsByClassName('detail');
        for (let item of foundDetails) {
            item.classList.remove("displayNone");
            item.classList.add("fade-in");
        }
    }
    </script>

</body>
</html>