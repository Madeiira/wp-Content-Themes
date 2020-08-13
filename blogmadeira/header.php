<head>
<meta http-equiv="Content-Type" content="text/css; charset=utf-8" />
<title>Header</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-exemple-navbar-collapse-1">
      	<span class="sr-only">Toggle navigation </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url');?>"> <?php echo get_bloginfo('name');?></a>
     </div>
     
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
   		<?php
			$pages = get_pages(array('parent' => 0));
			foreach($pages as $p):
					$childpages = get_pages(array('child_of'=>$p->ID));
					if(!count($childpages)){
					$link= get_page_link($p->ID);
					$title = $p->post_title;
					printf('<li><a href="%s">%s </a></li>',$link,$title);
					}else{
					 echo"<li>"; 	
					 printf('<a href="#" id="dropdownMenuLink"  class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" role="button" 
					 aria-haspopup="true" aria-expanded="false">%s<span class="caret"> </span></a>',$p->post_title );
					 echo'<ul class="dropdown-menu">';
				     foreach($childpages as $child){
						 $link = get_page_link($child->ID);
						 $title =$child->post_title; 
						 printf('<li><a href="%s">%s</a></li>',$link,$title);
					 }
					 echo"</li></ul>";
					}
			endforeach;
		
		?>
       </ul>
     </div>  
  </div>    
</nav>




