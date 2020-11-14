 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>DEK DEK's GALLERY | D'ORO COFFEE</title>
     <style>
         body {
             font-family: 'Mitr', sans-serif;
         }

         .nav-item {
             font-size: 14px;
         }

         .nav-link {
             color: white;
         }

         .nav-link:hover {
             color: #FA9773;
         }

         h5 {
             font-size: 16px;
         }

         #img1 {
             width: 224px;
             height: 84px;
             margin: 20px;
         }

         #line {
             width: 426px;
             height: 50px;
             border-top: 2px solid #547478;
         }

         a {
             color: white;
         }

         a:hover {
             color: #FA9773;

         }

         .dropbtn {
             background-color: #547478;
             color: white;
             font-size: 14px;
             border: none;
             cursor: pointer;
             transition-delay: 10s;
         }

         .dropdown {
             position: relative;
             display: inline-block;
             z-index: 999;
             text-align: center;
         }

         .dropdown-content {
             border-radius: 3px;
             opacity: 0.7;
             background-color: #547478;
             display: none;
             position: absolute;
             right: 0;
             min-width: 200px;
             /* top: 10px; */
             padding-left: 5px;
         }

         .dropdown-content a {
             color: white;
             text-decoration: none;
         }

         .dropdown-content a:hover {
             color: #FA9773;

         }

         .dropdown:hover .dropdown-content {
             display: block;
             color: white;


         }

         .dropdown-content:hover {
             transition-delay: 5s;
         }

         .child1,
         .child2 {
             height: 448px;
             background-size: cover;
             background-position: center;
         }

         .child1 {
             width: 317px;
         }

         .child2 {
             width: 622px;

         }

         .parent {
             overflow: hidden;
             position: relative;
             display: inline-block;
             cursor: pointer;
         }

         .child1,
         .child2 {

             background-size: cover;
             background-repeat: no-repeat;
             -webkit-transition: all 1s;
             -moz-transition: all 1s;
             -o-transition: all 1s;
             transition: all 1s;
         }

         .parent:hover .child1,
         .parent:focus .child1,
         .parent:hover .child2,
         .parent:focus .child2 {
             -ms-transform: scale(1.1);
             -moz-transform: scale(1.1);
             -webkit-transform: scale(1.1);
             -o-transform: scale(1.1);
             transform: scale(1.1);
         }

         .parent:hover .child1:before,
         .parent:focus .child1:before,
         .parent:hover .child2:before,
         .parent:focus .child2:before {
             display: block;
         }

         .parent:hover a,
         .parent:focus a {
             display: block;
         }

         .child1:before,
         .child2:before {
             content: "";
             display: none;
             height: 100%;
             width: 100%;
             position: absolute;
             top: 0;
             left: 0;
             background-color: rgba(64, 64, 64, 0.5);
         }

         @media screen and (max-width: 960px) {
             .parent {
                 width: 100%;
                 margin: 20px 0px
             }

         }

         .check {
             width: 20px;
         }

         .row {
             margin-bottom: 15px;
         }
         #whitespace_for_footer {
            width: 500px;
            height: 420px;
            margin-top: 80px;
            color: #c14e25;
        }
     </style>
 </head>

 <body>
     <div style="color: white;">
         <div class="top" style="font-size:30px; background-color: #104751;">
             <center><img id="img1" src="https://static.wixstatic.com/media/9fa84d_aa13b15690be45ba91c57715ccd883ae~mv2_d_3508_2480_s_4_2.png/v1/fill/w_280,h_105,al_c,q_85,usm_0.66_1.00_0.01/9fa84d_aa13b15690be45ba91c57715ccd883ae~mv2_d_3508_2480_s_4_2.webp">
             </center>
         </div>
     </div>

     <!--------------------- Header bar --------------------->
     <div style="color: white;">
         <ul class="nav justify-content-center navbar-light" style="background-color: #547478;">

             <li class="nav-item">
                 <a class="nav-link" href="index.html">HOME</a>
             </li>

             <div class="nav-item">
                 <li class="nav-link">
                     <div class="dropdown">
                         <button class="dropbtn">COMPANY</button>
                         <ul class="dropdown-content">
                             <a href="aboutus.html">ABOUT US</a><br>
                             <a href="fromfarmtocup.html">FORM FARM TO CUP</a>
                         </ul>
                     </div>
                 </li>
             </div>

             <li class="nav-item">
                 <a class="nav-link" href="product&services.html">PRODUCT & SERVICES</a>
             </li>

             <div class="nav-item">
                 <li class="nav-link">
                     <div class="dropdown">
                         <button class="dropbtn">NEWS&PROMOTION</button>
                         <ul class="dropdown-content">
                             <a href="#">NEWS & ACTIVITIES</a><br>
                             <a href="#">PROMOTIONS</a><br>
                             <a href="#">DEK DEK's GALLERY</a><br>
                             <a href="19th-anniversary.html">19th ANNIVERSARY</a>
                         </ul>
                     </div>
                 </li>
             </div>

             <div class="nav-item">
                 <li class="nav-link">
                     <div class="dropdown">
                         <button class="dropbtn">MEMBERSHIP</button>
                         <ul class="dropdown-content">
                             <a href="#">EARN & REDEEM</a><br>
                             <a href="#">PREMIUM COLLECTION</a><br>
                             <a href="#">MEMBERTIERS</a><br>
                             <a href="#">REGISTER NOW</a>
                         </ul>
                     </div>
                 </li>
             </div>

             <li class="nav-item ">
                 <a class="nav-link " href="# ">STORE LOCATIONS</a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link " href="# ">FRANCHISE</a>
             </li>

             <div class="nav-item">
                 <div class="dropdown">
                     <li class="nav-link">
                         <button class="dropbtn">CONTACT</button>
                         <ul class="dropdown-content" id="contact">
                             <a href="#">CONTACT US</a><br>
                             <a href="#">WORK WITH US</a>
                         </ul>
                     </li>
                 </div>
             </div>

         </ul>
     </div>
     <br>
     <!-- gallery -->
     <div class="container" style="padding-left: 100px;">
         <div style="width: 1000px;">
             <?php
                $pic = array(
                    "https://static.wixstatic.com/media/9fa84d_b74bc9c7cf2f4e2daf80d8f38d2d4b4d~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_b74bc9c7cf2f4e2daf80d8f38d2d4b4d~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_23328beb3e194fc2839dcc6e9b1e448a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_23328beb3e194fc2839dcc6e9b1e448a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_7f7d7c61c3584a25901a6c7cc030aac7~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_7f7d7c61c3584a25901a6c7cc030aac7~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_69908e9998ae415ab9f4c7bfa451e497~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_69908e9998ae415ab9f4c7bfa451e497~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a0ff46e7268a4adca49a1eed28c2a692~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a0ff46e7268a4adca49a1eed28c2a692~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_311ed97a22cc4fa3a19a4b6e573a1b4e~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_311ed97a22cc4fa3a19a4b6e573a1b4e~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_41fff04c78be4c408ac7d28ede8e5a32~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_41fff04c78be4c408ac7d28ede8e5a32~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_5aef55cff2a8407aaabba66fa65e39bb~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_5aef55cff2a8407aaabba66fa65e39bb~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a2a632f828774ea997782f2661496b2a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a2a632f828774ea997782f2661496b2a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_442ca497270e405b90b9ff3deae55b00~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_442ca497270e405b90b9ff3deae55b00~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_0a13bfe627564b11a96d0763917d6b50~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_0a13bfe627564b11a96d0763917d6b50~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_262dfea7182748ed981e922f3bb95d92~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_262dfea7182748ed981e922f3bb95d92~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_f062195fcfa64e96b96c535ef7159773~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_f062195fcfa64e96b96c535ef7159773~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_07a648f518744a32bd3029bd34a2f0da~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_07a648f518744a32bd3029bd34a2f0da~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_d5549b1b9147465bad56e0da1b258a8f~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_d5549b1b9147465bad56e0da1b258a8f~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_db8dd215a12644f3acf3bddfb9415f57~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_db8dd215a12644f3acf3bddfb9415f57~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_ec9c87a492a84df49a86b0b52aa30162~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_ec9c87a492a84df49a86b0b52aa30162~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_968d146c40c349fc8026117426d9af8a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_968d146c40c349fc8026117426d9af8a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_8a1e610ab02e49308272e56f90fc951d~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_8a1e610ab02e49308272e56f90fc951d~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_49fb2e036d754abf8b74b5ac001b41cc~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_49fb2e036d754abf8b74b5ac001b41cc~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_305e155589de40e5b00871571b9b8443~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_305e155589de40e5b00871571b9b8443~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_8fdc829fd3df4cd483a56b2068aebdd7~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_8fdc829fd3df4cd483a56b2068aebdd7~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_ba8797b9bce940269e1eb90e3d85b583~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_ba8797b9bce940269e1eb90e3d85b583~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_05fc584b19e7454a8e0e855a8f0a3526~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_05fc584b19e7454a8e0e855a8f0a3526~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a55accf59c2f400cbcf557931a0ce7dd~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a55accf59c2f400cbcf557931a0ce7dd~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a66e26a645264c43ae6a18dcf654016a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a66e26a645264c43ae6a18dcf654016a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_367d64e906194764b0672050a2759294~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_367d64e906194764b0672050a2759294~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_5def3baaccc244bbbe94119823a35a1d~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_5def3baaccc244bbbe94119823a35a1d~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_f2f9e3cc820f4c62ab90f6edb4dc1a29~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_f2f9e3cc820f4c62ab90f6edb4dc1a29~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_e2728c90116a4f6b8cfe6a69138e1477~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_e2728c90116a4f6b8cfe6a69138e1477~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_8916bc83945148a6bb28c9270d03cf56~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_8916bc83945148a6bb28c9270d03cf56~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_b3748ec2f1fe486cad320d1561908ebd~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_b3748ec2f1fe486cad320d1561908ebd~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_43e0e6f7d26e4e20ae5338876dd4d04a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_43e0e6f7d26e4e20ae5338876dd4d04a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_24054b1f04ce429aad7ce75c27595df8~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_24054b1f04ce429aad7ce75c27595df8~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_9f5ea90323074806b4797baefcb97adf~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_9f5ea90323074806b4797baefcb97adf~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_50eb304a95ad46f9a2beb2d20fecdfd8~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_50eb304a95ad46f9a2beb2d20fecdfd8~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_c642abe7a5c447b28b22fcd008e96159~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_c642abe7a5c447b28b22fcd008e96159~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_10394cc83fc748f498b43ca7ce492ff6~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_10394cc83fc748f498b43ca7ce492ff6~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_7a969184d9c545cba6f0ffb1bd340fb7~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_7a969184d9c545cba6f0ffb1bd340fb7~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_2a81cb9541d6423a9cf02ba7bd7acf35~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_2a81cb9541d6423a9cf02ba7bd7acf35~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_be5bb6ed0d99413b93f0fe1289ff5a41~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_be5bb6ed0d99413b93f0fe1289ff5a41~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_e30091d38d764d9ebfe0864d60b28d55~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_e30091d38d764d9ebfe0864d60b28d55~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_46f322d2f3a343d39a3996ee09fd3ee6~mv2_d_1654_2340_s_2.jpg/v1/fill/w_521,h_737,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_46f322d2f3a343d39a3996ee09fd3ee6~mv2_d_1654_2340_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_dbbfa7f870e94304b0ee7fe93abfa24d~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_dbbfa7f870e94304b0ee7fe93abfa24d~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_9543a497d3854065b779695200b6af46~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_9543a497d3854065b779695200b6af46~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_c8bdc052b266487881c3ea039d339529~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_c8bdc052b266487881c3ea039d339529~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_0aa7cf81011d4de3b8ad811d12be8855~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_0aa7cf81011d4de3b8ad811d12be8855~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_f9ea7e8c2ef44d7ab6503a6e8ef841a3~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_f9ea7e8c2ef44d7ab6503a6e8ef841a3~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a4cd7b3242084aefa32a3fdbaa8742b3~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a4cd7b3242084aefa32a3fdbaa8742b3~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_0b478797cfdb406ea4e49bdadc68d43b~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_0b478797cfdb406ea4e49bdadc68d43b~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_a35d964730ad4ca1a0d2ca4ea3c9fb26~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_a35d964730ad4ca1a0d2ca4ea3c9fb26~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_ea69f44ec59942acbe31130dc9fdc797~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_ea69f44ec59942acbe31130dc9fdc797~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_4074aaa28b4a4c55883d1b0167f7ed0d~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_4074aaa28b4a4c55883d1b0167f7ed0d~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_23cb1b1cf6da40ce8a7109327b6ae9fe~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_23cb1b1cf6da40ce8a7109327b6ae9fe~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_179ad4f880374e37b9717d9f1cd70370~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_179ad4f880374e37b9717d9f1cd70370~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_812c2f99afe04ea1a4f18e3017d416c5~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_812c2f99afe04ea1a4f18e3017d416c5~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_f9d9f9e88b674e58a4282c38bd136385~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_f9d9f9e88b674e58a4282c38bd136385~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_b3d29e02e2234ee781a0af1af8b8069a~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_b3d29e02e2234ee781a0af1af8b8069a~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_5fb708a5545344eb9ec7e70494acdf71~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_5fb708a5545344eb9ec7e70494acdf71~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_adbc57288e3e4d589f9d1225ecfe7718~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_adbc57288e3e4d589f9d1225ecfe7718~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_8b0e2c3a771a48698ca0245de8972b14~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_8b0e2c3a771a48698ca0245de8972b14~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_e8713b5c6c7345ad8032e14eace69c50~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_e8713b5c6c7345ad8032e14eace69c50~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_d5bef8fc530b4964ae4d852df6a5cdbc~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_d5bef8fc530b4964ae4d852df6a5cdbc~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_e9297fac407f49e2a44eac74e28be4cd~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_e9297fac407f49e2a44eac74e28be4cd~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_cd4b43d36c7944aca8602ebd95279d76~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_cd4b43d36c7944aca8602ebd95279d76~mv2_d_2340_1654_s_2.webp",
                    "https://static.wixstatic.com/media/9fa84d_49e2eddf62524c5a998f2396b308eda0~mv2_d_2340_1654_s_2.jpg/v1/fill/w_879,h_622,fp_0.50_0.50,q_90,usm_12.60_0.42_0.19/9fa84d_49e2eddf62524c5a998f2396b308eda0~mv2_d_2340_1654_s_2.webp"

                );
                for ($i = 0; $i <= 60; $i += 4) {
                    echo "<div class='row'>";
                    echo "<div class='parent'>";
                    echo "<div class='child1' style='background-image: url(" . $pic[$i] . ")'></div>";
                    echo "</div>";
                    echo "<div class='check'></div>";
                    echo "<div class='parent'>";
                    echo "<div class='child2' style='background-image: url(" . $pic[$i + 1] . ")'></div>";
                    echo "</div></div>";
                    echo "<div class='row'>";
                    echo "<div class='parent'>";
                    echo "<div class='child2' style='background-image: url(" . $pic[$i + 2] . ")'></div>";
                    echo "</div>";
                    echo "<div class='check'></div>";
                    echo "<div class='parent'>";
                    echo "<div class='child1' style='background-image: url(" . $pic[$i + 3] . ")'></div>";
                    echo "</div></div>";
                }
                for ($i = 64; $i <= 64; $i++) {
                    echo "<div class='row'>";
                    echo "<div class='parent'>";
                    echo "<div class='child1' style='background-image: url(" . $pic[$i] . ")'></div>";
                    echo "</div>";
                    echo "<div class='check'></div>";
                    echo "<div class='parent'>";
                    echo "<div class='child2' style='background-image: url(" . $pic[$i + 1] . ")'></div>";
                    echo "</div></div>";
                }
                ?>
         </div>
     </div>

     <!-- Footer -->
     <footer>
         <div id="all" style="background-color:#104751; text-align: center; color: white; overflow-x: hidden;">
             <h5 style="padding-top: 70px;">BE THE FIRST TO KNOW ABOUT OUR PROMOTIONS AND SPECIAL DISCOUNTS!</h5>
             <div class="input-container" style="border-bottom: 2px solid white; width: 300px; display: inline-block; margin-top: 10px;">
                 <i class="fa fa-envelope icon"></i>
                 <input class="input-field" type="text" placeholder="Email Address" name="email" style="background-color: #104751; border: 0px; width: 250px;">
             </div>
             <button style="width: 150px; height: 35px; padding: 7px; border: 1px solid white ; background-color: #104751; color: white;">Subscribe
                 Now</button>

             <h5 style="padding-top: 70px; ">Follow Us:</h5>
             <a href="https://web.facebook.com/D.OroThailand.1999/?_rdc=1&_rdr " target="_blank ">
                 <img src="https://static.wixstatic.com/media/9fa84d_e63dbce0bb9e4f7a90d32a72805f9818~mv2.png/v1/fill/w_61,h_75,al_c,q_85,usm_0.66_1.00_0.01/9fa84d_e63dbce0bb9e4f7a90d32a72805f9818~mv2.webp " style="width: 60px; height: 70px; ">
             </a>
             <a href="https://www.instagram.com/d.orothailand/ " target="_blank ">
                 <img src="https://static.wixstatic.com/media/9fa84d_d3948ed9d69148e599c064356306daa3~mv2_d_1772_1772_s_2.png/v1/crop/x_218,y_0,w_1306,h_1772/fill/w_68,h_75,al_c,q_85,usm_0.66_1.00_0.01/9fa84d_d3948ed9d69148e599c064356306daa3~mv2_d_1772_1772_s_2.webp " style="width: 55px; height: 60px; ">
             </a>
             <a href="https://line.me/R/ti/p/%40d.orothailand " target="_blank ">
                 <img src="https://static.wixstatic.com/media/9fa84d_2f89e2501a684967881e398a7f82e6c9~mv2_d_1772_1772_s_2.png/v1/crop/x_280,y_0,w_1244,h_1772/fill/w_61,h_75,al_c,q_85,usm_0.66_1.00_0.01/9fa84d_2f89e2501a684967881e398a7f82e6c9~mv2_d_1772_1772_s_2.webp " style="width: 50px; height: 65px; ">
             </a>

             <div style="width: 100%; height: 45px; background-color: #c14e25; margin-top: 25px; ">
                 <h5 style="padding-top: 12.5px; ">Copyright©2018 by Golden Cream Ltd,. (D'ORO) all right reserved.
                 </h5>
             </div>

             <div style="width: 100%; height: 25px; ">

             </div>
         </div>
         <div style="text-align: right; margin-top: -370px; margin-right: 450px; ">
             <img src="https://static.wixstatic.com/media/9fa84d_9e11f129b9ca47aa9fd2ba61836a0988~mv2_d_2362_2362_s_2.png/v1/fill/w_150,h_125,al_c,q_85,usm_0.66_1.00_0.01/9fa84d_9e11f129b9ca47aa9fd2ba61836a0988~mv2_d_2362_2362_s_2.webp " width="120px
            " height="100px ">
         </div>
     </footer>
 </body>

 </html>