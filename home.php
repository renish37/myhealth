<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHealth</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Amaranth&family=Josefin+Sans&family=Montserrat:wght@100;300&family=Padauk&family=Smooch&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

body{
    background: #222;
    margin: 0px;
}

nav{
    border: 1px solid black;
    padding: 25px;
    background-color: black;
    color: white;
}

.main_nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.main_nav a{
    color: white;
    text-decoration: none;
}

.logo{
    font-size: 18px;
    font-family: cursive;
}

.menubar{
    font-size: 18px;
}

.container{
    max-width: 100%;
    /* margin: 0px 20px; */
    border: 1px solid black;
    background-image: url(app-assets/images/414.jpg);
    height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color:  #302f2f;
    background-blend-mode: overlay;
}

@media(max-width: 1490px){

    html,body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .container{
        padding: 20px;
    }

}

@media(max-width: 414px){

    html,body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

 .about1_lorem{
    margin-left: -50px;
    margin-top: 20px;
 }

 .about2_lorem h2{
    margin-left: 20px;
 }

 .about2_img{
    margin-top: 20px;
 }

 .sub_info1{
    padding: 30px;
 }

 input.submit_btn{
    width: 60%;
 }

 .about_1{
    flex-wrap: wrap;
}

.about_2{
    flex-wrap: wrap;
}

}



.info1{
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 288px;
}

.info1 h1{
    font-size: 65px;
    font-weight: 600;
    font-family: 'Amaranth', sans-serif;
}

@media(max-width: 375px){

    html,body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .info1 h1{
        font-size: 40px;
    }

    .about1_lorem{
        margin-left: -10px;
    }

    .about_1{
        flex-wrap: wrap;
    }

    .about_2{
        flex-wrap: wrap;
    }
   
   }

.info1 h3{
    font-size: 22px;
    margin-top: 10px;
    color: #bbbbbb;
    
}

.info1_btn{
    margin-top: 20px;
}

.info1_btn button{
    padding: 10px 20px 10px 20px;
    border-radius: 7px;
    border: none;
}

.section2{
    
    margin-top: 150px;
}

.heading1 h1{
    color: white;
    font-size: 35px;
    text-align: center;
}

@media(max-width: 780px){

    html,body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .container{
        padding: 20px;
    }

}

@media(max-width: 320px){

    html,body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .info1 h1{
        font-size: 30px;
    }

    .about1_lorem{
        margin-left: -10px;
    }

    .about_1{
        flex-wrap: wrap;
    }

    .about_2{
        flex-wrap: wrap;
    }
   
   }


.container_2{
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 15px;
}

.about_1{
    display: flex;
    /* flex-wrap: wrap; */
    justify-content: center;
    align-items: center;
    /* border: 1px solid black; */
    margin-top: 75px;
}

.about1_img{
    max-width: 100%;
}

.about1_img img{
    width: 100%;
}

.about1_lorem{
    /* position: relative;
    left: 60px; */
    margin-left: 60px;
    color: white;
}

.about1_lorem h2{
    width: 89%;
    color: rgba(255, 255, 255, 0.3);
    font-size: 20px;
}


.section3{
    
    margin-top: 150px;
}

.heading2 h1{
    color: white;
    font-size: 35px;
    text-align: center;
}


.container_3{
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 15px;
}

.about_2{
    display: flex;
    /* flex-wrap: wrap; */
    justify-content: center;
    align-items: center;
    /* border: 1px solid black; */
    margin-top: 75px;
}

.about2_img{
    max-width: 100%;
}

.about2_img img{
    width: 100%;
}

.about2_lorem{
    position: relative;
    left: 0px;
    color: white;
}

.about2_lorem h2{
    width: 89%;
    color: rgba(255, 255, 255, 0.3);
    font-size: 20px;
}

section.sub_section6 {
    margin-top: 150px;
}

.main_info{
    /* border: 1px solid white; */
    display: flex;
    margin-top: 75px;
    flex-wrap: wrap;
    justify-content: center;
}

.sub_info1 {
    width: 635px;
}

.sub_info1 h1{
    color: white;
    font-size: 25px;
}

.sub_info2{
    /* border: 1px solid white;  */
    /* width: 475px;
    padding-left: 48px; */
    margin: 46px;
}

.sub_info2 h1{
    color: white;
    font-size: 25px;
}

.get_ip {
    display: flex;
    flex-direction: column;
    margin-top: 38px;
    flex-wrap: wrap;
}

input.ip_1 {
    width: 100%;
    padding: 15px;
    border-radius: 5px;
    border: 0px;
    background-color: #333;
    margin: 10px 0px;
}

textarea {
    width: 100%;
    padding: 15px;
    border-radius: 5px;
    border: 0px;
    background-color: #333;
    margin: 10px 0px;
}

