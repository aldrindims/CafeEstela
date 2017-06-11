package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class menu_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>JSP Page</title>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        ");

         String MySessionVariable = (String)session.getAttribute("MySessionVariable").toString();
            
            
         
          

      out.write("\n");
      out.write("\n");
      out.write("        Counter = ");
      out.print(MySessionVariable);
      out.write("\n");
      out.write("        \n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("<style>\n");
      out.write("/* Full-width input fields */\n");
      out.write("input[type=text], input[type=password] {\n");
      out.write("    width: 100%;\n");
      out.write("    padding: 12px 20px;\n");
      out.write("    margin: 8px 0;\n");
      out.write("    display: inline-block;\n");
      out.write("    border: 1px solid #ccc;\n");
      out.write("    box-sizing: border-box;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Set a style for all buttons */\n");
      out.write("button {\n");
      out.write("    background-color: #4CAF50;\n");
      out.write("    color: white;\n");
      out.write("    padding: 14px 20px;\n");
      out.write("    margin: 8px 0;\n");
      out.write("    border: none;\n");
      out.write("    cursor: pointer;\n");
      out.write("    width: 100%;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Extra styles for the cancel button */\n");
      out.write(".cancelbtn {\n");
      out.write("    width: auto;\n");
      out.write("    padding: 10px 18px;\n");
      out.write("    background-color: #808080;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Center the image and position the close button */\n");
      out.write(".imgcontainer {\n");
      out.write("    text-align: center;\n");
      out.write("    margin: 24px 0 12px 0;\n");
      out.write("    position: relative;\n");
      out.write("}\n");
      out.write("\n");
      out.write("\n");
      out.write(".container {\n");
      out.write("    padding: 16px;\n");
      out.write("}\n");
      out.write("\n");
      out.write("span.psw {\n");
      out.write("    float: right;\n");
      out.write("    padding-top: 16px;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* The Modal (background) */\n");
      out.write(".modal {\n");
      out.write("    display: none; /* Hidden by default */\n");
      out.write("    position: fixed; /* Stay in place */\n");
      out.write("    z-index: 1; /* Sit on top */\n");
      out.write("    left: 0;\n");
      out.write("    top: 0;\n");
      out.write("    width: 100%; /* Full width */\n");
      out.write("    height: 100%; /* Full height */\n");
      out.write("    overflow: auto; /* Enable scroll if needed */\n");
      out.write("    background-color: rgb(0,0,0); /* Fallback color */\n");
      out.write("    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */\n");
      out.write("    padding-top: 60px;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Modal Content/Box */\n");
      out.write(".modal-content {\n");
      out.write("    background-color: #fefefe;\n");
      out.write("    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */\n");
      out.write("    border: 1px solid #888;\n");
      out.write("    width: 40%; /* Could be more or less, depending on screen size */\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* The Close Button (x) */\n");
      out.write(".close {\n");
      out.write("    position: absolute;\n");
      out.write("    right: 25px;\n");
      out.write("    top: 0;\n");
      out.write("    color: #000;\n");
      out.write("    font-size: 35px;\n");
      out.write("    font-weight: bold;\n");
      out.write("}\n");
      out.write("\n");
      out.write(".close:hover,\n");
      out.write(".close:focus {\n");
      out.write("    color: red;\n");
      out.write("    cursor: pointer;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Add Zoom Animation */\n");
      out.write(".animate {\n");
      out.write("    -webkit-animation: animatezoom 0.6s;\n");
      out.write("    animation: animatezoom 0.6s\n");
      out.write("}\n");
      out.write("\n");
      out.write(".modlog{\n");
      out.write("    height:40px;\n");
      out.write("    width:200px;\n");
      out.write("}\n");
      out.write("@-webkit-keyframes animatezoom {\n");
      out.write("    from {-webkit-transform: scale(0)}\n");
      out.write("    to {-webkit-transform: scale(1)}\n");
      out.write("}\n");
      out.write("    \n");
      out.write("@keyframes animatezoom {\n");
      out.write("    from {transform: scale(0)}\n");
      out.write("    to {transform: scale(1)}\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* Change styles for span and cancel button on extra small screens */\n");
      out.write("@media screen and (max-width: 300px) {\n");
      out.write("    span.psw {\n");
      out.write("       display: block;\n");
      out.write("       float: none;\n");
      out.write("    }\n");
      out.write("    .cancelbtn {\n");
      out.write("       width: 100%;\n");
      out.write("    }\n");
      out.write("}\n");
      out.write("</style>\n");
      out.write("<body>\n");
      out.write("\n");
      out.write("\n");
      out.write("    <br>\n");
      out.write("<button onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">Account </button>\n");
      out.write("\n");
      out.write("<div id=\"id01\" class=\"modal\">\n");
      out.write("  \n");
      out.write("    <form class=\"modal-content animate\" action=\"acc.jsp\">\n");
      out.write("    <div class=\"imgcontainer\">\n");
      out.write("      <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>\n");
      out.write("    \n");
      out.write("    </div>\n");
      out.write("\n");
      out.write("    <div class=\"container\">\n");
      out.write("<center>\n");
      out.write("      <label><font size=\"5\"><b>Change password to</b></label><br><br></font>\n");
      out.write("</center>\n");
      out.write("      \n");
      out.write("\n");
      out.write("  \n");
      out.write("<button class=\"modlog\">Admin</button>\n");
      out.write("\n");
      out.write("\n");
      out.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n");
      out.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n");
      out.write("&nbsp;&nbsp;<button type=\"submit\" class=\"modlog\">Employee</button>\n");
      out.write("\n");
      out.write("\n");
      out.write("    </div>\n");
      out.write("\n");
      out.write("    <div class=\"container\" style=\"background-color:#f1f1f1\">\n");
      out.write("<center>      <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Cancel</button> </center>\n");
      out.write("\n");
      out.write("    </div>\n");
      out.write("  </form>\n");
      out.write("</div>\n");
      out.write("\n");
      out.write("<script>\n");
      out.write("// When the user clicks the button, open the modal\n");
      out.write("btn.onclick = function() {\n");
      out.write("    modal.style.display = \"block\";\n");
      out.write("}\n");
      out.write("// Get the modal\n");
      out.write("var modal = document.getElementById('id01');\n");
      out.write("\n");
      out.write("// When the user clicks anywhere outside of the modal, close it\n");
      out.write("window.onclick = function(event) {\n");
      out.write("    if (event.target == modal) {\n");
      out.write("        modal.style.display = \"none\";\n");
      out.write("    }\n");
      out.write("}\n");
      out.write("\n");
      out.write("</script>\n");
      out.write("<form action =\"index.html\">\n");
      out.write("<button type=\"submit\" class=\"cancelbtn\">Log Out</button>\n");
      out.write("</form>\n");
      out.write("</body>\n");
      out.write("</html>\n");
      out.write("\n");
      out.write("        \n");
      out.write("\n");
      out.write("       \n");
      out.write("    </body>\n");
      out.write("</html>\n");
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
