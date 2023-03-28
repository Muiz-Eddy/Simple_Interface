<?= $this->extend("layout/header") ?>


<?= $this->section("content") ?>

<div class="login-form-container">
    <?php if (session()->get('success')) : ?>
        <div class="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>
    <form class="" action="/login" method="post">
        
                <center> <h2>Login</h2> </center>   
                <div class="content">
                    <label>Email : </label>   
                    <input class="input" type="email" placeholder="Email" name="email" id="email" value="<?= set_value("email") ?>">
                    <label>Password : </label>  
                    <input class="input" type="password" placeholder="Password" name="password" id="password" value="">
                    <button class="success">Login</button>
                    <a href="/register">Register here</a>
                </div>
                

            <?php if (isset($validation)) : ?>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <?= $validation->listErrors() ?>

                </div>
            <?php endif; ?>
        
    </form>
</div>

<?= $this->endSection() ?>