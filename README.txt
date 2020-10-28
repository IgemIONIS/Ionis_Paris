Our software tool is a web site where you can create your plasmid.
to learn more about our project please visit this link: https://2020.igem.org/Team:Ionis_Paris

If you want to use our software tool without any installation, we are hosting it at this link: http://51.68.227.225:8080/home.php

otherwise you can get our entire code and database on this git hub. https://github.com/IgemIONIS/Ionis_Paris
with those files you can:
- Get and use our database:
	you need to download the Microsoft excel file bddigem 
	you can open this file using Microsoft excel and access our data

- if you want to locally host the web page
	you will need to download and install wamp server at this link https://www.wampserver.com/
	execute wampserver (it will simulate a php server on your computer)
	download all the fil from git hub (https://github.com/IgemIONIS/Ionis_Paris)
	open your file browser and go to C:\wamp64\www
	copy and paste the "IGEM" folder here
	open this folder and open "bdd.php" in any text editor (sublimeText, notpad++, standard notpad for windows)
	replace the line "$connect=mysqli_connect("database","root","IgiemCbi1", "testigem");" with "$connect=mysqli_connect("localhost","root","", "testigem");"
	save and close the text editor
	open your file browser and go to C:\wamp64\bin\mysql\mysql5.7.31\data
	copy and paste the "testigem" folder
	you can now access our software locally in a web browser at this link: http://localhost/igem/home.php
