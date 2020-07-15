
<br/>
<p align="left">
    <a href="#" target="_blank">
        <img width="8%" src="https://raw.githubusercontent.com/GeekHaven/GeekHaven-2020/adddaa8154f228b0f5edba0b8e2082cff5d8249a/images/gh.svg" alt="GH-logo">
    </a>
</p>

# GeekHaven-2020
:star: Star us on GitHub — it helps!
<br/>

A complete revamp of the official website of GeekHaven(IIIT-A), with an aim for a dynamic and unique website that can be used in upcoming sessions too.

## 💻 Live-Link
[GeekHaven](https://geekhaven.github.io/GeekHaven-2020/)

## 📷 Few snaps of the site
![](https://raw.githubusercontent.com/GeekHaven/GeekHaven-2020/master/images/Screenshot%20(85).png)
![](https://raw.githubusercontent.com/GeekHaven/GeekHaven-2020/master/images/Screenshot%20(86).png)

## 🧾 Table of contents
- Dependencies
- Setup
- Brief Repo Strucutre
- Frontend Frameworks
- Schema
- What Makes It Unique
- Footnotes


## 🛠 Dependencies
![](https://img.shields.io/badge/xampp-v7.4.6-orange)

You can install it from here:
[Xampp](https://www.apachefriends.org/download.html)


## 🚀 Setup
Get the code by cloning this repository using git
```
git clone  https://github.com/GeekHaven/GeekHaven-2020/
```
Once downloaded, open the ```index.html``` file in your browser and you're good to go 🎉

### For Database Setup

* Copy and Paste all the folders in htdocs of Xampp.

* For creating database and tables for the first time hit url `http://localhost/GeekHaven-2020/onstart.php`.

* There you will get a msg "database created".

* A username='exUser' and password='exPass' will be created for login. 
 
* Now head to `http://localhost/GeekHaven-2020/geekhaven/login.php` for login.


## 📚 Brief Repo Structure
```
/
|-- complete_list/			
 |-- announcements/   #listing of all announcements
 |-- projects/        #listing of all projects
|
|-- database/         #for storing announcements,projects,members-details etc...
| 
|-- geekhaven/        #for dynamically entering/updating blogs,members-details and other credentials
|
|-- images/	      #SVGs and PNGs used in the project
|
|-- wings/	      #HTML and CSS files of each wing
|
|-- index.html	      #HTML of index GeekHaven page
```

## 🎈 Frontend frameworks
Following CSS and Js frameworks/libraries are included in the project:
- [Bootstrap](https://getbootstrap.com/)
- [Font-Awesome](https://fontawesome.com/6?next=%2F)
- [Particle-Js](https://vincentgarreau.com/particles.js/)

## 🏷 Schema
| Login Credential   |  Social Handles  |   Member/Coordis  |     Projects     |     Blogs    |  Announcement |    Wing    |    Hall of Fame    | 
|:------------------:|:----------------:|:-----------------:|:-----------------|:------------:|:-------------:|:----------:|:------------------:|
| username           |  Github          | wing              | wing_id(F)       |  wing_id(F)  | name          | name       |  achievement       |  
| password           |  Mail-Id         | post              | description      |  description |details        | info       |  project link(opt) | 
| Admin Value(0/1)   |  Facebook        | session           | image            |  image       | date          | wing_id(P) |  member/coordi(F)  | 
| cred_id(P)         |  Instagram(opt)  | cred_id(F)        | project link     |  blog link   | venue         | logo       |                    | 
| member_id(F)       |  Codechef(opt)   | member_id(P)      | source code link |  member_id(F)| organizer     |            |                    | 
|                    |  Codeforces(opt) | roll.no           | member_id(F)     |  blog title  |venue          |            |                    | 
|                    |  LinkedIn        | image             | project name     |              |topic          |            |                    | 
|                    |  Hackerearth(opt)| name              |                  |              | link(opt)     |            |                    | 
|                    |  Hackerrank(opt) | description       |                  |              | image         |            |                    | 
|                    |  Twitter(opt)    | social handles(F) |                  |              | made by(F)    |            |                    | 
|                    |  table_id(P)     | HOF               |                  |              | attachment    |            |                    |
|                    |  table_id(P)     | HOF               |                  |              | time          |            |                    | 

P   -> Primary Key, F   -> Foreign Key<br>
opt -> Optional

## 🧩 What Makes It Unique 
The special thing about the 2020 Revamp project is that we're making the website dynamic, so that the data can be updated without hampering the code, simply by the use of some PHP and MySQL.
### CRUD functionality
Projects, Blogs, Announcements and even the PNGs and SVGs can be created/read/updated/deleted anytime.
### Transfer of Authority
During each session of GeekHaven it's members and coordis will have the authority to update/delete data dynamically with the help of their login credentials, which will be changed in the next session for its's members, which will help not hampering the code anytime for data manipulation.
### Hall of Fame
Selected people with their achievements will be showcased with their projects/contests results.
### Theme Toggle functionality
A simple yet creative idea, you can toggle between dark and light mode in the website anytime, and your preference will be stored for future.
### Overall Theme
Keeping in mind the aesthetic look of the website, the theme of website is **minimalist, unique and uniform**.

## ✒ Footnotes
Aim of this project is to reduce the work for the upcoming years, so that the same website can be used without changing any piece of code, just simply update the members details dynamically and you're good to go.
