                    <div class="full-chat-middle">
					<div class="chat-head">
                      <div class="user-info">
                     <?php $rece = $this->db->get_where('message_thread', array('message_thread_code' => $current_message_thread_code))->row()->reciever;
                            $re = explode('-', $rece);
                      ?>
                        <img alt="" src="<?php echo $this->crud_model->get_image_url($re[0], $re[1]); ?>" style="border-radius:25px;height:25px;"><span style="color:gray;font-size:16px;margin-left:10px;"> <?php echo $this->db->get_where($re[0], array($re[0] . '_id' => $re[1]))->row()->name; ?></span>
                      </div>
					  <div class="user-actions">
					  <a><i class="os-icon picons-thin-icon-thin-0315_email_mail_post_send"></i></a>
                      </div>
                    </div>
                    <div class="chat-content-w">
                      <div class="chat-content">
                      <?php
                        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
                        $messages = $this->db->get_where('message', array('message_thread_code' => $current_message_thread_code))->result_array();
                        foreach ($messages as $row):
                        $sender = explode('-', $row['sender']);
                        $sender_account_type = $sender[0];
                        $sender_id = $sender[1];
                    ?>
                      <?php if($row['sender'] != $current_user):?>
                        <div class="chat-message">
                          <div class="chat-message-content-w">
                            <div class="chat-message-content">
                              <?php echo $row['message']; ?>
                              <?php if($row['file_name'] != ""):?>
                                 <a class="btn btn-sm btn-rounded btn-success" href="<?php echo base_url();?>uploads/messages/<?php echo $row['file_name']; ?>" style="color:white"><i class="picons-thin-icon-thin-0121_download_file"></i>&nbsp;&nbsp;<?php echo get_phrase('download');?></a>
                              <?php endif;?>
                            </div>
                          </div>
                          <div class="chat-message-avatar">
                            <img alt="" src="<?php echo $this->crud_model->get_image_url($sender_account_type, $sender_id); ?>">
                          </div>
                        </div>
                        <?php endif;?>
                        <?php if($row['sender'] == $current_user):?>
                        <div class="chat-message self">
                          <div class="chat-message-content-w">
                            <div class="chat-message-content">
                              <?php echo $row['message']; ?>
                              <?php if($row['file_name'] != ""):?>
                                 <a class="btn btn-sm btn-rounded btn-success" href="<?php echo base_url();?>uploads/messages/<?php echo $row['file_name']; ?>" style="color:white"><i class="picons-thin-icon-thin-0121_download_file"></i>&nbsp;&nbsp;<?php echo get_phrase('download');?></a>
                              <?php endif;?>
                            </div>
                          </div>
                          <div class="chat-message-avatar">
                            <img alt="" src="<?php echo $this->crud_model->get_image_url($sender_account_type, $sender_id); ?>">
                          </div>
                        </div>
                        <?php endif;?>
                        <?php endforeach;?>
                      </div>
                    </div>

                    <div class="chat-controls b-b">
                    <?php echo form_open(base_url() . 'teacher/message/send_reply/' . $current_message_thread_code, array('enctype' => 'multipart/form-data')); ?>
                      <div class="chat-input">
                        <input placeholder="<?php echo get_phrase('write_message');?>..." required type="text" name="message">
                      </div>
                      <div class="chat-input-extra">
                       <div class="chat-extra-actions">
                           <input type="file" name="file_name" id="file-3" class="inputfile inputfile-3" style="display:none"/>
						<label for="file-3"><i class="os-icon picons-thin-icon-thin-0042_attachment"></i> <span><?php echo get_phrase('send_file');?>...</span></label>
                        </div>
                        <div class="chat-btn">
                          <button class="btn btn-rounded btn-primary" type="submit"><?php echo get_phrase('send');?></button>
                        </div>
                      </div>
                      <?php echo form_close();?>
                    </div>
					</div>

            