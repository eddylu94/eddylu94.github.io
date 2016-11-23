﻿<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        #activityListing {
            margin-bottom: 100px;
            overflow: hidden;
            vertical-align: middle;
            text-align: right;
            position: relative;
            height: auto;
        }

        #activityListingText {
            text-align: left;
            position: absolute;
        }

        #activityListingDescription {
            margin-top: 20px;
        }

        #activityListingText h1 {
            margin: 0px 0px 2px 0px;
        }

        #activityListingImage {
            float: right;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="subheader">
        <h1>Interests</h1>
    </div>
    <div id="container">
        <div style="display: table; margin: 0 auto; width: 80%;">

            <div id="activityListing">
                <div id="activityListingText" style="width: 45%;">
                    <h1>Soccer</h1>
                    <div id="activityListingDescription">
                        Throughout the school-year at McGill, I participated in both men's and coed intramual soccer teams where we played games every week.
                        I enjoy playing on different recreational leagues in Seattle; and whenever I have time,
                        I also enjoy playing pick-up soccer and meeting new friends during drop-in sessions.
                    </div>
                </div>
                <img id="activityListingImage" src="soccer_2014_spring_mens_cropped.jpg" style="width: 50%; display: block; box-shadow: 10px 10px 15px #333333; margin: 20px;" />
            </div>

            <div id="activityListing">
                <div id="activityListingText" style="width: 45%;">
                    <h1>Hackathons</h1>
                    <div id="activityListingDescription">
                        I have enjoyed participating in annual coding competitions including CodeJam() and McHacks.
                    </div>
                </div>
                <div>
                    <img src="codejam.png" style="width: 30%; display: inline-block; vertical-align: middle;" />
                    <img src="mchacks.png" style="width: 20%; margin-left: 20px; display: inline-block; vertical-align: middle;" />
                </div>
            </div>

        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>