<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Café Estela - Weekly Report</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	<!-- STYLE SHOULD BE INSIDE THE HEAD TAG -->

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
            margin-top:-3%;
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
            height: 70%; /* Full height *//* Enable scroll if needed */
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
    background-color: #808080;

}

#container1{
            background-color:white;
            padding:15px 15px 15px;
            height:400px;
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
    </head>
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
                <a href="sample.jsp" style="background-color: lightgrey">Stocks</a>
            </li>
            <li class="active">
                <a >Report</a>
            </li>
        </ul>
	
	<div id="container1">
	   <div style="width:100px;"> 
        <ul class="nav nav-tabs" style="float:left;margin-right:10px;">
                <li>
                    <a href="report.jsp" style="background-color: lightgrey; width:80px;">Daily</a>
                </li> <br/>
                <li  class="active">
                    <a style="width:80px;">Weekly</a>
                </li>
	       </ul></div>

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
                    <td><center>8:42 pm</center></td>
                    <td><center>500 php</center></td>
                </tr>
                <tr>
                    <td><center>00012227</center></center></td>
                    <td><center>11/05/16</center></td>
                    <td><center>9:01 pm</center></td>
                    <td><center>485 php</center></td>
                </tr>
                <tr>
                    <td><center>00012238</center></td>
                    <td><center>11/06/16</center></td>
                    <td><center>12:15 pm</center></td>
                    <td><center>150 php</center></center></td>
                </tr>
                <tr>
                    <td><center>00012239</center></td>
                    <td><center>11/06/16</center></td>
                    <td><center>7:20 pm</center></td>
                    <td><center>560 php</center></td>
                </tr>
                <tr>
                    <td><center>00012240</center></td>
                    <td><center>11/07/16</center></td>
                    <td><center>8:30 pm</center></td>
                    <td><center>160 php</center></td>
                </tr><tr>
                    <td><center>00012246</center></td>
                    <td><center>11/07/16</center></td>
                    <td><center>7:42 pm</center></td>
                    <td><center>500 php</center></td>
                </tr>
                <tr>
                    <td><center>00012257</center></center></td>
                    <td><center>11/08/16</center></td>
                    <td><center>8:49 pm</center></td>
                    <td><center>485 php</center></td>
                </tr>
                <tr>
                    <td><center>00012258</center></td>
                    <td><center>11/08/16</center></td>
                    <td><center>9:15 pm</center></td>
                    <td><center>150 php</center></center></td>
                </tr>
                <tr>
                    <td><center>00012269</center></td>
                    <td><center>11/09/16</center></td>
                    <td><center>8:20 pm</center></td>
                    <td><center>560 php</center></td>
                </tr>
                <tr>
                    <td><center>00012270</center></td>
                    <td><center>11/09/16</center></td>
                    <td><center>9:30 pm</center></td>
                    <td><center>160 php</center></td>
                </tr></tbody>
        	</table>
        </div>
	</div>
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
        	$(function(){
        		$(".info-table tr").click(function(){

//        			// put your ajax here
//
//        			// display the modal
//        			$(".modal-overlay").fadeIn(300);
//        			setTimeout(function(){
//        				$(".modal").addClass("open").fadeIn(240);
//        			}, 60);
        		});

        		// hiding the modal
        		$(".modal-overlay, .modal-close-btn, .modal .btn.cancel").click(function(){

//        			// close the modal
//        			$(".modal").fadeOut(300);
//        			setTimeout(function(){
//        				$(".modal-overlay").fadeOut(240);
//        			}, 60);
//
//        			// delete the data in modal here 
//        		});
        	});
                
                
        </script>
        
        
        <button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; margin-right:10px;">Account </button>

<div id="id01" class="modal2">
            <form class="modal-content animate" action="report2.jsp">
                <div class="container">
                    <center>
                        <label><font size="5" color="black"><b>Change password to</b></label><br><br></font>
                    </center>
                    <button class="modlog">Admin</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;<button type="submit" class="modlog">Employee</button>
                </div>

                <div class="container" style="background-color:#f2f2f2; "> 
                    <center>      
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </center>
                </div>
            </form>
        </div>
        
    </body>
</html>