<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">สินค้าในกลุ่มเดียวกัน</h3>
						
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
                                        
                                        <?php		
													  $i=0;
													  $sql_product = "select * From product Where cat_sub_id='".$result_product['cat_sub_id']."' ORDER BY pid ASC";													
														 $query_product = mysqli_query($con,$sql_product);
														 while($result=mysqli_fetch_array($query_product))
														 { 
														     
														 $sql_catagory = "select * From catagory Where cat_id='".$result['cat_id']."'";													
														 $query_catagory = mysqli_query($con,$sql_catagory);
														 $result_cat=mysqli_fetch_array($query_catagory);
														 
														 															  
														  // $result_cat_sub=select("catagory_sub","where 1 and cat_parent_id='".$result['cat_sub_id']."'");		
														     $sql_catagory_sub = "select * From catagory_sub Where cat_parent_id='".$result['cat_sub_id']."'";													
														 $query_catagory_sub = mysqli_query($con,$sql_catagory_sub);
														 $result_cat_sub=mysqli_fetch_array($query_catagory_sub);	
														  
														?>
										<div class="product">
											<div class="product-img">
												<img src="administrator/fileUpload/<?=$result['p_img'];?>" alt="<?=$result['p_name'];?>">											
											</div>
											<div class="product-body">
												<p class="product-category"><?=$result_cat['cat_name'];?></p>
                                                <p class="product-category"><?=$result_cat_sub['name_sub'];?></p>                                                
												<h3 class="product-name"><a href="#"><?=$result['p_name'];?></a></h3>
												<h4 class="product-price">฿ <?=$result['p_price'];?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
																																					<button class="quick-view"><a href="index.php?link=4&pid=<?=$result['pid'];?>"><i class="fa fa-eye"></i><span class="tooltipp">รายละเอียดสินค้า</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
													<button class="add-to-cart-btn"><a href="index.php?link=8&pid=<?=$result['pid'];?>"><i class="fa fa-shopping-cart"></i> add to cart</a></button>
							</div>
										</div>
										<!-- /product -->


<? } ?>

									
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>