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
    <p class="company"><a href="about.php">Corporate Venues UK</a><img class="logo" src="images/logo.png"/></p>

    </div>
    <div class="middle fade-in-bg">
        <div class="left-margin fade-in">
            <h1>Your free venue search,</h1>
            <h1 >done <span class="adverb1">efficiently</span></h1>
            <p class="detail displayNone">Over 90% of our venue searches are completed in under 24 hours. Together, we can beat that deadline!</p>
            <h1 class="margin-top"><span class="transparent">done</span> <span class="adverb2">effortlessly</span></h1>
            <p class="detail displayNone">Planning an event is stressful. Allow us to share the burden so you can focus on business priorities.</p>
            <h1 class="margin-top"><span class="transparent">done</span> <span class="adverb3">individually</span></h1>
            <p class="detail displayNone">Every event is unique. We excel in providing tailored solutions that align with your goals and theme.</p>

            <div class="buttons">
                <button class="show-details" onclick="showdetails()">More info</button>
                <div class="button-spacer"></div>
                <button class="start-enquiry" href="contact.php">Start your enquiry today</button>
            </div>
        </div>
    </div>
    <div class="bottom">
        <img class="client" src="images/accenture.png" alt="Accenture">
        <img class="client" src="images/cisco.png" alt="Cisco">
        <img class="client" src="images/computacentre.png" alt="Computacentre">
        <img class="client" src="images/gsk.png" alt="GSK">
        <img class="client" src="images/ibm.png" alt="IBM">
        <img class="client" src="images/vmware.png" alt="Vmware">
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