<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <h1 class="font-weight-medium">Details</h1>
        <h1 class="font-weight-medium"></h1>
        <div class="col-lg-7"><img src="/img/<?= $anime['sampul']; ?>" class="card-img" alt="..."></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light"><?= $anime['judul']; ?></h1>
            <p class="card-text"><b>Genres : </b> <?= $anime['genre']; ?></p>
            <p class="card-text"><b>Studio : </b> <?= $anime['studio']; ?></p>
            <a href="/anime/edit/<?= $anime['slug']; ?>" class="btn btn-warning">Edit</a>

            <form action="/anime/<?= $anime['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="/anime/list_anime/#table" class="btn btn-outline-dark">Back</a>
            <br><br>

        </div>
    </div>
    <!-- Call to Action-->
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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