<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php $post_id=get_the_ID(); ?>
<div class="wpsm_service_b_row" id="wpsm_service_b_row_<?php echo $post_id; ?>">
    <div class="wpsm_row">
        <style>
			.wpsm_row{
				overflow:hidden;
				display:block;
				width:100%;
			}
			.wpsm_service_b_row{ 
				overflow:hidden;
				display:block;
				width:100%;
				border:0px solid #ddd;
				margin-bottom:20px;
			}
				
		 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox{
			padding: 20px 10px 20px 10px;
			text-align: center;
			transition: all 0.3s ease 0s;
		  
			margin-bottom:30px;
		}
		 
		 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-icon2 i{
			font-size: 60px;
			
		}
		 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-content h3{
			font-weight: 600;
		   clear:inherit !important;
			line-height:1.4 !important;
			margin-top:10px !important;
			margin-bottom:0px !important;
		}
		 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_service-content p{
	
			line-height:1.4 !important;
			margin-top:10px !important;
			margin-bottom:0px !important;
			
			
		}
		 #wpsm_service_b_row_<?php echo $post_id; ?> .wpsm_serviceBox .wpsm_read_more{
			margin-top:15px;
			border-style: solid;
			border-width: 2px;
			text-decoration: none;
			display: inline-block;
			padding: 7px 10px;
			border-radius: 0;
			font-weight: normal;
			
		}
		#wpsm_service_b_row_<?php echo $post_id; ?> .owl-dots{
			<?php  if($settings['show_service_cal_dots']=="yes") { ?>
			display: block;
			<?php } else { ?>
			display: none;
			<?php } ?>
		}
		<?php echo $settings['custom_css']; ?>
		</style>
		<div class="wpsm-service-owl-carousel">
		<?php

			$i=1;
			
			switch($settings['service_select_column']){
				case(6):
					$row=2;
				break;
				case(4):
					$row=3;
				break;
				case(3):
					$row=4;
				break;
			}
			if ( $settings['service_box_list'] ) {
		foreach (  $settings['service_box_list'] as $index => $item ) {
				
			$service_title_setting_key=$this->get_repeater_setting_key('service_title','service_box_list',$index);
			$this->add_inline_editing_attributes( $service_title_setting_key,'basic' );

			$service_description_setting_key=$this->get_repeater_setting_key('service_description','service_box_list',$index);
			$this->add_inline_editing_attributes( $service_description_setting_key,'basic' );
				?>
					
						<div class="wpsm_serviceBox service_box_bg">
							<?php if($settings['show_service_icon']=="yes"){ ?>
								<div class="wpsm_service-icon2">
									<?php \Elementor\Icons_Manager::render_icon( $item['service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
								</div>
							<?php } ?>
							<data></data><div class="wpsm_service-content">
								<h3 <?php echo $this->get_render_attribute_string($service_title_setting_key); ?>><?php echo $item['service_title']; ?></h3>
								<p <?php echo $this->get_render_attribute_string($service_description_setting_key); ?>>
									<?php  echo do_shortcode($item['service_description']); ?>
								</p>
							</div>
							<?php if($settings['show_service_read_more']=="yes"){ ?>
								<?php if($settings['service_read_more_label'] !="") { ?>
									<a href="<?php echo $item['service_link']['url']; ?>" class="btn btn-default wpsm_read_more" target="_blank"><?php echo $settings['service_read_more_label']; ?></a>
								<?php } 
							} ?>
						</div>
				
				<?php
			} 
		}	?> 
		</div>   		
    </div>
</div>

<script>
jQuery(document).ready(function() {
	  var owl = jQuery('.wpsm-service-owl-carousel');
	  owl.owlCarousel({
		responsiveClass:true,
		
		loop: true,
		margin: 20,				
		autoplay: true,
		rewindNav : false,
		autoplayTimeout: 5000,
		
        autoplaySpeed: 500,				
		autoplayHoverPause: true,		
		responsive: {
		  0: {
			items: 1
		  },
		  500: {
			items: 2
		  },
		  767: {
			items: 2
		  },
		  992: {
			items: 3
		  },
		  1000: {
			items:<?php echo $row;?>
		  }
		}
	  });
	  
})
</script>