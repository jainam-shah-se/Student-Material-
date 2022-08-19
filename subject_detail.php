<?php
include_once("headers.php");
?>

<?php
            
            $id=$_GET["Id"];
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="SELECT SName,Spic,SCode,Credits FROM subject,material WHERE subject.Sid=material.Sid AND subject.Sid='$id'";
            $result=$cnn->query($qry);
            $row=$result->fetch_assoc();
        
            $name=$row["SName"];
            $pic=$row["Spic"];
            $code=$row["SCode"];
            $credit=$row["Credits"];
           
            $qry2="SELECT Link,MName FROM subject,material WHERE subject.Sid=material.Sid AND subject.Sid='$id'";
            $result1=$cnn->query($qry2);  
                
            
            $str="<div class='profile-activity clearfix'>";    
                
                while($row1=$result1->fetch_assoc())
                {
          
                    
                    $str.="<div>                                                    
				   <a href='".$row1["Link"]."'>".$row1["MName"]."</a>
                    </div><br>";
                }

				$str.="</div>";

?>

<div class="col-xs-12">
								
                                
                                
								<div class="hr dotted"></div>

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
                                                <?php
                                                $x = 'Images/'.$pic;
                                                
                                                ?>
												<span class="profile-picture">
                                                	<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Subject Logo" src="<?php echo $x; ?>">
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white"><?php echo $name ?></span>
														</a>

														
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											 

											<div class="hr hr12 dotted"></div>

										

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div class="center">
												<span class="btn btn-app btn-sm btn-light no-hover">
													<span class="line-height-1 bigger-170 blue"><?php echo $credit ?></span>

													<br>
													<span class="line-height-1 smaller-90"> Credits </span>
												</span>

												<span class="btn btn-app btn-sm btn-yellow no-hover">
													<span class="line-height-1 bigger-140" style="font-size:8px"> <?php echo $code ?></span>

													<br>
													<span class="line-height-1 smaller-90"> Sub Code </span>
												</span>

												

												
											</div>

											<div class="space-12"></div>

											

											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-rss orange"></i>
												        Material Available
													</h4>

													
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed ace-scroll" style="position: relative;"><div class="scroll-track scroll-active" style="display: block; height: 200px;"><div class="scroll-bar" style="height: 63px; top: 0px;"></div></div>
                                                            <div class="scroll-content" style="max-height: 200px;">
														      <?php echo $str; ?>

															

															

															
															
														</div></div>
													</div>
												</div>
											</div>

											
											
										</div>
									</div>
								</div>

								
								

								<!-- PAGE CONTENT ENDS -->
							</div>

<?php
include_once("footer.php");
?>