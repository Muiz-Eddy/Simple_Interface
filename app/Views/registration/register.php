<?= $this->extend("layout/header") ?>

<?= $this->section("register") ?>

<div class="container2">
    
        <form class="" action="/register" method="post">
        <center> <h2>Register</h2> </center>   
                    <div class="content">
                            <label class="label">First Name</label>
                            
                            <input class="input" type="text" placeholder="First Name" name="firstname" id="firstname" value="<?= set_value("firstname") ?>">

                            <label class="label">Last Name</label>
                            <input class="input" type="text" placeholder="Last Name" name="lastname" id="lastname" value="<?= set_value("lastname") ?>">
                        
                            <label class="label">Email</label>
                            
                            <input class="input" type="email" placeholder="Email input" name="email" id="email" value="<?= set_value("email") ?>">
                            
                            <label class="label">Password</label>

                            <input class="input" type="password" placeholder="Password" name="password" id="password" value="">
                                
                            <input class="input" type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" value="">
                 
                            <button class="button is-fullwidth is-success">Register</button>
                            <a href="/login">I have Account</a>
                        
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

