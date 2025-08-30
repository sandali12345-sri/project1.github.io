<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["add-categories"])) {
        //echo "Name is required.";
    } else {
       $name = $_POST["name"]; 
       echo "Hello, " . htmlspecialchars($name);
    }
}

include 'db-conn.php';
if(isset($_POST['add-categories'])){
    $cat_id = mt_rand(11111,99999);
    $cat_name = $_POST['cat_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $added_on = date('Y-m-d');
    $slug_url = SlugUrl($cat_name);
    $sql = "INSERT INTO ec_categories(cat_id,cat_name,meta_title,meta_desc,meta_key,slug_url,status,added_on)
    VALUES('$cat_id','$cat_name','$meta_title','$meta_desc','$meta_key','$slug_url',1,'$added_on')";

    $check = mysqli_query($conn,$sql);
    if($check){
        ?>
        <script type="text/javascript">alert('Inserted Successfully');window.location.href="view-categories.php";</script>
        <?php
    }
}

if(isset($_POST['add-sub-categories'])){
    $cat_id = mt_rand(11111,99999);
    $cat_name = $_POST['cat_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $added_on = date('Y-m-d');
    $parent_id = $_POST['parent_id'];
    $slug_url = SlugUrl($cat_name);
    $sql = "INSERT INTO ec_sub_categories(parent_id,cat_id,cat_name,meta_title,meta_desc,meta_key,slug_url,status,added_on)
    VALUES('$parent_id','$cat_id','$cat_name','$meta_title','$meta_desc','$meta_key','$slug_url',1,'$added_on')";

    $check = mysqli_query($conn,$sql);
    if($check){
        ?>
        <script type="text/javascript">alert('Inserted Successfully');window.location.href="view-sub-categories.php";</script>
        <?php
    }
}

if (isset($_POST['add-products'])) {
     $pro_id = mt_rand(11111, 99999);
     $pro_name = $_POST['pro_name'];
    $pro_cate = $_POST['pro_cate'];
    $pro_sub_cate =$_POST['pro_sub_cate'] ?? 0;
    $pro_desc = $_POST['pro_desc'];
    $Mrp = $_POST['mrp'];
    $Stock = $_POST['stock'];
    $selling_price = $_POST['selling_price'] ?? 0;
    $status = $_POST['status'];

    // Upload image
    $filename = $_FILES['pro_image']['name'];
    $tempname = $_FILES['pro_image']['tmp_name'];
    $uploadDir = 'assets/img/uploads/'; // Corrected folder path
    $destination = $uploadDir . $filename;

    //  Create folder if it doesn't exist
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if ($filename && $tempname) {
        if (move_uploaded_file($tempname, $destination)) {
            //echo "File uploaded successfully.";
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No image uploaded.";
    }

    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $added_on = date('Y-m-d');
    $slug_url = SlugUrl($pro_name);

    // You may want to escape inputs before using them in SQL for safety
    $sql = "INSERT INTO ec_product(
        pro_id, pro_name, pro_cate, pro_sub_cate, pro_desc, mrp, stock, selling_price, pro_image,
        meta_title, meta_desc, meta_key, status, slug_url, added_on
    ) VALUES (
        '$pro_id', '$pro_name', '$pro_cate', '$pro_sub_cate', '$pro_desc', '$Mrp', '$Stock', '$selling_price',
        '$destination', '$meta_title', '$meta_desc', '$meta_key', '$status', '$slug_url', '$added_on'
    )";

    $check = mysqli_query($conn, $sql);
    if ($check) {
          ?>
        <script type="text/javascript">alert('Inserted Successfully');</script>
         <?php 
    } else {
        echo "DB Error: " . mysqli_error($conn);
    }
}


function get_sub_categories(){
    include 'db-conn.php';
    $sql = "SELECT * FROM ec_sub_categories ORDER BY id DESC";
    $check = mysqli_query($conn,$sql);
    $sno = 1;
    while($result = mysqli_fetch_assoc($check)){
        $parent_id = $result['parent_id'];
        $sql2 = "SELECT cat_name FROM ec_categories where cat_id=$parent_id";
        $check2 = mysqli_query($conn,$sql2);
        $parent = mysqli_fetch_assoc($check2);
     echo  $output ="<tr>
        <td>".$sno++."</td>
        <td>".$result['cat_id']."</td>
        <td>".ucwords($result['cat_name'])."</td>
        <td>".ucwords($parent['cat_name'])."</td>
        <td>".$result['slug_url']."</td>
        <td>".$result['status']."</td>
        <td>".$result['added_on']."</td>
        </tr>";
    }   
    

}

if(isset($_POST['cat_id'])){
   $p_id = $_POST['cat_id'];
   $sql = "SELECT * FROM ec_sub_categories where parent_id = $p_id ORDER BY id DESC";
    $check = mysqli_query($conn,$sql);
    ?>
    <option value="">select</option>
    <?php
        while($result = mysqli_fetch_assoc($check)){
            echo "<option value=".$result['cat_id'].">".$result['cat_name']."</option>";
        }

}

function SlugUrl($string){
    $slug = preg_replace('/[^a-zA-Z0-9 -]/','',$string);
    $slug = str_replace(' ','-',$slug);
    $slug = strtolower($slug);
    return $slug;
}

?>
