<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    <form method="get" action="/history">
                        <button type="submit" class="nav-link btn btn-link">History</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text-center">
        <h1 class="text-center">Sedang Tayang</h1> <!-- Added text-center class -->
    </div>

    <!-- Add Carousel -->
    <div id="filmCarousel" class="carousel slide center-text" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($film as $key => $item): ?>
                <li data-target="#filmCarousel" data-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active"' : '' ?>></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($film as $key => $item): ?>
                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?> text-center">
                    <img src="<?= $item['picture_url'] ?>" class="d-block mx-auto" style="max-height: 250px; width: auto;" alt="<?= $item['title'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#filmCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#filmCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-4">
        <?php if (!empty($bioskop['id'])): ?>
            <form id="bioskopForm" method="get">
        <?php else: ?>
            <form id="bioskopForm" method="get">
        <?php endif; ?>
            <div class="dropdown text-center">
                <select class="form-control" id="selectBioskop">
                    <option value="">Select Bioskop</option>
                    <?php foreach ($bioskop as $row): ?>
                        <option value="<?= esc($row['id']) ?>"><?= esc($row['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
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
