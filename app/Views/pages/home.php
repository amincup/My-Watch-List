<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <main>
                <section class="hero">
                    <h1>Welcome to My Watch List</h1>
                    <p>Keep track of all the movies and series you've watched!</p>
                </section>
                <section class="recent-watches">
                    <h2>Recently Watched</h2>
                    <div class="watch-list">
                        <!-- List the recently watched films or series -->
                        <div class="watch-item">
                            <img src="movie1.jpg" alt="Movie 1">
                            <h3>Movie Title 1</h3>
                        </div>
                        <div class="watch-item">
                            <img src="series1.jpg" alt="Series 1">
                            <h3>Series Title 1</h3>
                        </div>
                        <!-- Add more watch items here -->
                    </div>
                </section>
            </main>
            <footer>
                <p>&copy; 2023 My Watch List. All rights reserved.</p>
            </footer>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>