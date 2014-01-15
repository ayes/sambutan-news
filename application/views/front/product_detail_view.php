<?php $this->load->view('front/obj/header'); ?>
<body>
<?php $this->load->view('front/obj/navbar'); ?>

  
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
                     <?php foreach ($this->tools_model->getBanners()->result() as $row)  : ?>
          <?php if ($row->id == 1) {
          $item = 'item active';
         } else {
             $item = 'item';
         } ?>
          <div class="<?php echo $item ;?>">
              <img src="<?php echo base_url().'fx-archive/images_banner/thumbs/'.$row->banner ?>">
        </div>
           <?php endforeach; ?>
        
       
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <div class="container">
        <div class='row'>
            <div class="col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <?php foreach ($getProductDetail as $row): ?>
                    <li><a href="<?php echo '/category/index/'.url_title(strtolower($this->tools_model->get_name_category($row->product_category_id))).'/'.$row->product_category_id ;?>"><span class="glyphicon glyphicon-th-large"></span> <?php echo $this->tools_model->get_name_category($row->product_category_id); ?></a></li>
                    <li class="active"><span class="glyphicon glyphicon-tag"></span> <?php echo $row->name; ?></li>
                        <?php endforeach; ?>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Category</h3>
                </div>
                <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                <?php foreach ($getCategory->result() as $row): ?>
                <?php if ($this->beranda_model->getCountCategoryProduct($row->id) == 0) { ?>
                <?php } else { ?>
                <li><a href="<?php echo '/category/index/'.url_title(strtolower($row->category)).'/'.$row->id ;?>"><?php echo $row->category.' <span class="badge pull-right">'.$this->beranda_model->getCountCategoryProduct($row->id).'</span>'; ?></a></li>
                <?php } ?>
                <?php endforeach; ?>         
                </ul>            
                </div>
                </div>   
                <?php $this->load->view('front/obj/ym_live_support'); ?>
                <?php $this->load->view('front/obj/widget_contact'); ?>
            </div>    
            
             <?php foreach ($getProductDetail as $row): ?>
            <div class="col-xs-6 col-sm-9">
                 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Product Description</h3>
  </div>
               <div class="panel-body">
                   <h1><?php echo $row->name; ?></h1>
                   <img class="img-rounded" src="<?php echo base_url(); ?>fx-archive/images_product/thumbs/<?php echo $row->picture; ?>"><br />
         <hr />
                   Code : <?php echo $row->id; ?><br />
                   Category : <a href="<?php echo '/category/index/'.url_title(strtolower($this->tools_model->get_name_category($row->product_category_id))).'/'.$row->product_category_id ;?>"><?php echo $this->tools_model->get_name_category($row->product_category_id); ?></a><br />
         Price : <?php echo 'Rp. '.number_format($row->price, 0, ',', '.'); ?><br />
         <?php echo $row->description; ?><br />
         <div class="text-right">
         <a href="/product/buy/<?php echo url_title(strtolower($row->name)).'/'.$row->id;?>" type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-shopping-cart"></span> Buy
</a>
             </div>
               </div>
                 </div>
            </div>
                    
<?php endforeach; ?>              
             
           
            
            
               
            </div>
  

       
        
        
      
         
         <?php $this->load->view('inc/footer'); ?>

  </body>
</html>
