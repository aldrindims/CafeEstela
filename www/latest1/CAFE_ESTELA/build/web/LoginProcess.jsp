<%-- 
    Document   : LoginProcess
    Created on : Nov 12, 2016, 10:52:12 PM
    Author     : Simon
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    
    <head>
        <%!
    int counter = 0;
    
%>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    
    <style>
        
        #pwError{
            margin-bottom:-50px;
            margin-top: 38%;
            color: red; 
            font-size: 20px;
            font-family: Segoe UI;
            position: inherit;
        }
        
    </style>
    
    <body>
        <%
            String username = request.getParameter("item");
            String password = request.getParameter("password");

            String EmpUser = "employee";
            String EmpPass = "employee";

            String AdminUser = "admin";
            String AdminPass = "admin";
            
            Integer select = Integer.parseInt(request.getParameter("username"));
            
            
            if (password.equals(EmpPass)) {
                
             
        %>

        <jsp:forward page="home1.php"/>
        <% }//end if
        

                    

            if (password.equals(AdminPass)) {
                counter++;
                session.setAttribute("MySessionVariable", counter);
        %>
        <jsp:forward page="sample.jsp"/>

        <% }//end if
            
            
            
            
            else if(password!=EmpPass) {

                
        %>    
        <div id="pwError">Password error!</div>
        <div style="margin-top:-40%"><jsp:include page="index.html"/></div>

        <%            }
          
            
            
           
        %>    
       
    </body>
</html>
