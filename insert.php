<?php
// Include DB connection for executing SQL queries.
include 'connection.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    /**
     * Save blog in database when incoming request is
     * a POST request.
     */

    // Sanitize incoming data. 
    $title = htmlspecialchars($_POST['post_title']);
    $content = htmlspecialchars($_POST['content']);
    $author = htmlspecialchars($_POST['author']);

    // SQL query to insert into blog into DB.
    $sql = "INSERT INTO blog_post(post_title, content, author, posted_on) values('".$title."','".$content."','".$author."','".date('Y/m/d')."');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to `blog.php` to view published blog.
    header('Location: http://localhost/workshop/blog.php');
    $conn->close();
}
else{
    echo "Request method not supported";
}

?>