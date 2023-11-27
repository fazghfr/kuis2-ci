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

    
    <div class="text-center">
        <h1 class="text-center">Selamat Datang di eCinema</h1> <!-- Added text-center class -->
    </div>
    <div class="container mt-4">
        <?php if (!empty($bioskop['id'])): ?>
            <form id="bioskopForm" method="get">
        <?php else: ?>
            <form id="bioskopForm" method="get">
        <?php endif; ?>
            <div class="dropdown">
                <select class="form-control" id="selectBioskop">
                    <option value="">Select Bioskop</option>
                    <?php foreach ($bioskop as $row): ?>
                        <option value="<?= esc($row['id']) ?>"><?= esc($row['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('selectBioskop').addEventListener('change', function() {
            var selectedBioskop = this.value;
            var form = document.getElementById('bioskopForm');
            form.action = '/bioskop/' + selectedBioskop;
            form.removeAttribute('name'); // Remove the 'name' attribute from the select element
        });
    </script>
    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
