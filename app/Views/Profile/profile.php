<?= $this->extend("layout/header") ?>

<?= $this->section("profile") ?>

<div class="container2">
    <?php if (session()->get('success')) : ?>
        <div class="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>
    <form class="" action="/profile" method="post">
    <center> <h2>Update Profile</h2> </center>   
        <div class = 'content'>
            

            <label>Date of birth</label>
            <input type="date" min="1080-01-01" max="2022-08-31" class="form-control" name="Dateofbirth" id="Dateofbirth" value="<?= set_value("Dateofbirth") ?>">
        
            <label>Contact No.</label>
            <input class="input" type="tel" placeholder="+673" name="Contact" id="Contact" value="<?= set_value("Contact") ?>">
                
            <label>Bio</label>
            <textarea class="textarea" placeholder="Enter your Bio" class="form-control" name="Bio" id="Bio" value="<?= set_value("Bio") ?>"></textarea>
               
        
            <button class="button is-fullwidth is-success">Update</button>
    </div>
                
    </form>
</div>

<?= $this->endSection() ?>

<!-- <h2>Update Profile</h2>
                
                <form class = "" action="/profile" method="post">
                    <div class = "row">
                    <div class = "form-group">
                        <label for = "Dateofbirth">Date of birth</label>
                        <input type ="date" min="1080-01-01" max="2022-08-31" class = "form-control" name= "Dateofbirth" id = "Dateofbirth" value ="<?= set_value("Dateofbirth") ?>">
                    </div>

                    <div class = "form-group">
                        <label for = "Contact">Contact No.</label>
                        <input type ="number" class = "form-control" name= "Contact" id = "Contact" value ="<?= set_value("Contact") ?>">
                    </div>

                    </div>

                    <div class = "form-group">
                        <label for = "Bio">Bio</label>
                        <input type ="text" size = 100 class = "form-control" name= "Bio" id = "Bio" value ="<?= set_value("Bio") ?>">
                    </div>

                    <div class = "row">
                        <button type = "Update" class = "btn">Update</button>
                    </div> -->