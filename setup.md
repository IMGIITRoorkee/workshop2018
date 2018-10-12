# Setup guidelines

Make sure you have installed all the technologies specified in [README.md](https://github.com/IMGIITRoorkee/workshop2018/blob/master/README.md#technologies-used-lamp-wamp-or-mamp).

## Database
Run the following commands to set up the database and create necessary tables
```mysql
Open MySQL console from WAMP server // For Windows users
$ mysql -u root -p // For linux and mac users

> create database workshop;
> use workshop;
> create table blog_post (
      id int(6) unsigned primary key auto_increment,
      post_title varchar(255),
      post_content text,
      author varchar(255),
      posted_on date
    );
```

## Project setup
### Linux users:
```bash
  $ sudo su
  $ cd  /var/www/html/
  $ git clone https://github.com/IMGIITRoorkee/workshop2018.git blog
  $ service apache2 start
```
### Windows users:
```bash
  > Download the project repository to C://wamp64/www/
  > Start the wamp server
```
### Mac users:
```bash
  $ sudo su
  $ cd  /Library/WebServer/Documents
  $ git clone https://github.com/IMGIITRoorkee/workshop2018.git blog
  $ service apache2 start
```

#### Visit [http://localhost/blog/blog.php](http://localhost/blog/blog.php) and play with the project.