input.submit_btn {
    width: 40%;
    padding: 14px;
    border-radius: 51px;
    letter-spacing: 4px;
    color: white;
    background-color: #b2c251;    
    margin-top: 15px;

}

.info2_txt .p1{
    color: #2c3e50;
    margin-top: 20px;
}

.info2_txt .p2{
    color: rgba(255, 255, 255, 0.3);
    margin-top: 11px;
}

.info2_txt {
    margin-top: 33px;
}

footer {
    margin-top: 200px;
    padding-bottom: 80px;
}

footer p{
        text-align: center;
        font-size: 17px;
        color: rgba(255, 255, 255, 0.3);
}

.social_logo {
    margin-top: 70px;
}

.social_logo ul{
    display: flex;
    justify-content: center;
    font-size: 30px;
    flex-wrap: wrap;
}

.social_logo ul li{
    margin: 15px 15px;
}

.social_logo ul li{
    list-style: none;
}

i.fa-brands.fa-facebook-f {
    padding: 10px 15px 10px 15px;
    border-radius: 43px;
    background-color: #333;
    color: #b2c251;
    border: 0px;
}

i.fa-brands {
    padding: 10px 11px 10px 11px;
    border-radius: 43px;
    background-color: #333;
    color: #b2c251;
    border: 0px;
}




    </style>
</head>
<body>
<header>

<nav>
    <div class="main_nav">
        <div class="logo"> <a href="#"> My Health</a></div>
        <div class="menubar"> <a href="#"> <i class="fa-solid fa-bars"></i> </a></div>
    </div>
</nav>

</header>

<section>
    <div class="container">
        <div class="info1">
            <h1>My Health</h1>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, est!</h3>

            <div class="info1_btn">
                <button onclick="location.href = 'login.php';" style="cursor: pointer;">Join now</button>
            </div>
        </div>
    </div>
</section>


<section class="section2">
    <div class="container_2">

        <div class="heading1"><h1>Patient's Role</h1></div>

        <div class="about_1">
            <div class="about1_img">
                <img src="app-assets/images/415.jpg" alt="">
            </div>

            <div class="about1_lorem">
                
               <h2> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem atque nisi, obcaecati unde esse beatae officiis nihil amet ipsum tempora laborum consequatur asperiores temporibus suscipit vero labore necessitatibus, nemo culpa id! Qui quaerat exercitationem cupiditate aut id omnis impedit? Harum.  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis illo reiciendis atque molestiae culpa dicta, officia expedita iure consectetur praesentium?  </h2></div>

        </div>
    </div>
</section>

<section class="section3">
    <div class="container_3">

        <div class="heading2"><h1>Doctor's Role</h1></div>
        <div class="about_2">
        <div class="about2_lorem">
                
            <h2> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem atque nisi, obcaecati unde esse beatae officiis nihil amet ipsum tempora laborum consequatur asperiores temporibus suscipit vero labore necessitatibus, nemo culpa id! Qui quaerat exercitationem cupiditate aut id omnis impedit? Harum.  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis illo reiciendis atque molestiae culpa dicta, officia expedita iure consectetur praesentium?  </h2></div>

     
            <div class="about2_img">
                <img src="app-assets/images/412.jpg" alt="">
            </div>
            

        </div>
    </div>
</section>

<section class="sub_section6">

  

    <div class="main_info">

        <div class="sub_info1">

            <h1>My Health Contact</h1>

            <div class="get_ip">

                <input type="text" name="name" placeholder="Your Name" class="ip_1">

                <input type="email" name="mail" placeholder="Your E-mail"  class="ip_1">

                <input type="number" name="phone" placeholder="Your Phone"  class="ip_1">

                <textarea name="message" cols="30" rows="10" placeholder="Write a Message" ></textarea>

                <input type="submit" value="SEND" class="submit_btn">
            </div>

        </div>

        <div class="sub_info2">

            <!-- <h1>My Contact Details</h1> -->

            <div class="info2_txt">

            <p class="p1">EMAIL</p>
            <p class="p2">brij@gmail.com</p>

            <p class="p1">PHONE</p>
            <p class="p2">+91 9954369210</p>


            <p class="p1">ADDRESS</p>
            <p class="p2">B-101 , Silver Business Point <br>
                Mota Varachha <br>
                Surat</p>

        </div>

        </div>

    </div>

</section>

<footer>
    <p>Copyright &copy; 2022 All rights reserved | Myhealth</p>

    <div class="social_logo">

        <ul>
            <li><i class="fa-brands fa-facebook-f"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-linkedin-in"></i></li>
            <li><i class="fa-brands fa-vimeo-v"></i></li>
        </ul>

    </div>
</footer>



</body>
</html>