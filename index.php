﻿<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            #propic {
                float: right;
                width: 45%;
                padding: 10px;
                box-shadow: 0px 0px 10px #CCCCCC;
            }
            #socialIcon {
                float: left;
                width: 50px;
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <div id="page_wrapper">
            <?php include 'header.php';?>
            <div id="body_wrapper">
                <div id="subheader">
                    <h1>Hello! I'm Eddy</h1>
                    <div id="subheader_title">This website was created to showcase my projects, work experience, and interests</div>
                </div>
                <div id="container" style="display: inline-block;">
                    <div style="float: left; width: 50%;">
                        <h1>About Me</h1>
                        I am currently a Software Engineer who recently graduated from McGill University.
                        <br /><br />
                        I enjoy working on different kinds of software projects from all parts of the development stack.
                        When I'm not programming, I enjoy playing soccer and basketball, and going out with friends!
                        <br /><br />
                        <i>This website was created without the use of any frameworks, templates, or bootstraps.</i>
                        
                        <div id="socialIcons" style="margin-top: 45px;">
                            <a href="https://facebook.com/eddylu94" target="_blank">
                                <img id="socialIcon" alt="Facebook" src="fb-icon_round.png"
                                    onmouseover="this.src = 'fb-icon_round_darkened.png'" onmouseout="this.src = 'fb-icon_round.png'" />
                            </a>
                            <a href="https://twitter.com/eddylu94" target="_blank">
                                <img id="socialIcon" alt="Twitter" src="tw-icon_round.png"
                                    onmouseover="this.src = 'tw-icon_round_darkened.png'" onmouseout="this.src = 'tw-icon_round.png'" />
                            </a>
                            <a href="https://linkedin.com/in/lueddy" target="_blank">
                                <img id="socialIcon" alt="LinkedIn" src="in-icon_round.png"
                                    onmouseover="this.src = 'in-icon_round_darkened.png'" onmouseout="this.src = 'in-icon_round.png'" />
                            </a>
                            <a href="https://plus.google.com/+eddylu94" target="_blank">
                                <img id="socialIcon" alt="Google+" src="gp-icon_round.png"
                                    onmouseover="this.src = 'gp-icon_round_darkened.png'" onmouseout="this.src = 'gp-icon_round.png'" />
                            </a>
                            <a href="https://instagram.com/eddylu94" target="_blank">
                                <img id="socialIcon" alt="Instagram" src="ig-icon_round.png"
                                    onmouseover="this.src = 'ig-icon_round_darkened.png'" onmouseout="this.src = 'ig-icon_round.png'" />
                            </a>
                        </div>
                    </div>
                    <img id="propic" alt="Profile Picture" src="propic.jpg" />
                </div>
                <?php include 'footer.php';?>
            </div>    
        </div>    
    </body>
</html>
