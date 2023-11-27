<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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

    <div class="container">
        <h2>Film Titles at  <?php echo $bioskop['nama']; ?>:</h2>
        <p>cinema's location :  <?php echo $bioskop['lokasi']?> </p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($film as $filmdata): ?>
                    <tr>
                        <td><?php echo $filmdata['id']; ?></td>
                        <td><?php echo $filmdata['title']; ?></td>
                        <td><?php echo $filmdata['description']; ?></td>
                        <td>
                            <!--  -->
                            <form action="<?= site_url('/buy/' . $filmdata['id']); ?>" method="get">
                                <input type="hidden" name="bioskopid" value="<?= $bioskop['id']; ?>">
                                <button type="submit" class="btn btn-primary">Pesan</button>
                            </form>
                        </td>
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
