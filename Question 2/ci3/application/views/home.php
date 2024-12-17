<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
.fade{
    /* height: 520px; */
    /* width: Full; */
    background-color: rgba(255,255,255,0.13);
    /* position: absolute; */
    /* transform: translate(-50%,-50%); */
    /* top: 50%; */
    /* left: 50%; */
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    margin:25px;
}
.fade *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}

.navbar {
    background-color: rgba(255,255,255,0.13);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 30px 35px;
    margin:25px;
}

.nav-list {
  display: flex;
  justify-content: center;
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.nav-list li {
  margin: 0 15px;
}


.nav-link {
  color: white;
  text-decoration: none;
  font-size: 25px;
  font-weight: bold;
  transition: color 0.3s ease;
}


.nav-link:hover {
  color: #f0f0f0;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <nav class="navbar">
      <ul class="nav-list">
        <li><a href="<?php echo base_url('index.php/welcome/home'); ?>" class="nav-link">Home</a></li>
        <li><a href="<?php echo base_url('index.php/welcome/profile'); ?>" class="nav-link">Profile</a></li>
        <li><a href="<?php echo base_url('index.php/welcome/about_us'); ?>" class="nav-link">About Us</a></li>
        <li><a href="<?php echo base_url('index.php/welcome/Logout'); ?>" class="nav-link">Logout</a></li>
      </ul>
    </nav>

    <div class="fade">
        <h4>Full Name </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolores voluptas veritatis dicta aspernatur ullam aut voluptatem laudantium similique saepe at, quos officia deserunt ipsa harum non, ex odio reiciendis earum ad illo iste nemo! Facere neque sapiente, aliquam recusandae commodi expedita sunt laborum animi ullam eius odio in impedit, eos velit exercitationem fugit facilis, magnam qui corrupti. Laudantium, sequi voluptates. Id vitae cupiditate molestiae possimus, inventore adipisci fugiat maxime alias quibusdam quod porro corrupti molestias facilis illo sapiente, ducimus esse nam fugit! Eos ut corrupti tempore quasi dolores mollitia optio veritatis ullam maxime debitis, repellat vero ratione voluptatibus deserunt exercitationem veniam ipsam. Unde fuga illum, iusto earum nesciunt, magni sapiente fugit velit suscipit alias exercitationem assumenda officia, reiciendis accusantium modi optio? Nesciunt saepe dicta alias. Error, atque rerum laborum incidunt, at fuga fugit eius sit earum iure explicabo similique aut quasi voluptatem ipsum possimus dicta voluptatibus non! A, modi!</p>
        <p><b>Posted at 1/1/2019</b></p>
    </div>

    <div class="fade">
        <h4>Full Name </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolores voluptas veritatis dicta aspernatur ullam aut voluptatem laudantium similique saepe at, quos officia deserunt ipsa harum non, ex odio reiciendis earum ad illo iste nemo! Facere neque sapiente, aliquam recusandae commodi expedita sunt laborum animi ullam eius odio in impedit, eos velit exercitationem fugit facilis, magnam qui corrupti. Laudantium, sequi voluptates. Id vitae cupiditate molestiae possimus, inventore adipisci fugiat maxime alias quibusdam quod porro corrupti molestias facilis illo sapiente, ducimus esse nam fugit! Eos ut corrupti tempore quasi dolores mollitia optio veritatis ullam maxime debitis, repellat vero ratione voluptatibus deserunt exercitationem veniam ipsam. Unde fuga illum, iusto earum nesciunt, magni sapiente fugit velit suscipit alias exercitationem assumenda officia, reiciendis accusantium modi optio? Nesciunt saepe dicta alias. Error, atque rerum laborum incidunt, at fuga fugit eius sit earum iure explicabo similique aut quasi voluptatem ipsum possimus dicta voluptatibus non! A, modi!</p>
        <p><b>Posted at 1/1/2019</b></p>
    </div>

    <div class="fade">
        <h4>Full Name </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolores voluptas veritatis dicta aspernatur ullam aut voluptatem laudantium similique saepe at, quos officia deserunt ipsa harum non, ex odio reiciendis earum ad illo iste nemo! Facere neque sapiente, aliquam recusandae commodi expedita sunt laborum animi ullam eius odio in impedit, eos velit exercitationem fugit facilis, magnam qui corrupti. Laudantium, sequi voluptates. Id vitae cupiditate molestiae possimus, inventore adipisci fugiat maxime alias quibusdam quod porro corrupti molestias facilis illo sapiente, ducimus esse nam fugit! Eos ut corrupti tempore quasi dolores mollitia optio veritatis ullam maxime debitis, repellat vero ratione voluptatibus deserunt exercitationem veniam ipsam. Unde fuga illum, iusto earum nesciunt, magni sapiente fugit velit suscipit alias exercitationem assumenda officia, reiciendis accusantium modi optio? Nesciunt saepe dicta alias. Error, atque rerum laborum incidunt, at fuga fugit eius sit earum iure explicabo similique aut quasi voluptatem ipsum possimus dicta voluptatibus non! A, modi!</p>
        <p><b>Posted at 1/1/2019</b></p>
    </div>

    <div class="fade">
        <h4>Full Name </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolores voluptas veritatis dicta aspernatur ullam aut voluptatem laudantium similique saepe at, quos officia deserunt ipsa harum non, ex odio reiciendis earum ad illo iste nemo! Facere neque sapiente, aliquam recusandae commodi expedita sunt laborum animi ullam eius odio in impedit, eos velit exercitationem fugit facilis, magnam qui corrupti. Laudantium, sequi voluptates. Id vitae cupiditate molestiae possimus, inventore adipisci fugiat maxime alias quibusdam quod porro corrupti molestias facilis illo sapiente, ducimus esse nam fugit! Eos ut corrupti tempore quasi dolores mollitia optio veritatis ullam maxime debitis, repellat vero ratione voluptatibus deserunt exercitationem veniam ipsam. Unde fuga illum, iusto earum nesciunt, magni sapiente fugit velit suscipit alias exercitationem assumenda officia, reiciendis accusantium modi optio? Nesciunt saepe dicta alias. Error, atque rerum laborum incidunt, at fuga fugit eius sit earum iure explicabo similique aut quasi voluptatem ipsum possimus dicta voluptatibus non! A, modi!</p>
        <p><b>Posted at 1/1/2019</b></p>
    </div>




    <!-- <form>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
		<p>Don't have a Account ? <a href="<?php echo base_url();?>index.php/welcome/register" style="text-color:blue;">Register</a></p>
        </div>
    </form> -->
</body>
</html>