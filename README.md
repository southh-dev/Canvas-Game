
Sources : 

Player character + Enemy Character Image : Updated, now pixel art created by caitdotexe on discord
power up art : Created by me

Original bullet Sprite sheet : https://opengameart.org/content/bullet-collection-1-m484

Code image : Taken and editted by me

(All editted by me in ps)

Font : https://www.dafont.com/beyonders.font
Font : https://www.dafont.com/nexa.font




Assistance : 

I've referred to WW3 schools for small syntax assistance however i have NOT copied and pasted ANY code outside of the one previously discussed instance.

I've been utilising https://www.w3schools.com/cssref/index.php which is just a dictionary for a lot of different CSS commands. This has been helpful for my stylising and formatting.

Other Notes : 

I included a CSS sheet although it was not listed as either a requirement or suggestion in the assignment spec as i wanted to put my own touches and effects on the website.

26/11/2023 5PM update

The last few hours have been spent entirely on reworking all of the HTML and CSS formatting as well as cleaning up the code and adding plenty of new CSS.
I've added a better and more stylish navigation bar, i've added some text, a logo (my personal username) as well as dividing the screen so the game plays on one side.

29/11/2023 

This is my semi-final take, i cannot get the PHP script working, but for the time being this is a project i'm relatively happy with. 

30/11/2023

Final take, PHP works for receiving data, i can't seem to get the display leaderboard function working, so i'm leaving it out. 


Game Guidance : 

The game presented on the right side on the canvas of the website is a simple space-invaderesque arcade shooter.

Firstly you need to enter a username on the form in the top left of the canvas, when this is done the game begins.

The player moves their mouse on the canvas to move the ship left and right, enemy ships will begin to spawn in the stars above, at first their speed will be low, 
so the initial wave of enemies will seem very large, however when the player has gotten past it the enemies are programmed to speed up gradually over time, eventually they will be flying down extremely fast.

On a rare occasion, "power up" boxes will spawn, when this occurs the player must "catch" them, which firstly will gradually increase the fire rate for the player as well as the movement speed of the bullets but only gradually, after they've reached the maximum fire rate they will start dramatically increasing the velocity of the bullets every time the player collects a power up.

Currently the "goal" of the game is to get as high a score as possible.

Database guidance 

To connect this game or HTML to your own database you need to do the following : 

create a DB_secrets file containing all required database credentials in the following format : 

<?php
	
    const DB_DRIVER = 'pgsql';
    const DB_HOST = ''; // host 
    const DB_NAME = '';  // Database location 
    const DB_USER = '';                // and change this in the same way
    const DB_PASSWORD = '';  // your PostgreSQL password

?>


After this is done, provided you have a database in postgreSQL that has been created using the following command : 

create table leaderboard
(
    name  varchar,
    score integer
);

Finally, change the paths in the get_db_connection and submit_score to match the paths on your system.

This will make the database functional on your device / server. 



