<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Car Dealership</title>
</head>
<body>
  
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#inventory">Inventory</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul> 
  </nav>

  <div class="container">
      <?php require __DIR__.'/recursos/resource_llistar_categories.php'; ?>
  </div>

  <section id="home">
    <h2>Welcome to AutoVip</h2>
    <p>Explore our wide range of high-quality vehicles.</p>
  </section>

  <section id="inventory">
    <h2>Inventory</h2>
    <!-- Add your car listings here -->
    <div class="car-listing">
      <img src="car1.jpg" alt="Car 1">
      <h3>Car Model 1</h3>
      <p>Price: $30,000</p>
    </div>
    <div class="car-listing">
      <img src="car2.jpg" alt="Car 2">
      <h3>Car Model 2</h3>
      <p>Price: $25,000</p>
    </div>
    <!-- Add more listings as needed -->
  </section>

  <section id="services">
    <h2>Our Services</h2>
    <ul>
      <li>Financing Options</li>
      <li>Trade-in Assistance</li>
      <li>Vehicle Maintenance</li>
    </ul>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2023 AutoVip - Your Trusted Car Dealer</p>
  </footer>

</body>
</html>
