<html>

<head>
    <title>Food Order Website - Home Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    
    <style>
        body,html {height: 100%}
        body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
        .menu {display: none}
        .bgimg {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("https://www.w3schools.com/w3images/pizza.jpg");
            min-height: 90%;
        }
    </style>

    <!-- <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                alert('Records insert successful');
            });
        });
    </script> -->
        
    <!-- <script>
        $.validator.setDefaults({
            submitHandler: function() {
            alert("submit!");
            }
        });
        $().ready(function() {
            $("#reservationForm").validate();
        });
    </script> -->

    
    
</head>

<body>
    <!-- Navbar (sit on top)
    <div class="w3-top w3-hide-small">
        <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
            <a href="#" class="w3-bar-item w3-button">HOME</a>
            <a href="#menu" class="w3-bar-item w3-button">MENU</a>
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
        </div>
    </div>
    <!-- Contact -->
    <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
        <div class="w3-content">
            <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
            <p>Find us at some address at some place or call us at 05050515-122330</p>
            <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
            <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
            
            <form action="" method="" class="cmxform" id="reservationForm">
                <p>
                    <input class="w3-input w3-padding-16 w3-border" type="text" minlength="2" placeholder="Name" required name="Name">
                </p>
                <p>
                    <input class="w3-input w3-padding-16 w3-border" type="text" minlength="10" placeholder="Phone Number" required name="Phone">
                </p>
                <p>
                    <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People">
                </p>
                <p>
                    <input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00">
                </p>
                <p>
                    <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message">
                </p>
                <p>
                    <button class="w3-btn w3-light-grey w3-block" type="submit" name="submit" id="submit">SEND MESSAGE</button>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer
    <footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer> -->

    <!-- <script>
    // Tabbed Menu
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-red";
        }
        document.getElementById("myLink").click();
    </script> -->

    <script src="./js/jq/resForm.js"></script>
</body>

</html>