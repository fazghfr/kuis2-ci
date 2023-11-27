<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Add Bootstrap navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <form method="get" action="/about">
                        <button type="submit" class="nav-link btn btn-link">About</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="/">
                        <button type="submit" class="nav-link btn btn-link"><strong>eCinema</strong><span class="sr-only">(current)</span></button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="#">
                        <button type="submit" class="nav-link btn btn-link">Contact</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <br> <br> <br> 
    <div class="text-center mt-20">
        <h1>Total Price</h1>
        <h2><small><?php echo $film['title']; ?></small></h2>
        <br>
            
        <div class="text-center mt-20">
                <img src="<?php echo $film['picture_url']; ?>" alt="<?php echo $film['title']; ?>" style="width: auto; height: 180px;">
        </div>
        <br>
        <h2>Rp <?php echo $jumlah_tiket*$ticketprice; ?></h2>
    </div>

    <!-- Payment Method Dropdown Below Navbar -->
    <div style="text-align: center; margin-top: 20px;">
        <form method="get" action="/">
            <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod">
                <option value="creditCard">Credit Card</option>
                <option value="paypal">PayPal</option>
                <!-- todo : notification -->
            </select>
            <br><br>
            <div class="text-center mt-20">
                <p><small><?php echo $jumlah_tiket; ?> Ticket For <?php echo $film['title']; ?> Movie </small></p>
            </div>
            <button type="submit" class="btn btn-primary">Pay</button>
        </form>
    </div>

    

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
