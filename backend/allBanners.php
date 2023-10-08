<?php
include "./backend_inc/header.php";
include "../database/env.php"; 

$query = "SELECT id, title, detail, status, banner_img FROM addbanners";
$result = mysqli_query($conn,$query);
$banners = mysqli_fetch_all($result,1);

?>




<div class="container-fluid">
    <table class="table table-responsive text-center" >
        <tr>
            <td>#</td>
            <td>Banner Image</td>
            <td>Title</td>
            <td>detail</td>
            <td>Featured</td>
            <td>Action</td>
        </tr>
        

        <?php
        foreach($banners as $key=>$banner){
        ?>    
            <tr>
            <td><?= ++$key ?></td>
            <td>
                <img src="../uploads/banners/<?=$banner['banner_img']?>" alt="" width="80">
            </td>
            <td><?=$banner['title']?></td>
            <td><?=$banner['detail']?></td>
            <td>
                <a href="../controller//statusUpdate.php?id=<?=$banner['id']?>">
                <span class="text-warning">
                    <i class="<?= $banner['status'] == 1 ? "fas" : "far" ?> fa-star"></i>
                    <!-- <i class="fas fa-star"></i> -->
                </span>
                </a>
            </td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>

    </table>
</div>









<?php
include "./backend_inc/footer.php"
?>