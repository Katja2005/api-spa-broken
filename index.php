<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Front</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Laravel API Frontend</h1>

    <!-- Navigation buttons for SPA -->
    <div class="nav">
        <button id="registerBtn">Register</button>
        <button id="loginBtn">Login</button>
        <button id="getUserBtn">Get User</button>
        <button id="createPostBtn">Create Post</button>
        <button id="viewPostsBtn">View Posts</button>
        <button id="logoutBtn" style="display: none;">Logout</button>
    </div>

    <!-- Content container where forms and data will be dynamically loaded -->
    <div id="content" class="container"></div>

    <!-- External JavaScript -->
    <script src="js/app.js"></script>
</body>

</html>