# SensorDirection

in this project we have 4 files 
1- index.html ( webpage that have Robot control design and showing result)
2- Left.php (that has an insert when click direction button )
3- Right.php ( that show result of database when click Result )
4- style.css (that have some style on index.html entity )



# How website work ??

First go to index Website in link below :
https://robotcontrol2.000webhostapp.com/index.html

![image](https://user-images.githubusercontent.com/110176361/185809859-2447642c-a9b9-4041-887c-f63f20d33bc2.png)
 then this is the user interface 
 
if click any direction will show message that insertion succefully complete .
![image](https://user-images.githubusercontent.com/110176361/185809921-3f4a79a5-a426-41d1-b984-753b5d14a40c.png)

This is by help of get method 
![image](https://user-images.githubusercontent.com/110176361/185809940-62555b08-5559-4b1f-a1ef-6e016720685e.png)

And if i click Result button this is the result 
![image](https://user-images.githubusercontent.com/110176361/185809990-a1b15857-3854-4c89-9089-f1336b7e9d1e.png)

this is value from phpmyadmin :
![image](https://user-images.githubusercontent.com/110176361/185810537-c5cf38c4-c6f0-443f-a43c-833f9b6aadc3.png)

# Deep view in files 

First create database to store data and this is the Structure of database using PHPMyAdmin
![image](https://user-images.githubusercontent.com/110176361/185810095-5df54a8c-da30-4109-b24f-ed19b5fefa5e.png)

After that connect to database and insert new direction from Left.php code 
![image](https://user-images.githubusercontent.com/110176361/185810177-c5c3fd10-a533-4f35-ab8e-c98cae807841.png)

see get to handling new direction 
![image](https://user-images.githubusercontent.com/110176361/185810229-e916352a-5366-4569-bf35-c83fc8c6006a.png)

that's take a value of button from html input submit entity 
![image](https://user-images.githubusercontent.com/110176361/185810295-4ad2d046-092e-473d-8c67-05a7efc13d66.png)

in forms action is Left.php that has insertion code 

Last thing is Right.php that display result :
![image](https://user-images.githubusercontent.com/110176361/185810371-932bd437-69ad-4476-8016-5d6b7a1d01a0.png)

that run from another form in same page when click Result button 
![image](https://user-images.githubusercontent.com/110176361/185810401-ae38a042-f056-4876-b0c8-84dafb3e1a57.png)


