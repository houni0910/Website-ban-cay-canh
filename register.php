<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600;1,700&display=swap");

:root {
  --success-color: #2691d9;
  --error-color: #e74c3c;
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background: linear-gradient(120deg, #3ca7ee, #9b408f);
  height: 100vh;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Poppins";
}
.container {
  width: 400px;
  border: none;
  border-radius: 10px;
  background-color: #fff;
  padding: 40px;
}
.container h1 {
  text-align: center;
}
.form-control {
  width: 100%;
  position: relative;
  margin-top: 40px;
}
.form-control input {
  width: 100%;
  height: 40px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid #adadad;
}
.form-control span {
  border-bottom: 3px solid var(--success-color);
  position: absolute;
  top: 38px;
  left: 0;
  width: 0%;
  transition: 0.3s;
}
.form-control input:focus ~ span {
  width: 100%;
}
.form-control.error small {
  color: var(--error-color);
}
.form-control.error input {
  border-bottom: 3px solid var(--error-color);
}
.btn-submit {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  border: none;
  outline: none;
  background-color: var(--success-color);
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  margin: 20px 0px;
}
.btn-submit:hover {
  background: #08609a;
}
.signup-link {
  text-align: center;
}
.signup-link a {
  text-decoration: none;
  color: var(--success-color);
}
.signup-link a:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        echo($_GET['error']);
    }
    ?>
    <form action="process_register.php" method="POST">
      <div class="container">
        <h1>Create a new account</h1>
        <div class="form-control">
          <input
            id="username"
            type="text"
            name="name"
            id=""
            placeholder="Username"
          />
          <small></small>
          <span></span>
        </div>
        <div class="form-control">
          <input
            id="phone"
            type="text"
            name="phone"
            id=""
            placeholder="Phone"
          />
          <small></small>
          <span></span>
        </div>

        <div class="form-control">
          <input
            id="email"
            type="email"
            name="email"
            id=""
            placeholder="Email"
          />
          <small></small>
          <span></span>
        </div>

        <div class="form-control">
          <input
            id="password"
            type="password"
            name="password"
            id=""
            placeholder="Password"
          />
          <small></small>
          <span></span>
        </div>

        <button type="submit" class="btn-submit">Sign Up</button>
        <div class="signup-link">not a member ? <a href="login.php">Sign in</a></div>
      </div>
    </form>

</body>
</html>