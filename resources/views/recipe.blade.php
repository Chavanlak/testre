<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap"
            rel="stylesheet"> --}}

        <link rel="stylesheet" href="style.css">
        <title>Recipe Website</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Mitr', sans-serif;
}
body{
    width: 100%;
    min-height: 100vh;
    background-color: #fff9ed;
    /* background-color: #c5c6c7; */
}
header{
   width: 100%;
    height: 60px;
    background-color: #FC8A17;
    color: #fff;
    display: flex;
    align-items: center;
 
}
.container{
    width: 90%;
    margin: 0 auto;
    display: flex;
    align-items: center;

    justify-content: space-between;
}
nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 20px;
    font-weight: 500;
}
.logo{
    font-size: 30px;
    font-weight: bold;
}
.hero{
    width: 100%;
    /* height: 400px; */
    height: auto;
    /* min-height: 300px;  */
    background-image: url('images/food.jpg');
    /* background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGZvb2R8ZW58MHx8fHwxNjg5NTY1NzA3&ixlib=rb-4.0.3&q=80&w=1080'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    padding: 140px 0;
    color: #fff;
}
.hero h2{
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}
.search-box{
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    /* background-color: red; */
    align-items: center;
  
}
.search-box input{
    width: 70%;
    /* height: 50px; */
    padding: 10px;
    border: 0;
    border-radius: 5px 0 0 5px;
    outline: none;
    font-size: 1rem;
    border: 1px solid #da291c;
}
.search-box button{
    /* font-size: 1rem; */
    padding: 10px 20px;
    outline: none;
   
    border: 2px solid #da291c;
    border-radius: 0px 5px 5px 0px;
    background-color: #da291c;
    color: #fff;
    cursor: pointer;
}
.nav-list ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-list li a {
  text-decoration: none;
  color: #333;
  padding: 8px 12px;
  border-radius: 5px;
}

.nav-list li a.btn {
  background-color: #4CAF50;
  color: white;
}
.nav-list li {
  cursor: pointer;
}



        </style>
    </head>
    <body>
        <header>
            <div class="container">
                <h1 class="logo">Recipe </h1>
                <nav class="nav-list">
                    <ul>
                        <!-- <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="recipes.html">Recipes</a></li>
                    <li><a href="contact.html">Contact</a></li> -->
                        <li class="btn" onclick="window.location.href='/login'">Home</li>
                        <li>About</li>
                        <li>Recipes</li>
                        <li>Contact</li>

                    </ul>
                </nav>
            </div>
        </header>
        <section class="hero">
            <div class="hero-section">
                <h2>Welcome to My Recipes</h2>
                <p>Serch mounth watering recipe to satisfy craving</p>
                <form action="#" class="search-box">
                    <input type="text" placeholder="Search for recipes...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </section>
        <section class="recipes">
            <h2>r</h2>
            <div class="recipe-section">
                <div class="recipe-card"></div>
           
                    <img src="images/fish-dish.jpg" alt="picture" width="640" height="427">
              
              
                <h1>Moohong</h1>
                <p>pig with palo curry</p>
            </div>
        </section>
        <section class="recipes">
            <h2>r</h2>
            <div class="recipe-section">
                <div class="recipe-card"></div>
                <img src="images/moohong3.jpg" alt="picture" width="640" height="427">
                <h1>NamprikKungSaeb</h1>
                <p>pig with palo curry</p>
            </div>
        </section>
        <section class="recipes">
            <h2>r</h2>
            <div class="recipe-section">
                <div class="recipe-card"></div>
                <img src="images/dish-4.jpg" alt="picture" width="640" height="427">
                <h1>NamprikKungSaeb</h1>
                <p>pig with palo curry</p>
            </div>
        </section>
        <section class="recipes">
            <h2>r</h2>
            <div class="recipe-section">
                <div class="recipe-card"></div>
                <img src="images/dish-1.jpg" alt="picture" width="640" height="427">
                <h1>NamprikKungSaeb</h1>
                <p>pig with palo curry</p>
            </div>
        </section>
        <section class="recipes">
            <h2>r</h2>
            <div class="recipe-section">
                <div class="recipe-card"></div>
                <img src="images/moohong2.jpg" alt="picture" width="640" height="427">
                <h1>NamprikKungSaeb</h1>
                <p>pig with palo curry</p>
            </div>
        </section>

    </body>
</html>