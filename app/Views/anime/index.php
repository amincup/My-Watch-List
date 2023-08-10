<?= $this->extend('layout/template'); ?>

<?php $this->section('content') ?>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1596445836561-991bcd39a86d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<br>
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Watch List</h2>
                <p class="lead">Immerse yourself in a user-friendly interface designed to make managing your watchlist effortless. Dive into details, explore genres, and relive memorable scenes. And the best part? It's all tailored to you.</p>
                <p class="lead">Indulge in your love for movies and series, one click at a time. Your watchlist, your way.</p>
                <a href="/anime/create" class="btn btn-dark mb-3">Add your watch list</a>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 id="table">Keep your track here!</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($anime as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $a['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $a['judul']; ?></td>
                            <td>
                                <a href="/anime/list_anime/<?= $a['slug']; ?>" class="btn btn-dark">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
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
<?php $this->endSection(); ?>