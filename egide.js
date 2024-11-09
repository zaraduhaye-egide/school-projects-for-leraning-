<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Show/Hide Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
        }

        .input-container {
            margin-bottom: 20px;
        }

        .input-container input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .show-hide-btn {
            cursor: pointer;
            color: #007bff;
            font-size: 14px;
            border: none;
            background: none;
            text-align: right;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <div class="input-container">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter Username" required>
    </div>

    <div class="input-container">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password" required>
        <span id="togglePassword" class="show-hide-btn" onclick="togglePassword()">Show</span>
    </div>

    <button type="submit">Login</button>
</div>

<script>
// Function to toggle password visibility
function togglePassword() {
    var passwordField = document.getElementById("password");
    var toggleButton = document.getElementById("togglePassword");

    // Toggle password visibility and update button text
    if (passwordField.type === "password") {
        passwordField.type = "text";   // Show password
        toggleButton.textContent = "Hide";  // Change button text
    } else {
        passwordField.type = "password";  // Hide password
        toggleButton.textContent = "Show";  // Change button text
    }
}
</script>

</body>
</html>
