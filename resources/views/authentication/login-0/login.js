function login() {
  // Get input values
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Check if the username and password are valid (replace this with your authentication logic)
  if (username === 'user' && password === 'password') {
    document.getElementById('loginStatus').innerText = 'Login successful! Redirecting...';
    // Redirect to another page after 1.5 seconds (replace 'dashboard.html' with the desired page)
    setTimeout(function() {
      window.location.href = 'content.html';
    }, 500);
  } else {
    document.getElementById('loginStatus').innerText = 'Invalid username or password';
  }
}