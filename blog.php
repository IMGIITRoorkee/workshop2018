<html>

<head>
    <title>IMG Workshop '18</title>
    <link rel="stylesheet" href="blog.css">
</head>

<body>

<nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="https://img.channeli.in"> <h3>Workshop '18</h3> </a>
        <a href="add_blog.html"><h3>Create</h3></a>
</nav>

<?php

include 'connection.php';
$sql = 'SELECT * FROM blog_post order by posted_on DESC;';
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo '
        <div class="container col-sm-8">    
            <div class="card blog-card">
                <div class="card-body">
                    <div class="blog-header">
                        <h3>'.$row['post_title'].'</h3>
                    </div>
                    <div class="blog-info">
                        <p class="posted-on"> <i> Posted by '.$row['author'].' on '.$row['posted_on'].'</i> </p>
                        <p class="card-text">'.$row['content'].'</p>
                    </div>
                </div>
            </div>
        </div>';
    }
}

?>

</body>
</html>
