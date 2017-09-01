<?php $reg_options = array('logo_width'=>array('selector'=>'#wi-logo img','property'=>'width'),'logo_padding_top'=>array('selector'=>'#logo-area','property'=>'padding-top','unit'=>'px'),'logo_padding_bottom'=>array('selector'=>'#logo-area','property'=>'padding-bottom','unit'=>'px'),'footer_logo_width'=>array('selector'=>'#footer-logo img','property'=>'width'),'body_background_color'=>array('selector'=>'body.layout-boxed','property'=>'background-color'),'body_background_image'=>array('selector'=>'body.layout-boxed','property'=>'background-image'),'body_background_repeat'=>array('selector'=>'body.layout-boxed','property'=>'background-repeat'),'body_background_size'=>array('selector'=>'body.layout-boxed','property'=>'background-size'),'site_text_color'=>array('selector'=>'body, input, textarea, button','property'=>'color'),'link_color'=>array('selector'=>'a','property'=>'color'),'link_hover_color'=>array('selector'=>'a:hover','property'=>'color'),'heading_color'=>array('selector'=>'h1, h2, h3, h4, h5, h6','property'=>'color'),'topbar_background'=>array('selector'=>'#wi-topbar','property'=>'background-color'),'topbar_border_bottom_color'=>array('selector'=>'#wi-topbar','property'=>'border-color'),'topbarnav_color'=>array('selector'=>'#topbarnav .menu > ul > li > a','property'=>'color'),'topbarnav_hover_color'=>array('selector'=>'#topbarnav .menu > ul > li:hover > a','property'=>'color'),'topbarnav_active_color'=>array('selector'=>'#topbarnav .menu > ul > li.current-menu-item > a, #topbarnav .menu > ul > li.current-menu-ancestor > a','property'=>'color'),'topbarnav_dropdown_background'=>array('selector'=>'#topbarnav .menu ul ul','property'=>'background-color'),'topbarnav_dropdown_border_color'=>array('selector'=>'#topbarnav .menu ul ul','property'=>'border-color'),'topbarnav_dropdown_border_width'=>array('selector'=>'#topbarnav .menu ul ul','property'=>'border-width'),'topbarnav_dropdown_padding'=>array('selector'=>'#topbarnav .menu ul ul','property'=>'padding'),'topbarnav_dropdown_color'=>array('selector'=>'#topbarnav .menu ul ul a','property'=>'color'),'topbarnav_dropdown_hover_color'=>array('selector'=>'#topbarnav .menu ul ul li:hover > a','property'=>'color'),'topbarnav_dropdown_active_color'=>array('selector'=>'#topbarnav .menu ul ul li.current-menu-item a','property'=>'color'),'topbar_social_color'=>array('selector'=>'#wi-topbar .social-list ul a','property'=>'color'),'topbar_social_hover_color'=>array('selector'=>'#wi-topbar .social-list ul a:hover','property'=>'color'),'header_background'=>array('selector'=>'#logo-area','property'=>'background-color'),'header_background_image'=>array('selector'=>'#logo-area','property'=>'background-image'),'tagline_color'=>array('selector'=>'#wi-tagline','property'=>'color'),'header_text_color'=>array('selector'=>'.header-text','property'=>'color'),'header_social_icon_background'=>array('selector'=>'.header-2 #logo-area .social-list a','property'=>'background-color'),'header_social_icon_color'=>array('selector'=>'.header-2 #logo-area .social-list a','property'=>'color'),'header_social_icon_hover_background'=>array('selector'=>'.header-2 #logo-area .social-list a:hover','property'=>'background-color'),'header_social_icon_hover_color'=>array('selector'=>'.header-2 #logo-area .social-list a:hover','property'=>'color'),'mainnav_border'=>array('selector'=>'#wi-mainnav.mainnav-border-fullwidth, #wi-mainnav.mainnav-border-container .container','property'=>'border-width'),'mainnav_border_color'=>array('selector'=>'#wi-mainnav, #wi-mainnav .container','property'=>'border-color'),'mainnav_background'=>array('selector'=>'#wi-mainnav, #wi-mainnav.before-sticky','property'=>'background-color'),'mainnav_color'=>array('selector'=>'#wi-mainnav .menu > ul > li > a, #header-cart a','property'=>'color'),'mainnav_hover_color'=>array('selector'=>'#wi-mainnav .menu > ul > li:hover > a, #header-cart a:hover','property'=>'color'),'mainnav_active_color'=>array('selector'=>'#wi-mainnav .menu > ul > li.current-menu-item > a, #wi-mainnav .menu > ul > li.current-menu-ancestor > a','property'=>'color'),'mainnav_submenu_caret_color'=>array('selector'=>'#wi-mainnav .menu > ul > li.menu-item-has-children > a:after','property'=>'color'),'mainnav_dropdown_background'=>array('selector'=>'#wi-mainnav .menu > ul ul','property'=>'background-color'),'mainnav_dropdown_padding'=>array('selector'=>'#wi-mainnav .menu > ul ul','property'=>'padding'),'mainnav_dropdown_border_width'=>array('selector'=>'#wi-mainnav .menu > ul ul','property'=>'border-width'),'mainnav_submenu_border_color'=>array('selector'=>'#wi-mainnav .menu > ul ul','property'=>'border-color'),'mainnav_submenu_item_color'=>array('selector'=>'#wi-mainnav .menu > ul ul > li > a','property'=>'color'),'mainnav_submenu_item_hover_color'=>array('selector'=>'#wi-mainnav .menu > ul ul > li > a:hover','property'=>'color'),'mainnav_submenu_item_active_color'=>array('selector'=>'#wi-mainnav .menu > ul ul > li.current-menu-item > a, #wi-mainnav .menu > ul ul > li.current-menu-ancestor > a','property'=>'color'),'mainnav_submenu_mega_item_leading'=>array('selector'=>'#wi-mainnav .menu > ul > li.mega > ul > li > a','property'=>'color'),'footer_widgets_padding_top'=>array('selector'=>'#footer-widgets','property'=>'padding-top','unit'=>'px'),'footer_widgets_padding_bottom'=>array('selector'=>'#footer-widgets','property'=>'padding-bottom','unit'=>'px'),'footer_widgets_border'=>array('selector'=>'#footer-widgets','property'=>'border-color'),'footer_widgets_background'=>array('selector'=>'#wi-footer #footer-widgets','property'=>'background-color'),'footer_widgets_text_color'=>array('selector'=>'#wi-footer #footer-widgets','property'=>'color'),'footer_bottom_padding_top'=>array('selector'=>'#footer-bottom','property'=>'padding-top','unit'=>'px'),'footer_bottom_padding_bottom'=>array('selector'=>'#footer-bottom','property'=>'padding-bottom','unit'=>'px'),'footer_bottom_border'=>array('selector'=>'#footer-bottom','property'=>'border-color'),'footer_bottom_background'=>array('selector'=>'#wi-footer #footer-bottom','property'=>'background-color'),'footer_widget_title_color'=>array('selector'=>'#footer-widgets .widget-title','property'=>'color'),'copyright_color'=>array('selector'=>'#wi-copyright','property'=>'color'),'copyright_link_color'=>array('selector'=>'#wi-copyright a','property'=>'color'),'footer_social_font_size'=>array('selector'=>'#footer-bottom .social-list ul li a','property'=>'font-size'),'footer_social_color'=>array('selector'=>'#footer-bottom .social-list ul li a','property'=>'color'),'footer_social_background'=>array('selector'=>'#footer-bottom .social-list ul li a','property'=>'background-color'),'footer_social_border'=>array('selector'=>'#footer-bottom .social-list ul li a','property'=>'border-color'),'footer_social_hover_color'=>array('selector'=>'#footer-bottom .social-list ul li a:hover','property'=>'color'),'footer_social_hover_background'=>array('selector'=>'#footer-bottom .social-list ul li a:hover','property'=>'background-color'),'footer_social_hover_border'=>array('selector'=>'#footer-bottom .social-list ul li a:hover','property'=>'border-color'),'body_font_size'=>array('selector'=>'body, input, textarea, button','property'=>'font-size'),'body_line_height'=>array('selector'=>'body, input, textarea, button','property'=>'line-height'),'heading_font_weight'=>array('selector'=>'h1, h2, h3, h4, h5, h6','property'=>'font-weight'),'heading_font_style'=>array('selector'=>'h1, h2, h3, h4, h5, h6','property'=>'font-style'),'heading_text_transform'=>array('selector'=>'h1, h2, h3, h4, h5, h6','property'=>'text-transform'),'heading_letter_spacing'=>array('selector'=>'h1, h2, h3, h4, h5, h6','property'=>'letter-spacing'),'h1_font_size'=>array('selector'=>'h1','property'=>'font-size'),'h2_font_size'=>array('selector'=>'h2','property'=>'font-size'),'h3_font_size'=>array('selector'=>'h3','property'=>'font-size'),'h4_font_size'=>array('selector'=>'h4','property'=>'font-size'),'h5_font_size'=>array('selector'=>'h5','property'=>'font-size'),'h6_font_size'=>array('selector'=>'h6','property'=>'font-size'),'tagline_font'=>array('selector'=>'#wi-tagline','property'=>'font-family'),'tagline_font_size'=>array('selector'=>'#wi-tagline','property'=>'font-size'),'tagline_font_style'=>array('selector'=>'#wi-tagline','property'=>'font-style'),'tagline_font_weight'=>array('selector'=>'#wi-tagline','property'=>'font-weight'),'tagline_text_transform'=>array('selector'=>'#wi-tagline','property'=>'text-transform'),'tagline_letter_spacing'=>array('selector'=>'#wi-tagline','property'=>'letter-spacing'),'header_text_font_size'=>array('selector'=>'.header-text','property'=>'font-size'),'nav_font_size'=>array('selector'=>'#wi-mainnav .menu > ul > li > a','property'=>'font-size'),'nav_font_style'=>array('selector'=>'#wi-mainnav .menu > ul > li > a','property'=>'font-style'),'nav_font_weight'=>array('selector'=>'#wi-mainnav .menu > ul > li > a','property'=>'font-weight'),'nav_text_transform'=>array('selector'=>'#wi-mainnav .menu > ul > li > a','property'=>'text-transform'),'nav_letter_spacing'=>array('selector'=>'#wi-mainnav .menu > ul > li > a','property'=>'letter-spacing'),'nav_dropdown_font_size'=>array('selector'=>'#wi-mainnav .menu > ul ul li > a','property'=>'font-size'),'nav_dropdown_font_weight'=>array('selector'=>'#wi-mainnav .menu > ul ul li > a','property'=>'font-weight'),'nav_dropdown_font_style'=>array('selector'=>'#wi-mainnav .menu > ul ul li > a','property'=>'font-style'),'nav_dropdown_text_transform'=>array('selector'=>'#wi-mainnav .menu > ul ul li > a','property'=>'text-transform'),'nav_dropdown_letter_spacing'=>array('selector'=>'#wi-mainnav .menu > ul ul li > a','property'=>'letter-spacing'),'footer_widget_font_size'=>array('selector'=>'#footer-widgets','property'=>'font-size'),'copyright_font'=>array('selector'=>'#wi-copyright','property'=>'font-family'),'copyright_font_size'=>array('selector'=>'#wi-copyright','property'=>'font-size'),'copyright_font_weight'=>array('selector'=>'#wi-copyright','property'=>'font-weight'),'copyright_font_style'=>array('selector'=>'#wi-copyright','property'=>'font-style'),'copyright_text_transform'=>array('selector'=>'#wi-copyright','property'=>'text-transform'),'copyright_letter_spacing'=>array('selector'=>'#wi-copyright','property'=>'letter-spacing'),'page_title_font'=>array('selector'=>'.entry-title, .page-title','property'=>'font-family'),'page_title_font_size'=>array('selector'=>'.page-title','property'=>'font-size'),'page_title_font_weight'=>array('selector'=>'.page-title','property'=>'font-weight'),'page_title_font_style'=>array('selector'=>'.page-title','property'=>'font-style'),'page_title_text_transform'=>array('selector'=>'.page-title','property'=>'text-transform'),'page_title_letter_spacing'=>array('selector'=>'.page-title','property'=>'letter-spacing'),'button_font'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'font-family'),'button_font_size'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'font-size'),'button_font_weight'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'font-weight'),'button_text_transform'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'text-transform'),'button_letter_spacing'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'letter-spacing'),'button_border_radius'=>array('selector'=>'a.wi-btn, button.wi-btn','property'=>'border-radius'),'iconbox_icon_font_size'=>array('selector'=>'.wi-iconbox .icon','property'=>'font-size'),'iconbox_icon_border_radius'=>array('selector'=>'.wi-iconbox .icon-inner','property'=>'border-radius'),'iconbox_icon_color'=>array('selector'=>'.wi-iconbox .icon-inner','property'=>'color'),'iconbox_icon_background'=>array('selector'=>'.wi-iconbox .icon-inner','property'=>'background'),'iconbox_icon_hover_color'=>array('selector'=>'.wi-iconbox:hover .icon-inner','property'=>'color'),'iconbox_icon_hover_background'=>array('selector'=>'.wi-iconbox:hover .icon-inner','property'=>'background'),'iconbox_title_color'=>array('selector'=>'.iconbox-title','property'=>'color'),'iconbox_title_font_size'=>array('selector'=>'.iconbox-title','property'=>'font-size'),'iconbox_title_font_weight'=>array('selector'=>'.iconbox-title','property'=>'font-weight'),'iconbox_title_font_style'=>array('selector'=>'.iconbox-title','property'=>'font-style'),'iconbox_title_text_transform'=>array('selector'=>'.iconbox-title','property'=>'text-transform'),'iconbox_title_letter_spacing'=>array('selector'=>'.iconbox-title','property'=>'letter-spacing'),'iconbox_text_font_size'=>array('selector'=>'.wi-iconbox .iconbox-desc','property'=>'font-size'),'iconbox_text_color'=>array('selector'=>'.wi-iconbox .iconbox-desc','property'=>'color'),'testimonial_font'=>array('selector'=>'.testimonial-content','property'=>'font-family'),'testimonial_font_size'=>array('selector'=>'.testimonial-content','property'=>'font-size'),'testimonial_line_height'=>array('selector'=>'.testimonial-content','property'=>'line-height'),'testimonial_font_style'=>array('selector'=>'.testimonial-content','property'=>'color'),'project_rollover_background'=>array('selector'=>'.rollover-overlay','property'=>'background-color'),'project_rollover_opacity'=>array('selector'=>'.rollover-overlay','property'=>'opacity'),'project_rollover_color'=>array('selector'=>'.wi-rollover .wi-cell','property'=>'color'));