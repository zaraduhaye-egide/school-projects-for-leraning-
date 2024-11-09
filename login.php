<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT REGISTARTION</title>
    <style>
        body{
            font-family: Arial,sans-serif;
            display: flex;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f6f9;
        }
        h2{
            text-align: center;
            color: #333;
        
        }
        form{
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;

        }
        label{
            font-weight: bold;
            display: flex;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"]{
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;

        }
        button{
            width: 100%;
            padding: 10px;
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
             cursor: pointer;
             transition: background-color 0.3s ease;
        }
        button:hover{
            background-color: #45a049;
        }
        .form-container{
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <h2>STUDENT REGISTARTION FORM</h2>

        <form action="insert.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>