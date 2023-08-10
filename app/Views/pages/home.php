<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-4" src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Channel_W_HQ.jpg" alt="..." />
        <h1 class="text-white fs-3 fw-bolder">My Watch List</h1>
        <p class="text-white-50 mb-0">More than just watching.</p>
    </div>
</header>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Welcome to Your Watchlist Journey</h2>
                <p class="lead">Start tracking your movies & series today and keep track of all the movies and series you've watched!</p>
            </div>
        </div>
    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1524712245354-2c4e5e7121c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Never Forget What You've Seen.</h2>
                <p class="lead">Explore and Rediscover your entertainment adventure. Here, your entertainment journey takes center stage. Seamlessly organize and track the movies and series you've cherished. Whether you're a movie aficionado or a TV show enthusiast, our platform empowers you to curate your personal catalog, bringing your favorite entertainment gems closer than ever.</p>

            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; My Watch List 2023</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<?= $this->endSection(); ?>