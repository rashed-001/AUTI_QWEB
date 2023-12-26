<?php 

	//include header file
	include ('include/headerr.php');

?>

<body>
    <!-- header start -->
    <div class="header1">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px" alt="Not found database erroe!!">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li> <a href="index.php">Home</a> </li>
                        <li> <a href="puzzle/index.php">Puzzle</a> </li>
                        <li> <a href="learn.php">Learning</a> </li>
                        <li> <a href="contact.php">Contact</a> </li>
                        <li> <a href="">IQ Test</a> </li>
                        <li> <a href="">Logout</a> </li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        
            <div class="row">
                <div class="col2">
                    <h1>If they can't learn the way we teach, <br> we teach the way they learn.</h1>
                    <p>
                        Autism is not a disease <br>
                        Autism spectrum disorder (ASD) <br>
                        is a developmental disability <br>
                        caused by differences in the brain <br>
                        
                        <a href="" class="btn"> Introductory Video &#8594;</a>
                    </p>
                </div>
                <div class="col2">
                    <img src="images/Img2.png" height="600px"width="500px" alt="Not found! DBMS Error!">
                </div>
            </div>
        </div>
    </div>
    <!-- Header Complete -->

   <!-- body start     -->

   <div class="catagories">
    <div class="small-container">
        <div class="row">
            <div class="col3">
                <img src="images/image1.webp" alt="not Found">
            </div>
            <div class="col3"><img src="images/img3.png" alt="Not Found"></div>
            <div class="col3"><img src="images/img4.png" alt="Not Found"></div>
        </div>
    </div>
</div>

    <!-- Learn things -->
<div class="header2">
 <div class="container">
    <div class="row">
        <div class="col2">
            <h1>Learn Colors <br> The way you can learn.</h1>
            <p>
                Here <br>
                You can learn about <b>Colors</b> <br>
                after clicking below buttton <br>
                Lets start <br>
                
                <a href="learncolor.html" class="btn"> Learn Color &#8594;</a>
            </p>
        </div>
        <div class="col2">
            <img src="images/COLOR.jpg" height="600px"width="600px" alt="Not found! DBMS Error!">
        </div>
    </div>

    <!-- fruit -->
    <div class="row">
        <div class="col2">
            <h1>Learn about Fruits <br> The way you can learn.</h1>
            <p>
                Here <br>
                You can learn about <b>Fruits</b> <br>
                after clicking below buttton <br>
                Lets start <br>
                
                <a href="" class="btn"> Learn Fruits &#8594;</a>
            </p>
        </div>
        <div class="col2">
            <img src="images/FRUITS.webp" height="600px"width="600px" alt="Not found! DBMS Error!">
        </div>
    </div>
    <!-- fruit finished  -->
    <!-- bird -->
    <div class="row">
        <div class="col2">
            <h1>Learn about birds <br> The way you can learn.</h1>
            <p>
                Here <br>
                You can learn about <b>Birds</b><br>
                after clicking below buttton <br>
                Lets start <br>
                
                <a href="Learn/bird.html" class="btn"> Learn Birds &#8594;</a>
            </p>
        </div>
        <div class="col2">
            <img src="images/BIRDS.jpg" height="600px"width="600px" alt="Not found! DBMS Error!">
        </div>
    </div>
    <!-- bird finished -->
<div class="col2"><a href="learn.html" class="btn"> see more &#8594;</a></div>

 </div>
</div>


   <!-- Learn finished -->
   <!-- body finished  -->
   
   <!-- Footer -->
    <!-- --- js for toogle menu ---- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>

<?php 

	//include header file
	include ('include/footer.php');

?>
