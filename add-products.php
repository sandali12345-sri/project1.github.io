<?php include 'db-conn.php';
 $sql = "SELECT * FROM ec_categories ORDER BY id DESC";
    $check = mysqli_query($conn,$sql);
    
    
?> 
<!DOCTYPE html>
<html lang="zxx">
   <!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 14:08:09 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Sales</title>
      <link rel="icon" href="img/logo.png" type="image/png">
      <?php include 'links.php';?>
   </head>
   <body class="crm_body_bg">
    
    <?php include 'header.php';?>
  
      <section class="main_content dashboard_part large_header_bg">
         <div class="container-fluid g-0">
            <div class="row">
               <div class="col-lg-12 p-0 ">
                  <div class="header_iner d-flex justify-content-between align-items-center">
                     <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                     </div>
                     <div class="serach_field-area d-flex align-items-center">
                        <div class="search_inner">
                           <form action="#">
                              <div class="search_field">
                                 <input type="text" placeholder="Search here...">
                              </div>
                              <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
                           </form>
                        </div>
                        <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                     </div>
                     <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                           <li>
                              <a class="bell_notification_clicker nav-link-notify" href="#"> <img src="img/icon/bell.svg" alt>
                              </a>
                              <div class="Menu_NOtification_Wrap">
                                 <div class="notification_Header">
                                    <h4>Notifications</h4>
                                 </div>
                                 <div class="Notification_body">
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/2.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>Cool Marketing </h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/4.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>Awesome packages</h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/3.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>what a packages</h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/2.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>Cool Marketing </h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/4.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>Awesome packages</h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                    <div class="single_notify d-flex align-items-center">
                                       <div class="notify_thumb">
                                          <a href="#"><img src="img/staf/3.png" alt></a>
                                       </div>
                                       <div class="notify_content">
                                          <a href="#">
                                             <h5>what a packages</h5>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                       <a href="#" class="btn_1">See More</a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg" alt> </a>
                           </li>
                        </div>
                        <div class="profile_info">
                           <img src="img/client_img.png" alt="#">
                           <div class="profile_info_iner">
                              <div class="profile_author_name">
                                 <p>Neurologist </p>
                                 <h5>Dr. Robar Smith</h5>
                              </div>
                              <div class="profile_info_details">
                                 <a href="#">My Profile </a>
                                 <a href="#">Settings</a>
                                 <a href="#">Log Out </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
           <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
               <div class="row justify-content-center">

                  <div class="col-lg-12">
                     <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h3 class="m-0">Fill the form row</h3>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="card-body">
                              <form action="functions.php" method="post" enctype="multipart/form-data">
                                 <div class="row mb-3">
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputName">Product Name</label>
                        
                                       <input type="text" class="form-control" name="pro_name" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="col-md-6 md-3">
                                       
                                      <label class="form-label" for="inputName">Parent Categories</label>
                                      <select name="pro_cate" class="form-control" onchange="get_subcategories(this.value)">
                                       <option value="">--select--</option>
                                      <?php foreach ($check as $val) { ?>
                                         <option value="<?php echo $val['cat_id'];?>"><?php echo ucwords ($val['cat_name'])?></option>
                                    <?php } ?>

                                      </select>
                                </div>
                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">MRP</label>
                                       <input type="text" class="form-control"name="mrp" id="inputEmail4" placeholder="MRP">
                                </div>
                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Sub-category</label>
                                       <select name="pro_sub_cate	" id="subcat_id" class="form-control">
                                              <option value="">select</option>

                                      </select>
                                </div>
                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Pro-desc</label>
                                       <textarea name="pro_desc" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Stock</label>
                                       <input type="text" class="form-control"name="stock" id="inputEmail4" placeholder="Stock">
                                </div>
                                
                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Selling Price</label>
                                       <input type="text" class="form-control"name="selling_price " id="inputEmail4" placeholder="Selling Price">
                                </div>

                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Product image</label>
                                       <input type="file" class="form-control"name="pro_image" id="inputEmail4" placeholder="image">
                                </div>

                                <div class="col-md-6">
                                       <label class="form-label" for="inputTitle">Meta Title</label>
                                       <input type="text" class="form-control"name="meta_title" id="inputEmail4" placeholder="title">
                                </div>
                                <div class="col-md-6 mb-3 md-6">
                                       <label class="form-label" for="inputKey">Meta Keyword</labe>
                                       <input type="text" class="form-control"name="meta_key" id="inputEmail4" placeholder="Keyword">
                                </div>
                                <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputDesc">Meta Description</label>
                                       <input type="text" class="form-control" name="meta_desc" id="inputEmail4" placeholder="Description">
                                </div>
                                <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputState">Status</label>
                                       <select id="inputState"  name="status"class="form-control">
                                          <option selected>Choose...</option>
                                          <option value ="1">Active</option>
                                          <option value ="0">Deactive</option>
                                       </select>
                                    </div>
                                 </div>    
                                 
                                 <button type="submit" name="add-products" class="btn btn-primary">Add Product</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php include 'footer.php';?>
         <script type="text/javascript">
            function get_subcategories(cat_id){
              var cat_id = cat_id;
              $.ajax({
               url: 'functions.php',
               method: 'post',
               data: {cat_id:cat_id},
               error:function(){
                  alert("something went wrong");
               },
               success:function(data){
                  $("#subcat_id").html(data);
               }
              });
            }
         </script>
         
        


