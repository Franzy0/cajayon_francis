<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showdata</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">
</head>
<body>
    <div class="table-wrapper">
        <h1>Welcome to Showdata View</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(html_escape($students) as $student): ?>
                <tr>
                    <td><?=$student['id'];?></td>
                    <td><?=$student['last_name'];?></td>
                    <td><?=$student['first_name'];?></td>
                    <td><?=$student['email'];?></td>
                    <td><?=$student['Role'];?></td>
                    <td>
                        <a href="<?=site_url('user/update/'.$student['id']);?>" class="btn btn-update">Update</a>
                        <a href="<?=site_url('user/soft-delete/'.$student['id']);?>" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?=site_url('user/create');?>" class="create-link">Create Record</a>
    </div>
</body>
</html>
