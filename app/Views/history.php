<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
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
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Past Transaction</h2>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>bioskop</th>
                    <th>film</th>
                    <th>jadwal</th>
                    <th>jumlah tiket</th>
                    <th>payment method</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['bioskop']['nama']; ?></td>
                        <td><?php echo $order['film']['title']; ?></td>
                        <td><?php echo $order['jadwal']['tanggal-jam']; ?></td>
                        <td><?php echo $order['jumlah_tiket']; ?></td>
                        <td><?php echo $order['payment_method']; ?></td>
                        <td><?php echo $order['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    
    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
