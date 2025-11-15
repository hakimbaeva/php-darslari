<?php 
 
 include('header.php') ;
 //require('header.php')
 ?> 
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
  <?php
  include('footer.php') ;
  ?>


