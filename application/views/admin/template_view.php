<?php $this->load->view('admin/includes/header'); ?>

<nav class="navbar navbar-default navbar-collapse navbar-fixed-top" role="navigation">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href='/'><?php echo $this->tools_model->getShopName(); ?></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-time"></span> Master <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="/admin/product_category"><span class="glyphicon glyphicon-time"></span> Category</a></li>  
                <li><a href="/admin/products"><span class="glyphicon glyphicon-time"></span> Products</a></li>
                <li><a href="/admin/banners"><span class="glyphicon glyphicon-time"></span> Banners</a></li>
                <li><a href="/admin/how_order"><span class="glyphicon glyphicon-time"></span> How To Order</a></li>
            </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-time"></span> Widget <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="/admin/ym_live_support"><span class="glyphicon glyphicon-time"></span> YM Live Support</a></li>
                <li><a href="/admin/widget_contact"><span class="glyphicon glyphicon-time"></span> Contact</a></li>
            </ul>
        </li>
    </ul>  
     
        
                
      
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-star"></span> Alert <span class="badge">7</span></a></li>
      <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('name'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/admin/profile"><span class="glyphicon glyphicon-user"></span> Shop Profile</a></li>
                <li><a href="/admin/setting"><span class="glyphicon glyphicon-time"></span> Setting</a></li>
                <li class="divider"></li>
                <li><a href="/admin-panel/logout"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
              </ul>
            </li>
    </ul>
      
    
     
  </div><!-- /.navbar-collapse -->
</nav>      

      
<div class="container">
              
           <?php $this->load->view($content); ?>   
    
    
    
           
              
              

     
<?php $this->load->view('admin/includes/footer'); ?>


  </body>
</html>