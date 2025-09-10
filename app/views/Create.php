<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/style3.css">
</head>
<body>
    <div class="form-wrapper">
        <h1>Welcome to Create View</h1>
        <form action="<?=site_url('user/create');?>" method="post">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="role">Role:</label>
            <input type="text" id="role" name="role">

            <input type="submit" value="Submit">
        </form>
        <a href="<?=site_url('user/show');?>" class="back-link">Back to Records</a>
    </div>
</body>
</html>
