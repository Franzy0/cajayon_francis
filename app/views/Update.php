<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Box wrapper */
        .form-wrapper {
            width: 100%;
            max-width: 450px;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.8s ease-in-out;
        }

        /* Title */
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #222;
            font-size: 1.6rem;
            font-weight: 700;
        }

        /* Labels */
        label {
            display: block;
            margin-top: 12px;
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
        }

        /* Inputs */
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #185a9d;
            outline: none;
            box-shadow: 0 0 6px rgba(24, 90, 157, 0.3);
        }

        /* Submit (Update) button - styled like table yellow */
        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 14px;
            background: #f1c40f;
            border: none;
            border-radius: 8px;
            color: #222;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        input[type="submit"]:hover {
            background: #d4ac0d;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        /* Back link */
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #185a9d;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #43cea2;
            text-decoration: underline;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="form-wrapper">
        <h1>Welcome to Update View</h1>
        <form action="<?= site_url('user/update/' . $student['id']); ?>" method="post">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?= html_escape($student['last_name']); ?>">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?= html_escape($student['first_name']); ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= html_escape($student['email']); ?>">

            <label for="role">Role:</label>
            <input type="text" id="role" name="role" value="<?= html_escape($student['Role']); ?>">

            <input type="submit" value="Update">
        </form>
        <a href="<?= site_url('user/show'); ?>" class="back-link">Back to Records</a>
    </div>
</body>

</html>