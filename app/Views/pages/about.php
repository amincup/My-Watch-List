<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1478720568477-152d9b164e26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Discover the Story Behind My Watch List</h2>
                <p class="lead">At My Watch List, our passion is your entertainment journey. We're more than just a platform; we're your companion in exploring the world of movies and series. Behind every click and watch, there's a story waiting to be told.</p>
                <p class="lead">We understand the joy of discovering new genres, the excitement of ticking off your must-watch list, and the nostalgia that comes with revisiting old favorites. That's why we've crafted an experience that celebrates every aspect of your entertainment voyage.</p>
                <p class="lead">Meet the team that's dedicated to bringing your watchlist dreams to life. From frontend wizards to backend sorcerers, our experts are driven by the same love for storytelling that fuels your movie nights and binge-watching marathons.</p>
                <p class="lead">Join us in curating memories, sharing recommendations, and embracing the magic of cinema. My Watch List is more than an app; it's a community united by the love for narratives that touch our hearts.</p>
                <p class="lead">Come, be a part of the story behind the screens.</p>
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