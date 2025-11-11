<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aloqa Formasi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f5f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .contact-form {
      background-color: #fff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .contact-form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <form class="contact-form" action="data.php" method="POST">
    <h2>Aloqa shakli</h2>
    ~

    <label for="name">Ismingiz:</label>
    <input type="text" id="name" name="name" placeholder="Ismingizni kiriting" required>

    <label for="email">Email manzilingiz:</label>
    <input type="email" id="email" name="email" placeholder="Email kiriting" required>

    <label for="message">Xabaringiz:</label>
    <textarea id="message" name="message" placeholder="Xabaringizni yozing..." required></textarea>

    <button type="submit">Yuborish</button>
  </form>
</body>
</html>