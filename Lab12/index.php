<!DOCTYPE html>
<html>
    <head>
        <title>Shiba Inu Adoption Center</title>
        <link id="cssLinkID" rel="stylesheet" type="text/css" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    </head>
    <div class="background"></div>
    <body>
        <br>
        <div id="title"><span class="redblur">Shiba Inu Adoption Fair Event</span></div>
        <div id="container">
            <div class="newLine" style="height: 15px"></div>
            <br>
            <div id="nav"></div>
            <br>
            <div id="home" class="tab selected"> <a href="http://cis-linux2.temple.edu/~tuf49524/Lab7/jQuery/index.php">Home</a></div>
            <div id="facts" class="tab"> <a href="learn.jsp">About Shiba Inu</a></div>
            <div id="dogs" class="tab"> <a href="dogs.jsp">Dogs</a></div>
            <div id="adoptions" class="tab"> <a href="adpotions.jsp">Adopt</a></div>
            <div id="contact" class="tab"> <a href="http://cis-linux2.temple.edu/~tuf49524/Lab7/jQuery/contact.php">Contact</a></div>
            <div id="volunteer" class="tab"> <a href="volunteer.jsp">Volunteer</a></div>
            <div id="events" class="tab"> <a href="events.jsp">Events</a></div>
            <div id="members" class="tab"> <a href="membersOnly.php">Members</a></div>
            <div class="tab">
                <div class="menu">Labs
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab1/index.php">Lab 1</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab2/index.php">Lab 2</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab3/index.php">Lab 3</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab4/index.php">Lab 4</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab5/contact.php">Lab 5</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab6/index.php">Lab 6</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab7/jQuery/index.php">Lab 7</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab10/">Lab 10</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab11/">Lab 11</a>
                    <a href="http://cis-linux2.temple.edu/~tuf49524/Lab10/">Lab 12</a>
                </div>
            </div>	

        </div>

        <div class="newLine"></div>
        
        <div id="login" class="phpTabs"> <a href="logon.php">Login</a></div>
        <div id="logoff" class="phpTabs"> <a href="logoff.php">Log Off</a></div>
        <div id="loginStatus" class="phpTabs"> <a href="logonStatus.php">Check Login</a></div>
        <div id="userList" class="phpTabs"> <a href="display.php">User List</a></div>
        <div id="membersOnly" class="phpTabs"> <a href="membersOnly.php">Members Page</a></div>
        
        <div class="content_footer">
            <h1 id="heading1">Shiba Inu Puppies For Adoption</h1>
            <!--This site still has more puppies in need of adoptions!-->
            <div class="content selected contentbox">
                <!--<div class="contentbox">!-->
                <br>
                <p id="notice">Adopt a Shiba Inu Puppy Now!</p>
                <h2 id="doglist">
                    <ul>Liu Bei</ul>
                    <div class="myPics boxshadow">
                        <img src="https://vetstreet.brightspotcdn.com/dims4/default/0f42b23/2147483647/crop/0x0%2B0%2B0/resize/645x380/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F05%2Fae6220a81c11e0a0d50050568d634f%2Ffile%2FShiba-Inu-5-645mk070111.jpg" alt="LiuBei.jpg" style="width: 350px;height: 250px">
                    </div>
                    <p>Liu Bei</p>

                    <ul>Guan Yu</ul>
                    <div class="myPics boxshadow">
                        <img src="http://cdn.akc.org/Marketplace/Breeds/Shiba_Inu_SERP.jpg" alt="GuanYu.jpg" style="width: 350px;height: 250px">
                    </div>
                    <p>Guan Yu</p>

                    <ul>Zhang Fei</ul>
                    <div class="myPics boxshadow">
                        <img src="http://nebula.wsimg.com/fde0932bcaa022ec5a2ddba37d0b7d53?AccessKeyId=E8BC749E3F4CB56C9160&disposition=0&alloworigin=1" alt="ZhangFei.jpg" style="width: 350px;height: 250px">
                    </div>
                    <p>Zhang Fei</p>
                </h2>
                Change background style to:
                <button id="btnoriginal">Original</button>
                <button id="btnblue">Blue</button>
                <button id="btngreen">Green</button>
                <!--</div>!-->
            </div>
            <div class="content selected contentbox calculator">
                <form name="myform">
                    How many months are you willing to support the puppies?
                    <input type="text" id="month" value="0"> 
                    <br>
                    How much are you willing to donate per month? $
                    <input type="text" id="pay" value="0">
                    <br>
                    Total: $ <input type="text" id="total" value="0">
                    <br>
                    <input id="calc" type="button" value="Calculate">
                    <input id="submit" type="button" value="Submit">
                </form>
            </div>
        </div>
        <h3 class="footer selected">Web Site Designed by Duc Tran</h3>
    </body>
</html>