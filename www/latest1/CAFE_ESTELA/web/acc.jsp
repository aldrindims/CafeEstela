<%-- 
    Document   : acc
    Created on : Nov 20, 2016, 4:32:44 AM
    Author     : Simon
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Café Estela - Stocks</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        
    <style>
	body{
            background-image:url(bg.png);
            background-size:100%;
            background-attachment:fixed;
            max-width: 100%;
        }
        /* Full-width input fields */
        input[type=text]{
            width: 50%;
            padding: 14px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #ffffff;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            display: inline-block;
            border: none;
            cursor: pointer;
            width: 50%;
        }
        
        .button {
            background-color: lightgray;
            color: black;
        }

        .button:hover{
            background-color:#d9d9d9;
        }

        .button2 {
            background-color: white;
            padding: 5px;
            margin-right:5px;
            width: auto;  
            float:right;
            margin-top:-3%;
            font-size:15px;
        }

        .button2:hover{
            background-color: bisque;
        }
                 
        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding-right: 20px;
            background-color: #f44336;
        }
        
        .container {
            padding: 10px;
            text-align: center;
            background-color:white;
            width:auto; 
        }

        #container1{
            background-color:white;
            padding:15px 15px 15px;
            height:420px;
            overflow:scroll;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: 30%;
            padding: 10px 18px;
            background-color: #808080;
        }

        .container {
            padding: 10px;
            text-align: center;
        }

        span.psw {
            float: center;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 5; /* Sit on top */
            left: 300px;
            top: 100px;
            width: 50%; /* Full width */
            height: 50%; /* Full height *//* Enable scroll if needed */

            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 50%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
               display: block;
               float: none;
            }
            .cancelbtn {
               width: 50%;
            }
        }
        
        .modlog{
            height:40px;
            width:100px;
            background-color: #808080;
        }
	
	table {
            border-collapse: collapse;
            width: 80%;
	    text-align: center;
	    align-content: flex-start;
        }

        td {
            height:15px !important;
        }

        tr:nth-child(even){
            background-color: #f2f2f2 !important;
        }

        th{
            height:50px;
            text-align:center;
            background-color: #c1c1c1;
        }
	
    </style>
    
    <body>
        
        <% int a=9000;%>
        
        <div style="color:white; text-align:center; font-size: 40px; padding-top:20px;">
            <font face="BigNoodleTitling" size="40"> Café Estela</font>
            <div id="logOut">
                <form action ="index.html">
                    <button type="submit" class="button2">Log Out</button>
                </form>
            </div>
            <hr/>
        </div>
        
        <ul class="nav nav-tabs" style="margin-left:88%; margin-bottom:-6px; display:inline-block;">
            <li class="active">
                <a>Stocks</a>
            </li>
            <li>
                <a href="report.jsp" style="background-color: lightgrey">Report</a>
            </li>
        </ul>
        
        <div id="container1">
        
        <table border="1" width="800" cellspacing="5">
            <thead>
                <tr>
                    <th>Ingredients</th>
                    <th>Current Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                    <td>Caramel Sauce</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             6542 mL</button></td>
                </tr>   

                </tr>
                <tr>
                    <td>Choco Chips</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             2000 g</button></td>
                </tr>
                <tr>
                    <td>Chocolate Powder</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             3968 g</button></td>
                </tr>
                <tr>
                    <td>Coffee Bean</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                            <%=a%> g</button>
                            
                    </td>            

                </tr>
                <tr>
                    <td>Cookies & Cream Crashed&nbsp;&nbsp;</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             432 g</button></td>
                </tr>
                <tr>
                    <td>Dark Chocolate Sauce</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             18900 mL</button></td>
                </tr>
                <tr>
                    <td>French Vanilla Syrup</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             3750 mL</button></td>
                </tr>
                <tr>
                    <td>Green Tea</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             75 g</button></td>
                </tr>
                <tr>
                    <td>House Blend Tea</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             180 g</button></td>
                </tr>
                <tr>
                    <td>Mango Real Fruit</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             7560 mL</button></td>
                </tr>
                <tr>
                    <td>Matcha Latte Powder</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             2000 g</button></td>
                </tr>
                <tr>
                    <td>Peach Real Fruit</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             7560 mL</button></td>
                </tr>
                <tr>
                    <td>Strawberry Real Fruit</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             9450 mL</button></td>
                </tr>
                <tr>
                    <td>Vanilla Powder</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             15120 g</button></td>
                </tr>
                <tr>
                    <td>Whip Cream</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             15000 mL</button></td>
                </tr>
                <tr>
                    <td>White Choco Chips</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             2000 g</button></td>
                </tr>
                <tr>
                    <td>Whip Chocolate Sauce</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             9450 mL</button></td>
                </tr>
                <tr>
                    <td>White Syrup</td>
                    <td align="center"><button style.display='block' style="background-color:transparent; height:5px; vertical-align:middle; margin-top:-10px;">
                             3000 mL</button></td>
                </tr>
            </tbody>
        </table>
                            
        <script>
            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }        
        </script>
        
            <br>
	</div>   
        <button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; margin-right:10px;">Account </button>

        <div id="id01" class="modal">
            <form class="modal-content animate" action="samplee.jsp">
                <div class="imgcontainer"></div>
    
                <div class="container">
                    <center>
                        <label><font size="5"><b>Change password to</b></label><br><br></font>
                    </center>
                    
                    <button class="modlog">Admin</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    <button type="submit" class="modlog">Employee</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <center>
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
                    </center>
                </div>
            </form>
        </div>

    </body>
</html>
