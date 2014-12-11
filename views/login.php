<div class="content container">
  <h2>Login</h2>
  <div class="login-container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="login">
      <label for="username">Username:</label>
      <input type="text" name="username" placeholder="awesome" value="">
      <label for="password">Password:</label>
      <input type="password" name="password" value="">
      <button type="submit" class="btn">Log In</button>
    </form>
    <?php if (isset($hi)) echo $hi ?>
  </div>
</div>