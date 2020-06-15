# WADS_FinalProject
Semester 4 Final Project Web Development and Security
<p align="center"><img src="https://ojan.xyz/img/LogoHome.png" width="400"></p>


## About PASTNOTE
PASTNOTE can store all your past knowledge in a form of image. PASTNOTE will safeguard it with watermark so others can't plagiarize your past achievements. PASTNOTE do not follow certain styles in teaching students, philosophers and teachers.

## PASTNOTE Origin
“Helpful information sometimes are not accessible.”
That's why, our creators felt the urge to create a platform where BINUS students could find free resources.
Which can be a guide for an assignment, notes from senior’s that can maybe help you to understand the courses better. 
This can also be of helped if you want to review a course for work purposes, after you graduate.
From Computer Science all the way to Communication Majors in Binus International University, Made for and by Binusian Students.
Otherwise your past knowledge would be wasted if you just kept it in your device.

## Documentation How to Deploy in GCP (Google Cloud Platform)
How to Deploy Website
1. set up VM in google
2. add record of dns to cloudflare
3. go to ssh and git clone your project
4. install nginx, php, sudo apt update and install the latest php
5. intall the composer into each folder
6. rename .env (with nano .env)
7. generate key for the clone folder
8.  migrate databases and change the db name and db host in .env 
9. make a connection between the database in gcp and cloudfare add new network and u can migrate the database 
10. we create a proxy pass to open the port for the frontend and the backends with sudo nano /etc/nginx/sites-available/default  then sudo  apt instl screen then call the screen to serve the backend project before that we need to change the name server between in the webhost with the cloudfare name server.

## How to Use PASTNOTE
1. To post your notes in PASTNOTE, go to the gallery, press the post button.
2. When you press post, it will direct you into the login page. This process is necessary to ensure the credibility of each posts.
3. After a successful login, the website will bring you to the post form. You can then fill in the form freely.
4. After each successful post, the system will automatically create a blog page and the users can decide to edit or delete other's post under admin discretion.
