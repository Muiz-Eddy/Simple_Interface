<?= $this->extend("layout/header") ?>

<?= $this->section("user_data") ?>

    <div class="box">
        <div>
            <center><h3>List of Users</h3></center>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($row->getResult() as $key => $data) { ?>
                    <tr>
                        <td></td>
                        <td><?=$data->firstname?></td>
                        <td><?=$data->lastname?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->Dateofbirth?></td>
                    </tr>
                    <?php

                    } ?>
                </tbody>
        </div>  

    </div>

<?= $this->endSection() ?>