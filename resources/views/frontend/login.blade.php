
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Shree Hari Pinjra Pol Gaushala</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Welcome Back!</h2>
      <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="input-group">
          <input type="text" id="username" name="email" placeholder="Username" required>
          @error('email')
          <p class="text-danger">{{ $message }}</p>
      @enderror
        </div>
        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Password" required>
          @error('email')
          <p class="text-danger">{{ $message }}</p>
      @enderror
        </div>
        <br>
        <button type="submit">Login</button>
      </form>
      <br>
      <div class="back-to-website">
        <a href="/">Back to Website</a>
      </div>
      <div class="access-info">Only administrators have access.</div>
    </div>
  </div>
</body>
</html>


<style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #fd5f00;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  width: 90%; /* Adjusted container width */
  max-width: 500px; /* Added max-width to ensure it doesn't exceed a certain size */
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.login-box {
  padding: 40px;
  text-align: center;
  animation: fadeIn 1s ease;
}

.login-box h2 {
  color: #333;
  margin-bottom: 30px;
  font-size: 24px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group input {
  width: calc(100% - 22px);
  padding: 10px;
  border: none;
  border-bottom: 2px solid #736d12;
  outline: none;
  font-size: 16px;
  transition: border-bottom-color 0.3s ease;
}

.input-group input:focus {
  border-bottom-color: #0056b3;
}

button[type="submit"], .back-to-website a {
  width: 100%;
  padding: 10px;
  background: #851313;
  border: none;
  border-radius: 10px;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  font-family: cursive;
  transition: background 0.3s ease;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 10px;
}

button[type="submit"]:hover, .back-to-website a:hover {
  background: #0056b3;
}

.access-info {
  font-size: 18px;
  color: #777777;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Media Queries for Responsive Design */

@media (max-width: 600px) {
  .login-container {
    width: 95%;
  }
}

  </style>
