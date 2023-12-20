<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
       
</head>
<body>
   <?php
   include('partials/menu.php');
   ?> 
    <div class="main-content">
    <div class="wrapper">
        <h1>Manage admin</h1>
        <br />   
         <a href="add-admin.php" class="btn-primary">Add Admin</a>

        <br />   <br />
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>John Doe</td>
                <td>admin</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>John Doe</td>
                <td>admin</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>John Doe</td>
                <td>admin</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td>John Doe</td>
                <td>admin</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
        </table>
    </div>
    </div>
<?php
    include('partials/footer.php');
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1572403065331800"
     crossorigin="anonymous"></script>
</body>
</html>