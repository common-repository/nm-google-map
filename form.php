<div class="wrap">
<div class="icon32" id="icon-edit-pages"></div>
<h2>WP Google Map</h2>
<div id="poststuff" class="metabox-holder has-right-sidebar">
		<div id="post-body">
			<div id="post-body-content" class="form-wrap">
                <form name="post_form" method="post" action="" enctype="multipart/form-data">
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Address') ?></h3></label>
					<textarea name="set_address" id="set_address" rows="3" cols="10"><?php echo $set_address;?></textarea>
					</div>
					<strong>Example:</strong> 1600 Amphitheatre Parkway, Mountain View, CA
				</div>
				<div id="titlediv">
					<strong>OR</strong>
				</div>
                <div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Latitude and Longitude') ?></h3></label>
						<input name="set_latitude" id="set_latitude" type="text" value="<?php echo $set_latitude;?>" />
					</div>
					<strong>Example:</strong> +40.689060,-74.044636
				</div>
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Zoom Level') ?></h3></label>
				<select name="set_zoomlevel" id="set_zoomlevel">
					<?php for($i=5;$i<=15;$i++){?>
					<option value="<?php echo $i;?>" <?php echo ($set_zoomlevel==$i)?'selected=selected':'';?>><?php echo $i;?></option>
					<?php } ?>
				</select>
					</div>
					<strong>Example:</strong> 1600 Amphitheatre Parkway, Mountain View, CA
				</div>
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Width') ?></h3></label>
				<input name="set_mapwidth_1" id="set_mapwidth_1" type="text" value="<?php echo $set_mapwidth_1;?>" style="width:50px;" />
				<select name="set_mapwidth_2" id="set_mapwidth_2">
					<option value="px" <?php echo ($set_mapwidth_2=="px")?'selected=selected':'';?>>px</option>
					<option value="%" <?php echo ($set_mapwidth_2=="%")?'selected=selected':'';?>>%</option>
				</select>
					</div>
					
				</div>
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Height') ?></h3></label>
				<input name="set_mapheight_1" id="set_mapheight_1" type="text" value="<?php echo $set_mapheight_1;?>" style="width:50px;" />
				<select name="set_mapheight_2" id="set_mapheight_2">
					<option value="px" <?php echo ($set_mapheight_2=="px")?'selected=selected':'';?>>px</option>
					<option value="%" <?php echo ($set_mapheight_2=="%")?'selected=selected':'';?>>%</option>
				</select>
					</div>
					
				</div>
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Info Window') ?></h3></label>
				<textarea name="set_infowindow" id="set_infowindow" rows="3" cols="20"><?php echo $set_infowindow;?></textarea>
					</div>
					
				</div>
				
				<div id="titlediv">
					<div class="form-field">
					<label for="title"><h3><?php _e('Set Marker') ?></h3></label>
					<?php
					$url = plugin_dir_url( $file );
					$url = $url.'/nm-wp-google-map/markers/';
					$dir = plugin_dir_path( __FILE__ );
					$dir.='markers/';
					if ($handle = opendir($dir)) {	
						while (false !== ($entry = readdir($handle))) {
							if($entry!='.' && $entry!='..'){
								$checked=($entry==$set_marker)?'checked=checked':'';
        						echo '<div style="float:left; width:10%;"><input name="set_marker" type="radio" value="'.$entry.'" style="width:auto;" '.$checked.' /><img src="'.$url.$entry.'"/></div>';
							}
							
    					}
					}	
					?>
					</div>
					
				</div>
				
                
				<div style="margin-top:35px;clear:both;">				
                <input type="submit" name="submit" value="Submit" class="button button-primary button-large" />
                <input type="hidden" name="act" value="save" />
                </form>
				</div>
		</div>
		
	</div>  
</div>