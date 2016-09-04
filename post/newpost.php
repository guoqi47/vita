<?php 
 	header("Content-Type:text/html; charset=utf-8");
	session_start();
	
 	echo
 	"<div class='con_left_list'>
 	 	 						<span class='reply' title='回复'>0</span>
 	 	 					
 	 	 						<a href='postdetail.html' class='title' title='题目' target='_blank' >{$_REQUEST['title']}</a>
 	 	 						<br>
 	 	 						<div class='post_con'>
 	 	 							<span class='content'>{$_REQUEST['content']}</span>
 	 	 							<span class='time'>
 	 	 								17:47
 	 	 							</span>
 	 	 							<span class='author'> 
 	 	 								<img src='images/author.png' alt=''>
 	 	 								<a href='' >怎一心</a>
 	 	 							</span>
 	 	 							
 	 	 							<br>
 	 	 							<span class='con_img'>
 	 	 								<img src='{$_SESSION['uploadDir']}' alt=''>
 	 	 							</span>
 	 	 						</div>
 	 	 					</div>"
?>