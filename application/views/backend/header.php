<div class="row">
	<div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
	<table>
		<tr>
			<td>
			<img src="<?php echo base_url(); ?>uploads/logo.png" style="max-height:50px;margin-left:270px;"/>
			</td>
			<td>
			<h2 style="font-weight:200; margin:0px;"> e-Journal Almazaya Islamic School</h2>
			</td>
		</tr>
	</table>
		
    </div>
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix ">

        <ul class="list-inline links-list pull-left">
        <!-- Language Selector -->
        	<div id="session_static">
	           <li>
	           		<h4>
	           			<a href="#" style="color: #696969;"
	           				<?php if($account_type == 'admin'):?>
	           				onclick="get_session_changer()"
	           			<?php endif;?>>
	           				<?php echo get_phrase('running_session');?> : <?php echo $running_year.' ';?><i class="entypo-down-dir"></i>
	           			</a>
	           		</h4>
	           </li>
           </div>
        </ul>


		<ul class="list-inline links-list pull-right">

		<li class="dropdown language-selector">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
						<i class="entypo-user"></i>
							<?php
								$name = $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type').'_id' => $this->session->userdata('login_user_id')))->row()->name;
								echo $name;
							?>
                    </a>
			</li>

			<li>
				<a href="<?php echo site_url('login/logout');?>">
					<?php echo get_phrase('log_out'); ?><i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>

</div>

<hr style="margin-top:0px;" />

<script type="text/javascript">
	function get_session_changer()
	{
		$.ajax({
            url: '<?php echo site_url('admin/get_session_changer');?>',
            success: function(response)
            {
                jQuery('#session_static').html(response);
            }
        });
	}
</script>
