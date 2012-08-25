<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php 
        	echo $this->Html->css(array('main','http://fonts.googleapis.com/css?family=Asap'));
			echo $scripts_for_layout;
        ?>
        <title><?php echo $title_for_layout.' | jami3i messi\'s world'?></title>
        
    </head>
    <body>
        <div class="center" id="content">
        	<div class="left" id="sidebar">
        		<div class="center" id="profile"></div>
        		<div class="center" id="description">
        			<p>
        				Name : <strong>jami3i messi</strong>;<br />
        				date of birth : <strong>198O</strong>;<br />
        				place : <strong>Marrakesh</strong><br />
        				job : <strong>7 jobs</strong><br />

					Jami3i Méési is an imaginary friend who sees the the world from his own angle . He believes his experience is worth sharing in this age of <strong>"we share,we care."</strong>
        			</p>
        		</div>
        		<div class="left" id="navigation">
        			<ul class="navigation">
        				<li><?php echo $this->Html->link('home', array('controller' => 'home', 'action' => 'index'))?></li>
        				<li><?php echo $this->Html->link('who am i', array('controller' => 'pages', 'action' => 'display', 'whoami'))?></li>
        				<li><?php echo $this->Html->link('all posts', array('controller' => 'posts', 'action' => 'index'))?></li>
        				<li><?php echo $this->Html->link('contact', array('controller' => 'pages', 'action' => 'display', 'contact'))?></li>
        			</ul>
        		</div>
        	</div>
        	<div class="right" id="main">
        		<div id="header"><h1>« &é"'(-è_çà)=$*^"«</h1></div>
        		<div id="content-2">
        			<?php echo $content_for_layout; ?>
        		</div>
        	</div>
        	<div class="clearfooter"></div>
        </div>
        <div id="footer">
        	<span id="copyright">&copy; all rights reserved to </span><a href="http://www.facebook.com/mlr3da" target="_blank">mohamedrida<strong>hanti</strong></a>
        </div>
    </body>
</html>

