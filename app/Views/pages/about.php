<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <main>
                <section class="about">
                    <h1>About My Watch List</h1>
                    <p>Welcome to My Watch List, a place where you can keep track of all the movies and series you've watched. Our mission is to provide you with a seamless experience in managing and organizing your entertainment preferences.</p>
                    <p>Whether you're a movie enthusiast or a binge-watching expert, My Watch List is here to assist you in curating your entertainment journey.</p>
                </section>
                <section class="team">
                    <h2>Meet the Team</h2>
                    <div class="member">
                        <img src="member1.jpg" alt="Team Member 1">
                        <h3>Raid Abdurahman Ikram</h3>
                        <p>Backend Developer</p>
                    </div>
                    <div class="member">
                        <img src="member2.jpg" alt="Team Member 2">
                        <h3>Yusuf Amin Abdillah</h3>
                        <p>Frontend Developer</p>
                    </div>
                    <!-- Add more team members here -->
                </section>
            </main>
            <footer>
                <p>&copy; 2023 My Watch List. All rights reserved.</p>
            </footer>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>