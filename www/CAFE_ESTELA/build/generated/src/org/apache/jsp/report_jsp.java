package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class report_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Café Estela - Report</title>\n");
      out.write("        <meta charset=\"utf-8\">\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n");
      out.write("        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\n");
      out.write("        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>\n");
      out.write("        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>\n");
      out.write("    </head>\n");
      out.write("    \n");
      out.write("        <!-- STYLE SHOULD BE INSIDE THE HEAD TAG -->\n");
      out.write("    <style>\n");
      out.write("        body{\n");
      out.write("            background-image:url(bg.png);\n");
      out.write("            background-size:100%;\n");
      out.write("            background-attachment:fixed;\n");
      out.write("            max-width: 100%;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        button {\n");
      out.write("            background-color: #808080;\n");
      out.write("            color: black;\n");
      out.write("            padding: 14px 20px;\n");
      out.write("            margin: 8px 0;\n");
      out.write("            display: inline-block;\n");
      out.write("            border: none;\n");
      out.write("            cursor: pointer;\n");
      out.write("            width: 50%;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        .button {\n");
      out.write("            background-color: lightgray;\n");
      out.write("            color: black;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        .button:hover{\n");
      out.write("            background-color:#d9d9d9;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        .button2 {\n");
      out.write("            background-color: white;\n");
      out.write("            padding: 5px;\n");
      out.write("            margin-right:5px;\n");
      out.write("            width: auto;  \n");
      out.write("            float:right;\n");
      out.write("            margin-top:-3%;\n");
      out.write("            font-size:15px;\n");
      out.write("        }\n");
      out.write("            *{\n");
      out.write("               box-sizing: border-box;\n");
      out.write("               -webkit-box-sizing: border-box;\n");
      out.write("               -moz-box-sizing: border-box;\n");
      out.write("            }\n");
      out.write("\n");
      out.write("        .button2:hover{\n");
      out.write("            background-color: bisque;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Full-width input fields */\n");
      out.write("        input[type=text]{\n");
      out.write("            width: 50%;\n");
      out.write("            padding: 14px 20px;\n");
      out.write("            margin: 8px 0;\n");
      out.write("            display: inline-block;\n");
      out.write("            border: 1px solid #ccc;\n");
      out.write("            box-sizing: border-box;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Set a style for all buttons */\n");
      out.write("        .btn{\n");
      out.write("            padding: 14px 20px;\n");
      out.write("            margin: 8px 0;\n");
      out.write("            display: block;\n");
      out.write("            border: none;\n");
      out.write("            cursor: pointer;\n");
      out.write("            font-family: 'Verdana';\n");
      out.write("            font-size: 14px;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Extra styles for the cancel button */\n");
      out.write("        .btn.cancel {\n");
      out.write("            width: 50%;\n");
      out.write("            position: relative;\n");
      out.write("            padding: 10px 18px;\n");
      out.write("            background-color: #f44336;\n");
      out.write("            color: #fff;\n");
      out.write("        }\n");
      out.write("        .btn.cancel:hover{\n");
      out.write("                background-color: #d7352a;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("\n");
      out.write("        .container {\n");
      out.write("            padding: 10px;\n");
      out.write("            text-align: center;\n");
      out.write("            align-content: flex-start;\n");
      out.write("            width: auto;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        span.psw {\n");
      out.write("            float: center;\n");
      out.write("            padding-top: 16px;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* The Modal (background) */\n");
      out.write("        .modal-overlay{\n");
      out.write("                position: fixed;\n");
      out.write("                width: 100%;\n");
      out.write("                height: 100%;\n");
      out.write("                background-color: rgba(0,0,0,0.5);\n");
      out.write("                display: none;\n");
      out.write("                z-index: 99;\n");
      out.write("                top: 0;\n");
      out.write("                left: 0;\n");
      out.write("        }\n");
      out.write("        .modal {\n");
      out.write("            display: none; /* Hidden by default */\n");
      out.write("            position: absolute; /* Stay in place */\n");
      out.write("            z-index: 5; /* Sit on top */\n");
      out.write("            left: 50%;\n");
      out.write("            top: 50%;\n");
      out.write("            transform: translate(-50%, -50%);\n");
      out.write("            width: 50%; /* Full width */\n");
      out.write("            height: 70%; /* Full height *//* Enable scroll if needed */\n");
      out.write("            color: white;\n");
      out.write("            background-color: transparent; /* Black w/ opacity */\n");
      out.write("            padding-top: 50px;\n");
      out.write("            z-index: 999;\n");
      out.write("        }\n");
      out.write("        .modal2 {\n");
      out.write("            display: none; /* Hidden by default */\n");
      out.write("            position: absolute; /* Stay in place */\n");
      out.write("            z-index: 5; /* Sit on top */\n");
      out.write("            left: 50%;\n");
      out.write("            top: 50%;\n");
      out.write("            transform: translate(-50%, -50%);\n");
      out.write("            max-width: 30%; /* Full width */\n");
      out.write("            height: auto; /* Full height *//* Enable scroll if needed */\n");
      out.write("            color: white;\n");
      out.write("            background-color: transparent; /* Black w/ opacity */\n");
      out.write("            padding-top: 50px;\n");
      out.write("            z-index: 999;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Modal Content/Box */\n");
      out.write("        .modal-content {\n");
      out.write("            background-color: #fefefe;\n");
      out.write("            position: relative;\n");
      out.write("            padding: 15px ; /* 5% from the top, 15% from the bottom and centered */\n");
      out.write("            width: 100%; /* Could be more or less, depending on screen size */\n");
      out.write("            z-index: 999;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* The Close Button (x) */\n");
      out.write("        .close {\n");
      out.write("            position: absolute;\n");
      out.write("            right: 25px;\n");
      out.write("            top: 0;\n");
      out.write("            color: #000;\n");
      out.write("            font-size: 35px;\n");
      out.write("            font-weight: bold;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        .close:hover,\n");
      out.write("        .close:focus {\n");
      out.write("            color: red;\n");
      out.write("            cursor: pointer;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Add Zoom Animation */\n");
      out.write("        .animate {\n");
      out.write("            -webkit-animation: animatezoom 0.6s;\n");
      out.write("            animation: animatezoom 0.6s\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        @-webkit-keyframes animatezoom {\n");
      out.write("            from {-webkit-transform: scale(0)}\n");
      out.write("            to {-webkit-transform: scale(1)}\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        @keyframes animatezoom {\n");
      out.write("            from {transform: scale(0)}\n");
      out.write("            to {transform: scale(1)}\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        /* Change styles for span and cancel button on extra small screens */\n");
      out.write("        @media screen and (max-width: 300px) {\n");
      out.write("            span.psw {\n");
      out.write("               display: block;\n");
      out.write("               float: none;\n");
      out.write("            }\n");
      out.write("            .cancelbtn {\n");
      out.write("               width: 100%;\n");
      out.write("            }\n");
      out.write("        }\n");
      out.write("        .info-table tr{\n");
      out.write("                cursor: pointer;\n");
      out.write("        }\n");
      out.write("        .info-table tr td{\n");
      out.write("                border: 1px solid black;\n");
      out.write("                padding:  10px;\n");
      out.write("        }\n");
      out.write("        .modal .data-table{\n");
      out.write("                width: 100%;\n");
      out.write("                border-collapse: collapse;\n");
      out.write("                border-spacing: 0;\n");
      out.write("        }\n");
      out.write("        .modal .data-table tr th{\n");
      out.write("                font-weight: 600;\n");
      out.write("                color: #908b8b;\n");
      out.write("        }\n");
      out.write("        .modal .data-table tr td, .modal .data-table tr th{\n");
      out.write("                border: 1px solid #000;\n");
      out.write("                color: #000000;\n");
      out.write("                font-family: 'Verdana';\n");
      out.write("                font-size: 14px;\n");
      out.write("                padding: 10px;\n");
      out.write("        }\n");
      out.write("        .modal .btn.cancel{\n");
      out.write("                margin-left: auto;\n");
      out.write("                margin-right: auto;\n");
      out.write("                width: 300px; \n");
      out.write("        }\n");
      out.write("        .cancelbtn {\n");
      out.write("            width: 30%;\n");
      out.write("            padding: 10px 18px;\n");
      out.write("            background-color: #808080;\n");
      out.write("        }\n");
      out.write("        .modlog{\n");
      out.write("            height:40px;\n");
      out.write("            width:100px;\n");
      out.write("            background-color: lightgray;\n");
      out.write("            vertical-align:middle;\n");
      out.write("\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        #container1{\n");
      out.write("            background-color:white;\n");
      out.write("            padding:15px 15px 15px;\n");
      out.write("            height:370px;\n");
      out.write("            overflow:scroll;\n");
      out.write("\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        table {\n");
      out.write("            border-collapse: collapse;\n");
      out.write("            width: 80%;\n");
      out.write("            align-content: flex-start;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        td {\n");
      out.write("            height:15px !important;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        tr:nth-child(even){\n");
      out.write("            background-color: #f2f2f2;\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        th{\n");
      out.write("            height:50px;\n");
      out.write("            text-align:center;\n");
      out.write("            background-color: #c1c1c1;\n");
      out.write("        }\n");
      out.write("    </style>\n");
      out.write("    \n");
      out.write("    <body>\n");
      out.write("        <div style=\"color:white; text-align:center; font-size: 40px; padding-top:20px;\">\n");
      out.write("            <font face=\"BigNoodleTitling\" size=\"40\"> Café Estela</font>\n");
      out.write("            <div id=\"logOut\">\n");
      out.write("                <form action =\"index.html\">\n");
      out.write("                    <button type=\"submit\" class=\"button2\">Log Out</button>\n");
      out.write("                </form>\n");
      out.write("            </div>\n");
      out.write("            <hr/>\n");
      out.write("        </div>\n");
      out.write("        \n");
      out.write("        <ul class=\"nav nav-tabs\" style=\"margin-left:88%; margin-bottom:-6px; display:inline-block;\">\n");
      out.write("            <li>\n");
      out.write("                <a href=\"sample.jsp\" style=\"background-color: lightgrey\">Stocks</a>\n");
      out.write("            </li>\n");
      out.write("            <li class=\"active\">\n");
      out.write("                <a href=\"report.jsp\" >Report</a>\n");
      out.write("            </li>\n");
      out.write("        </ul>\n");
      out.write("        \n");
      out.write("        <div id=\"container1\">\n");
      out.write("            <ul class=\"nav nav-tabs\" style=\"float:left;margin-right:10px;\">\n");
      out.write("                <li class=\"active\">\n");
      out.write("                    <a href=\"sample.jsp\" style=\"background-color: lightgrey; width:80px;\">Daily</a>\n");
      out.write("                </li> <br/>\n");
      out.write("                <li>\n");
      out.write("                    <a href=\"report.jsp\" style=\"width:80px;\">Weekly</a>\n");
      out.write("                </li>\n");
      out.write("            </ul>\n");
      out.write("\n");
      out.write("            <div class=\"container info-table\">\n");
      out.write("                <table border=\"1\" width=\"800\" cellspacing=\"5\">\n");
      out.write("                    <thead style=\"background-color: #c1c1c1;\">\n");
      out.write("                        <td>Trans #</td>\n");
      out.write("                        <td>Date</td>\n");
      out.write("                        <td>Time</td>\n");
      out.write("                        <td>Total</td>\n");
      out.write("                    </thead>\n");
      out.write("                    <tbody>\n");
      out.write("                        <tr>\n");
      out.write("                            <td><center>00012226</center></td>\n");
      out.write("                            <td><center>11/05/16</center></td>\n");
      out.write("                            <td><center>10:42</center></td>\n");
      out.write("                            <td><center>500 php</center></td>\n");
      out.write("                        </tr>\n");
      out.write("                        \n");
      out.write("                        <tr>\n");
      out.write("                            <td><center>00012227</center></center></td>\n");
      out.write("                            <td><center>11/05/16</center></td>\n");
      out.write("                            <td><center>10:49</center></td>\n");
      out.write("                            <td><center>485 php</center></td>\n");
      out.write("                        </tr>\n");
      out.write("                        \n");
      out.write("                        <tr>\n");
      out.write("                            <td><center>00012228</center></td>\n");
      out.write("                            <td><center>11/05/16</center></td>\n");
      out.write("                            <td><center>12:15</center></td>\n");
      out.write("                            <td><center>150 php</center></center></td>\n");
      out.write("                        </tr>\n");
      out.write("                        \n");
      out.write("                        <tr>\n");
      out.write("                            <td><center>00012229</center></td>\n");
      out.write("                            <td><center>11/05/16</center></td>\n");
      out.write("                            <td><center>1:20</center></td>\n");
      out.write("                            <td><center>560 php</center></td>\n");
      out.write("                        </tr>\n");
      out.write("                        \n");
      out.write("                        <tr>\n");
      out.write("                            <td><center>00012230</center></td>\n");
      out.write("                            <td><center>11/05/16</center></td>\n");
      out.write("                            <td><center>2:30</center></td>\n");
      out.write("                            <td><center>160 php</center></td>\n");
      out.write("                        </tr>\n");
      out.write("                    </tbody>\n");
      out.write("                </table>\n");
      out.write("            </div>\n");
      out.write("            \n");
      out.write("            <!-- modal -->\n");
      out.write("            <div class=\"modal-overlay\"></div>\n");
      out.write("            <div class=\"modal\">\n");
      out.write("                <div class=\"modal-content\">\n");
      out.write("                    <div class=\"modal-head\">\n");
      out.write("                            <!-- add a close button with a class of .modal-close-btn if you want. -->\n");
      out.write("                    </div>\n");
      out.write("                    <div class=\"modal-body\">\n");
      out.write("                        <table class=\"data-table\">\n");
      out.write("                            <thead>\n");
      out.write("                                <tr>\n");
      out.write("                                    <th>Item name</th>\n");
      out.write("                                    <th>Price</th>\n");
      out.write("                                </tr>\n");
      out.write("                            </thead>\n");
      out.write("                            <tbody>\n");
      out.write("                                <tr>\n");
      out.write("                                    <td>Cookies & Cream</td>\n");
      out.write("                                    <td>125 php</td>\n");
      out.write("                                </tr>\n");
      out.write("                                <tr>\n");
      out.write("                                    <td>Caramel Frappe</td>\n");
      out.write("                                    <td>125 php</td>\n");
      out.write("                                </tr>   \n");
      out.write("                                <tr>\n");
      out.write("                                    <td>Chocolate Frappe</td>\n");
      out.write("                                    <td>125 php</td>\n");
      out.write("                                </tr>\n");
      out.write("                                <tr>\n");
      out.write("                                    <td>Java Chip Cookie Frappe</td>\n");
      out.write("                                    <td>125 php</td>\n");
      out.write("                                </tr>\n");
      out.write("                                <tr>\n");
      out.write("                                    <td><div align=\"right\">Total:</div></td>\n");
      out.write("                                    <td>500 php</td>\n");
      out.write("                                </tr>\n");
      out.write("                            </tbody>\n");
      out.write("                        </table>\n");
      out.write("                    </div>\n");
      out.write("                    <div class=\"modal-footer\">\n");
      out.write("                        <button class=\"btn cancel\">OK</button>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("            </div>\n");
      out.write("        \n");
      out.write("            <button class=\"button\" onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto; float:right;\">Account </button>\n");
      out.write("        \n");
      out.write("        </div> <!--end container1-->\n");
      out.write("        \n");
      out.write("        <script type=\"text/javascript\">\n");
      out.write("            $(function(){\n");
      out.write("                $(\".info-table tr\").click(function(){\n");
      out.write("\n");
      out.write("                    // put your ajax here\n");
      out.write("\n");
      out.write("                    // display the modal\n");
      out.write("                    $(\".modal-overlay\").fadeIn(300);\n");
      out.write("                    setTimeout(function(){\n");
      out.write("                    $(\".modal\").addClass(\"open\").fadeIn(240);\n");
      out.write("                        }, 60);\n");
      out.write("                });\n");
      out.write("\n");
      out.write("                // hiding the modal\n");
      out.write("                $(\".modal-overlay, .modal-close-btn, .modal .btn.cancel\").click(function(){\n");
      out.write("\n");
      out.write("                    // close the modal\n");
      out.write("\n");
      out.write("                    $(\".modal\").fadeOut(300);\n");
      out.write("                    setTimeout(function(){\n");
      out.write("                        $(\".modal-overlay\").fadeOut(240);\n");
      out.write("                    }, 60);\n");
      out.write("\n");
      out.write("                        // delete the data in modal here \n");
      out.write("                });\n");
      out.write("            });\n");
      out.write("        </script>\n");
      out.write("        \n");
      out.write("        <div id=\"id01\" class=\"modal2\">\n");
      out.write("            <form class=\"modal-content animate\" action=\"report2.jsp\">\n");
      out.write("                <div class=\"container\">\n");
      out.write("                    <center>\n");
      out.write("                        <label><font size=\"5\" color=\"black\"><b>Change password to</b></label><br><br></font>\n");
      out.write("                    </center>\n");
      out.write("                    <button class=\"modlog\">Admin</button>\n");
      out.write("                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n");
      out.write("                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n");
      out.write("                    &nbsp;&nbsp;<button type=\"submit\" class=\"modlog\">Employee</button>\n");
      out.write("                </div>\n");
      out.write("\n");
      out.write("                <div class=\"container\" style=\"background-color:#f2f2f2; \"> \n");
      out.write("                    <center>      \n");
      out.write("                        <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Cancel</button>\n");
      out.write("                    </center>\n");
      out.write("                </div>\n");
      out.write("            </form>\n");
      out.write("        </div>\n");
      out.write("        \n");
      out.write("        <script src=\"assets/js/jquery.min.js\"></script>\n");
      out.write("        <script src=\"bootstrap/js/bootstrap.min.js\"></script>\n");
      out.write("        <script src=\"assets/js/ie10-viewport-bug-workaround.js\"></script>\n");
      out.write("        \n");
      out.write("    </body>\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
