
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeHouse</title>
    <link rel="stylesheet" href="index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="viewMenu">
        <button><img
                src="sign-of-the-plate-of-food-symbol-is-isolated-on-a-white-background-plate-of-food-icon-color-editable-vector.jpg"
                class="viewMenuImg"></button>
    </div>
    <div id="header">
        <div id="nav">
            <div class="nav"><a href="loginSignup.html">LOGIN</a></div>
            <div class="nav"><a href="index2.html">ABOUT US</a></div>
            <div class="nav"><a href="#">CONTACT US</a></div>
            <div class="nav"><a href="MyOrder.php">ORDER NOW</a></div>
            <div class="nav"><a href="index1.html">RATE US</a></div>
        </div>
        <h1 class="heading">Coffee House</h1>
        <br>
        <span class="span1">A gift <span class="span2"><span class="auto-input"></span></span> the legacy of Daterra
            Coffee Farms, Brazil</span>
    </div>
    <div class="explore">
        <span>Experience the world famous Brazilian Cuisine</span>
    </div>
    <img src="pexels-photo-1640773.jpeg" class="bgimage">
    <div class="heading-time">
        <form action="all_BC.html">
            <button class="select" onclick="all_BC.html">ALL</button></form>
            <form action="Menu.html"><button class="select" onclick="Menu.html">BREAKFAST</button>
            </form>
            <form action="lunch.html"><button class="select" onclick="lunch.html">LUNCH</button>
            </form>
            <form action="dinner.html"><button class="select" onclick="lunch.html">DINNER</button>
            </form>
        </div>
        <a class="prev">&#10094</a>
    <a class="next">&#10095</a>
    <div class="breakfast">
        
        <img class="display" src="b1.jpg" alt="casava" height="80%" width="80%">
        <img class="display" src="b2.jpg" alt="brazilian jam toast" height="80%" width="80%">
        <img class="display" src="b3.jpg" alt="fuba cake" height="80%" width="80%">
        <img class="display" src="b4.jpg" alt="cuzcus" height="80%" width="80%">
        <img class="display" src="b5.jpg" alt="fresh fruits" height="80%" width="80%">
        <img class="display" src="b7.jpg" alt="acai-na-tigela" height="80%" width="80%">
        <img class="display" src="b6.jpg" alt="stuffed bread" height="80%" width="80%">
        <img class="display" src="b8.jpg" alt="steamed cornmeal" height="80%" width="80%">
        <img class="display" src="brazilian-cuisine-poster_8071-3735.avif" alt="steamed cornmeal" height="80%" width="80%">
        <img class="display" src="Brazil1.jpg" alt="steamed cornmeal" height="80%" width="80%">
        <img class="display" src="brazil2.jpg" alt="steamed cornmeal" height="80%" width="80%">
    </div>
    <div class="tour">
        <br>
         <h3>About Us:</h3>
         <br>
Welcome to Savory Bites, your ultimate online destination for all things food! Whether you're a seasoned chef, a culinary enthusiast, or just looking for delicious inspiration, our food website is here to tantalize your taste buds and satisfy your foodie cravings.
Explore a world of gastronomic wonders as we take you on a mouthwatering journey through the art of cooking and dining. Our food website is a treasure trove of delectable recipes, cooking tips, and in-depth culinary guides that cater to all skill levels. From quick weeknight meals to gourmet feasts, we've got you covered.
Key Features:
Delectable Recipes: Dive into a vast collection of recipes spanning various cuisines, dietary preferences, and skill levels. From classic comfort food to innovative fusion dishes, our recipes are curated to delight every palate.
Cooking Tips: Sharpen your culinary skills with our expert cooking tips and techniques. Learn the secrets to perfecting your knife skills, mastering various cooking methods, and plating dishes like a pro.
Food Blog: Immerse yourself in our informative and engaging food blog, where you'll find articles on food trends, ingredient spotlights, and insightful chef interviews. Stay updated with the latest in the culinary world.
Nutrition and Wellness: Discover the intersection of food and health with our nutrition and wellness section. Find balanced meal ideas, dietary guidelines, and tips for leading a healthier lifestyle.
Interactive Community: Join our food-loving community of home cooks and food enthusiasts. Share your culinary creations, exchange ideas, and engage in lively discussions in our forums and social media channels.
Restaurant Reviews: Uncover the best dining experiences in your area and around the world with our comprehensive restaurant reviews. Whether you're seeking hidden gems or fine dining establishments, our reviews will guide your culinary adventures.
Shopping Guides: Streamline your food shopping experience with our handpicked recommendations for ingredients, kitchen gadgets, and cookware. We make it easy to find the best tools for your culinary endeavors.
Newsletter: Stay connected with the latest food trends and updates by subscribing to our newsletter. Get mouthwatering recipes, cooking hacks, and culinary inspiration delivered straight to your inbox.

Savory Bites is your culinary companion, where passion meets the plate. Join us in celebrating the world of food, from farm to fork. Whether you're a novice cook or a seasoned pro, our food website has something for everyone. Explore, learn, and savor the magic of food with us. Bon appétit!
<iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/df4a8173-5748-46ee-be3d-08cde1b26235"></iframe>
</div>    
    <script src="index.js"></script>
    <script>
        $('document').ready(function () {
            var typed = new Typed(".auto-input", {
                strings: ["by", "to", "for"],
                typeSpeed: 250,
                backSpeed: 200,
                loop: true,
            });
        })
    </script>

</body>

</html>