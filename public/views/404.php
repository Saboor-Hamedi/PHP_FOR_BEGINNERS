<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f2f2f2;
  }

  .container {
    text-align: center;
  }

  h1 {
    font-size: 10em;
    margin: 0;
    color: #333;
  }

  p {
    font-size: 1.5em;
    color: #666;
  }

  a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.2em;
    transition: background-color 0.3s;
  }

  a:hover {
    background-color: #45a049;
  }

  @media (max-width: 600px) {
    h1 {
      font-size: 6em;
    }
  }
</style>

<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops! The page you are looking for might be in another galaxy.</p>
    <a href="/">Go back to home</a>
  </div>
</body>

</html>