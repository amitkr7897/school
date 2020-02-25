<div class="content-w">
		  <div class="os-tabs-w menu-shad">
			<div class="os-tabs-controls">
			  <ul class="nav nav-tabs upper">
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>admin/system_settings/"><i class="os-icon picons-thin-icon-thin-0050_settings_panel_equalizer_preferences"></i><span><?php echo get_phrase('system_settings');?></span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>admin/sms/"><i class="os-icon picons-thin-icon-thin-0287_mobile_message_sms"></i><span><?php echo get_phrase('sms');?></span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>admin/email/"><i class="os-icon picons-thin-icon-thin-0315_email_mail_post_send"></i><span><?php echo get_phrase('email_settings');?></span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" href="<?php echo base_url();?>admin/translate/"><i class="os-icon picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i><span><?php echo get_phrase('translate');?></span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>admin/database/"><i class="picons-thin-icon-thin-0356_database"></i><span><?php echo get_phrase('database');?></span></a>
				</li>
			  </ul>
			</div>
		  </div>
  <div class="content-i">
    <div class="content-box">  

      <div class="row">
		<div class="col-sm-12">
    <?php if (isset($edit_profile)):?>
		<?php $current_editing_language	=	$edit_profile;
		  echo form_open(base_url() . 'admin/translate/update_phrase/'.$current_editing_language); ?>
			<?php 
		    	$count = 1;
				$language_phrases	=	$this->db->query("SELECT `phrase_id` , `phrase` , `$current_editing_language` FROM `language`")->result_array();
				foreach($language_phrases as $row)
				{
					$count++;
					$phrase_id			=	$row['phrase_id'];					
					$phrase				=	$row['phrase'];						
					$phrase_language	=	$row[$current_editing_language];	
			?>
			<div class="container-fluid row" style="display:inline-block">
			<div class="col-sm-12">
                <div class="element-box infodash primary centered padded">
					<div class="bg-icon">
						<i class="icon-ghost"></i>
					</div>
                    <div class="value">
                        <h6 style="color: #FFF;"><?php echo $row['phrase'];?></h6>
                    </div>
	                    <p><input type="text" name="phrase<?php echo $row['phrase_id'];?>" value="<?php echo $phrase_language;?>" class="form-control"/></p>
               		</div>
            	</div>
            </div>
            <input type="hidden" name="total_phrase" value="<?php echo $count;?>">
            <?php } ?>
            <div class="form-buttons-w text-right" style="margin:0.5rem 1rem 0.5rem 1rem">
            	<button class="btn btn-rounded btn-success" type="submit"> <?php echo get_phrase('update');?> </button>
          	</div>
          	<?php echo form_close(); ?>

	<?php endif;?>
  </div>
</div>
	
	<?php if (!isset($edit_profile)):?>
     <div class="col-md-12">
        <div class="element-wrapper">
        <div class="pipeline white lined-primary shadow">
			  <div class="pipeline-header">
				<h5 class="pipeline-name"><?php echo get_phrase('languages');?></h5>
		  </div>
		  <div>
			<div class="full-chat-middle">
			<div class="chat-content-w min">
			<div class="chat-content min">
		  <div class="users-list-w">
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/spain.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">Spanish</h6>
			  </div>			  
				<a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/spanish"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/usa.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">English</h6>
			  </div>			  
			 <a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/english"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/portuguese.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">Portuguese</h6>
			  </div>
			<a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/portuguese"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/hindi.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">Hindi</h6>				
			  </div>
			  <a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/hindi"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/french.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">French</h6>
			  </div>
			<a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/french"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/serbian.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">Serbian</h6>
			  </div>
			 <a class="btn btn-rounded  btn-primary" href="<?php echo base_url();?>admin/translate/update/serbian"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
			<div class="user-w">
			  <div class="user-avatar-w">
				<div class="user-avatar">
				  <img alt="" src="<?php echo base_url();?>style/flags/arabic.png">
				</div>
			  </div>
			  <div class="user-name">
				<h6 class="user-title">Arabic</h6>
			  </div>
				<a class="btn btn-rounded btn-primary" href="<?php echo base_url();?>admin/translate/update/arabic"><i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i> <?php echo get_phrase('update');?></a>
			</div>
		  </div>
		 </div>
		 </div>
		</div>
	</div>
	</div>
   </div>
 </div>
 <?php endif;?>

</div>
</div>
</div>