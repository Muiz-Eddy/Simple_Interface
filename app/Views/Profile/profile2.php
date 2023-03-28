<?= $this->extend("layout/header") ?>

<?= $this->section("profile2") ?>
<center> <h2>Profile</h2> </center>  
        <div class="content">
        
                <div class='personal'>
                <label class="label">
                    <h3 class = 'labels'>User Name</h3>
                </label>
                <h4><?= $userdata->firstname; ?> <?= $userdata->lastname; ?> </h4>

                <label class="label">
                    <h3 class = 'labels'>Email</h3>
                </label>
                <h4><?= $userdata->email; ?> </h4>
            
                </div>

                <div class='personal2'>
                <label class="label">
                    <h3 class = 'labels' >Date Of Birth</h3>
                </label>
                <p><?= $userdata->Dateofbirth; ?> </p>
            

                <label class="label">
                    <h3 class = 'labels' >Contact</h3>
                </label>
                <p><?= $userdata->Contact; ?> </p>
            
            
                <label class="label">
                    <h3 class = 'labels' >Bio</h3>
                </label>
                <p><?= $userdata->Bio; ?></p>
                </div>
            
                
                <button onclick="window.location.href='/profile'">Update Profile</button>
                
            
        </div>
        
    


<?= $this->endSection() ?>