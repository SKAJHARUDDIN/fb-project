<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* header section */
        .header{
            width: 100%;
            height: 95px;
            background-color: #39579D;
        }
        .left-side{
            width: 55%;
            float: left;
        }
        .left-side img{
            margin-left: 110px;
            margin-top: 10px;
        }
        .right-side{
            width: 40%;
            float: left;
            overflow: hidden;
            margin-top: 10px;
        }
        .right-side .tab{
            width: 100%;
        }
        .right-side .tab #email,
        .right-side .tab #password{
            color: white;
            font-weight: 500;
        }
        .right-side .tab input[type="text"],
        .right-side .tab input[type="password"]{
            width: 195px;
            height: 20px;
            margin-right: 7px;
        }
        .tab label, 
        .tab a{
            color: #D5DAEA;
        }
        .right-side .tab a{
            text-decoration: none;
        }
        .right-side .tab a:hover{
            text-decoration: underline;
        }
        .tab input[type="submit"]{
            padding: 2px;
            width: 70px;
            font-weight: 700;
            color: white;
            background: #307FF2;
            border-radius: 5px;
            border: 1px solid #d4d9e9;
        }
        .tab input[type="submit"]:hover{
            background: #d4d9e9;
            color: #307FF2;
        }
        
        /* header section end */


        /* body section start */
        .body{
            margin-top: 25px;
            background: linear-gradient(#ffffff, #D4D9E9);
        }
        .body::after{
            content: '';
            clear: both;
            display: block;
        }
        .body .left-b{
            width: 55%;
            float: left;
        }
        .body .left-b .content-l{
            width: 70%;
            margin: auto;
            /* margin-top: 25px; */
        }
        .body .left-b .content-l img{
            width: 100%;
            margin-top: 20px;
        }
        .body .left-b .content-l h2{
            color: #3B599F;
        }
        .body .right-b{
            width: 40%;
            float: left;
            overflow: hidden;
        }
        .content-r hr{
            width: 90%;
            border-bottom: 5px;
        }
        .body .right-b .content-r h2, p{            
            color: #3B599F;
            margin-bottom: 5px;
        }
        .body .right-b .content-r p{
            font-weight: 600;
            margin-bottom: 5px;
        }
        .body .right-b .content-r .tab-2{
            color: #0E385F;
            font-size: 20px;
        }
        .tab-2 input[type="text"],
        .tab-2 input[type="email"],
        .tab-2 input[type="password"]{
            width: 311px;
            height: 25px;
        }
        .tab-2 select{
            width: 102px;
            height: 25px;
        }
        .tab-2 a{
            font-size: 17px;
            font-weight: 500;
            text-decoration: none;
        }
        .tab-2 label{
            font-size: 17px;
        }
        .tab-2 a:hover{
            text-decoration: underline;
        }
        .tab-2 #signup-btn{
            width: 170px;
            height: 30px;
            padding: 0 15px;
            background: linear-gradient(#65AA53, #598C45);
            font-size: 15px;
            color: white;
            font-weight: 500;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .tab-2 #signup-btn:hover{
            background: linear-gradient(#598C45, #65AA53);
        }

        /* body section end */

        /* footer section start */
        .footer .container{
            width: 100%;
            margin: auto;
        }
        .top ul{
            width: 90%;
            margin: 10px auto;
            
        }
        .top hr{
            width: 90%;
            margin: auto;
            border-bottom: 5px;
        }
        .footer .container .top ul li{
            display: inline;
            margin-right: 5px;
        }
        .footer .container .top ul li a{
            text-decoration: none;
        }
        .footer .container .top ul li #dot{
            border: 1px solid;
            border-color: #E2E2E2;
            padding: 0 6px;
            background: #E2E2E2;
        }
        .footer .container{
            width: 90%;
            margin: auto;
        }
        .ftr{
            width: 90%;
            margin: auto;
        }
        .ftr ul li{
            display: inline;
            font-size: 15px;
        }
        .ftr ul li a{
            text-decoration: none;
        }
        .ftr span{
            display: inline-block;
            font-weight: 300;
            width: 250px;
            float: left;
        }
        .ftr ul{
            float: left;
            overflow: hidden;
        }
        .ftr ul li{
            margin-right: 4px;
        }
        .ftr ul li #lstchld{
            margin-right: none;
        }

        /* footer section end */
    </style>

