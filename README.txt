Hosted a project by using 000webhostapp
https://guviproject-prasanth.000webhostapp.com/register_form.php



# Database-connectivity-for-website-using-local-server ( Database in XAMPP )
--------------------------------
host = "localhost"
dbusername = "root"
dbpassword = ""
dbname = "db08"

tablename = "website_04"
--------------------------------

Paste a Source Code in this Extension :
C:\xampp\htdocs




Table Data :

CREATE TABLE `website_04` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `door` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
 



Complete a Above all Process Click a Below link for move to Registration Page -> ( localhost )
http://localhost/(folder_name)/register_form.php
                     ^
                     |



Table Image : 
https://drive.google.com/file/d/18pNIcDAXgt-rzHBPwQyzYBNMDbpTkYqt/view?usp=sharing

Screenshots :
https://drive.google.com/drive/folders/14xQUbmXzH0u3c1O30xYySZuHC4Qb0D0i?usp=sharing


