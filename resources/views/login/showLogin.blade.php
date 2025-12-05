<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1d4ed8;
        }
        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>-->
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="role" class="form-label">Select Role</label>
        <select class="form-select" name="role" id="role" required>
            <option value="">--Choose Role--</option>
            <option value="cashier">Cashier</option>
            <option value="manager">Manager</option>
            <option value="inventory">Inventory Staff</option>
            <option value="administrator">Administrator</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
</body>
</html>