</head>
<body width="100%">
    <div class="fb">
        <div class="header">
            <div class="left-side">
                <a href="#00">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="right-side">
                <div class="tab">
                    <table>
                        <tr>
                            <td id="email">Email</td>
                            <td id="password">Password</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="email">
                            </td>
                            <td>
                                <input type="password" id="password">
                            </td>
                            <td>
                                <input type="submit" value="Log In">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="checkbox"> <label for="checkbox">Keep me signed in</label></td>
                            <td><a href="#">Forgotten your password?</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <section class="body">
            <div class="container">
                <div class="left-b">
                    <div class="content-l">
                        <h2>Facebook helps connect and share with the people in your life.</h2>
                        <img src="img/connect.png" alt="connecting people">
                    </div>
                </div>
                <div class="right-b">
                    <div class="content-r">
                        <h2>Sign Up</h2>
                        <p>It's free and always will be.</p>
                        <hr>
                        <div class="tab-2">
                            <table>
                                <tr>
                                    <td id="fname">First Name:</td>
                                    <td><input type="text" id="fname"></td>
                                </tr>
                                <tr>
                                    <td id="lname">Last Name:</td>
                                    <td><input type="text" id="lname last"></td>
                                </tr>
                                <tr>
                                    <td id="email">Your Email:</td>
                                    <td><input type="email" id="email"></td>
                                </tr>
                                <tr>
                                    <td id="pass">New Password:</td>
                                    <td><input type="password" id="pass"></td>
                                </tr>
                                <tr>
                                    <td id="rpass">Re-Enter Password:</td>
                                    <td><input type="password" id="rpass"></td>
                                </tr>                            
                                <tr>
                                    <td id="gender">I am:</td>
                                    <td>
                                        <select name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td>
                                        <select name="date" id="date">
                                            <option value="">Day</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                        </select>
                                        <select name="month" id="month">
                                            <option value="">Month</option>
                                            <option value="jan">Jan</option>
                                            <option value="feb">Feb</option>
                                            <option value="mar">Mar</option>
                                        </select>
                                        <select name="year" id="year">
                                            <option value="">Year</option>
                                            <option value="">1999</option>
                                            <option value="">2000</option>
                                            <option value="">2001</option>
                                        </select>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Why do I need to provide my birthday?</a></td>
                                </tr>      
                                <tr>
                                    <td></td>
                                    <td><input id="signup-btn" type="submit" value="Sign Up"></td>
                                </tr>                                              
                                
                            </table>
                            
                            <hr>
                            <p class="lstlne"><a href="#">Create a Page</a> <label> for a celebrity, band or business. </label> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer class="footer">
            <div class="container">
                <div class="top">
                    <ul>
                        <li><a href="">English (US)</a></li>
                        <li><a href="">Español</a></li>
                        <li><a href="">Português (Brasil)</a></li>
                        <li><a href="">Français (France)</a></li>
                        <li><a href="">Deutsch</a></li>
                        <li><a href="">Italiano</a></li>
                        <li><a href="">اردو</a></li>
                        <li><a href="">हिन्दी</a></li>
                        <li><a href="" id="dot">...</a></li>
                    </ul>
                    <hr>
                </div>
                <div class="middle-last">
                    <div class="ftr">
                        <span>Facebook &copy 2021 <a href="@" style="text-decoration: none;">English (US)</a></span>
                        <ul>
                            <li><a href="">Mobile</a></li>
                            <li><a href="">Find Friends</a></li>
                            <li><a href="">Badges</a></li>
                            <li><a href="">People</a></li>
                            <li><a href="">Pages</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Advertising</a></li>
                            <li><a href="">Create a Page</a></li>
                            <li><a href="">Developers</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms</a></li>
                            <li id="lstchld"><a href="">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
</body>
</html>