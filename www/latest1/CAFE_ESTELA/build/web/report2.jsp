<%-- 
    Document   : report2
    Created on : Nov 20, 2016, 7:04:29 PM
    Author     : Simon
--%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Café Estela - Report</title>
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
        
        button {
            background-color: #808080;
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
            font-size:15px;
        }
            *{
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
         
         .button2:hover{
             background-color: bisque;
         }
         
         
        .button3 {
           background-color: white;
           padding: 5px;
           margin-right:5px;
           width: auto;  
           float:right;
           margin-top:-3%;
           font-size:15px;
       }
            *{
                   box-sizing: border-box;
                   -webkit-box-sizing: border-box;
                   -moz-box-sizing: border-box;
            }
         
         .button3:hover{
             background-color: bisque;
         }        

        .button4 {
            background-color: lightgray;
            color: black;
        }

        .button4:hover{
            background-color:#d9d9d9;
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
        .btn{
            padding: 14px 20px;
            margin: 8px 0;
            display: block;
            border: none;
            cursor: pointer;
            font-family: 'Verdana';
            font-size: 14px;
        }

        /* Extra styles for the cancel button */
        .btn.cancel {
            width: 50%;
            position: relative;
            padding: 10px 18px;
            background-color: #f44336;
            color: #fff;
        }
        .btn.cancel:hover{
                background-color: #d7352a;
        }


        .container {
            padding: 10px;
            text-align: center;
            align-content: flex-start;
            width: auto;
        }

        span.psw {
            float: center;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal-overlay{
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.5);
                display: none;
                z-index: 99;
                top: 0;
                left: 0;
        }
        .modal {
            display: none; /* Hidden by default */
            position: absolute; /* Stay in place */
            z-index: 5; /* Sit on top */
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 50%; /* Full width */
            height: auto; /* Full height *//* Enable scroll if needed */
            color: white;
            background-color: transparent; /* Black w/ opacity */
            padding-top: 50px;
            z-index: 999;
        }
        .modal2 {
            display: none; /* Hidden by default */
            position: absolute; /* Stay in place */
            z-index: 5; /* Sit on top */
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            max-width: 30%; /* Full width */
            height: auto; /* Full height *//* Enable scroll if needed */
            color: white;
            background-color: transparent; /* Black w/ opacity */
            padding-top: 50px;
            z-index: 999;
        }


        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            position: relative;
            padding: 15px ; /* 5% from the top, 15% from the bottom and centered */
            width: 100%; /* Could be more or less, depending on screen size */
            z-index: 999;
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
               width: 100%;
            }
        }
        .info-table tr{
                cursor: pointer;
        }
        .info-table tr td{
                border: 1px solid black;
                padding:  10px;
        }
        .modal .data-table{
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
        }
        .modal .data-table tr th{
                font-weight: 600;
                color: #908b8b;
        }
        .modal .data-table tr td, .modal .data-table tr th{
                border: 1px solid #000;
                color: #000000;
                font-family: 'Verdana';
                font-size: 14px;
                padding: 10px;
        }
        .modal .btn.cancel{
                margin-left: auto;
                margin-right: auto;
                width: 300px; 
        }
        .cancelbtn {
            width: 30%;
            padding: 10px 18px;
            background-color: #808080;
        }
        .modlog{
            height:40px;
            width:100px;
            background-color: lightgray;
            vertical-align:middle;

        }

        #container1{
            background-color:white;
            padding:15px 15px 15px;
            height:370px;
            overflow:scroll;

        }

        table {
            border-collapse: collapse;
            width: 80%;
            align-content: flex-start;
        }

        td {
                   height:15px !important;
            }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        th{
            height:50px;
            text-align:center;
            background-color: #c1c1c1;
        }

    </style>
    
    <body>
        <div style="color:white; text-align:center; font-size: 40px; padding-top:20px;">
            <font face="BigNoodleTitling" size="40"> Café Estela</font>
            <div id="logOut">
                <form action ="index.html">
                    <button type="submit" class="button3">Log Out</button>
                </form>
            </div>
            <hr/>
        </div>
        
        <ul class="nav nav-tabs" style="margin-left:88%; margin-bottom:-6px; display:inline-block;">
            <li>
                <a href="acc.jsp" style="background-color: lightgrey">Stocks</a>
            </li>
            <li class="active">
                <a href="report.jsp" >Report</a>
            </li>
        </ul>
        
        <div id="container1">
	    
	    <div style="width:100px;">
		<ul class="nav nav-tabs" style="float:left;margin-right:10px;">
		    <li class="active">
			<a style="background-color: lightgrey; width:80px;">Daily</a>
		    </li> <br/>
		    <li>
			<a href="reportweekly.jsp" style="width:80px;">Weekly</a>
		    </li>
	       </ul>
	    </div>

            <div class="container info-table">
                <table border="1" width="800" cellspacing="5">
                    <thead style="background-color: #c1c1c1;">
                        <td>Trans #</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Total</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td><center>00012226</center></td>
                            <td><center>11/05/16</center></td>
                            <td><center>10:42</center></td>
                            <td><center>500 php</center></td>
                        </tr>
                        <tr>
                            <td><center>00012227</center></center></td>
                            <td><center>11/05/16</center></td>
                            <td><center>10:49</center></td>
                            <td><center>485 php</center></td>
                        </tr>
                        <tr>
                            <td><center>00012228</center></td>
                            <td><center>11/05/16</center></td>
                            <td><center>12:15</center></td>
                            <td><center>150 php</center></center></td>
                        </tr>
                        <tr>
                            <td><center>00012229</center></td>
                            <td><center>11/05/16</center></td>
                            <td><center>1:20</center></td>
                            <td><center>560 php</center></td>
                        </tr>
                        <tr>
                            <td><center>00012230</center></td>
                            <td><center>11/05/16</center></td>
                            <td><center>2:30</center></td>
                            <td><center>160 php</center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!--end container1-->
        
	<button class="button2" id="printbuttoncustomer" onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; padding:15px; background-color:lightgray;">Account </button>
            
        <!-- modal -->
        <div class="modal-overlay"></div>
        <div class="modal">
            <div class="modal-content">
                <div class="modal-head">
                        <!-- add a close button with a class of .modal-close-btn if you want. -->
                </div>
                <div class="modal-body">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Item name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cookies & Cream</td>
                                <td>125 php</td>
                            </tr>
                            <tr>
                                <td>Caramel Frappe</td>
                                <td>125 php</td>
                            </tr>   
                            <tr>
                                <td>Chocolate Frappe</td>
                                <td>125 php</td>
                            </tr>
                            <tr>
                                <td>Java Chip Cookie Frappe</td>
                                <td>125 php</td>
                            </tr>
                            <tr>
                                <td><div align="right">Total:</div></td>
                                <td>500 php</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="modal-footer">
                        <button class="btn cancel">OK</button>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }        
        </script>
        
            <br>
            
        <div id="id01" class="modal">
            <form class="modal-content animate" action="index.html">
                <div class="imgcontainer"></div>
                <div class="container">
                    <label>
                        <font size="5" color="black"><b>Account Management</b></font>
                    </label>
                    
                    <br><br>
                    
                    <font color="black">
                        <b>Old Password:&nbsp;</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" placeholder="Enter old pass" name="uname"><br>
                        
                        <b>New Password:</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" placeholder="Enter new pass" name="uname"><br>
                        
                        <b>Re-enter Password:  </b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" placeholder="Re-enter new pass" name="uname">
                    </font>
                    
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="location.href='report.jsp'" class="cancelbtn">Cancel</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="cancelbtn" onclick="myFunction()">Submit</button>
                </div>
            </form>
        </div>

        <script>
            document.getElementsByClassName("button2")[0].click();
            $(document).ready(function(){ 
                $('printbuttoncustomer').trigger('click'); 
            });

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }
        
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
            }

            function myFunction() {
                alert("Please re-login to take effect");
            }

        </script>

        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    </body>
</html>