<?php

function osteo_timeline_style_three_shortcode( $atts ) {
    ob_start();

    // Attributes
    $settings = shortcode_atts(
        array(
            'osteo_timeline_list'                       => '',
            'osteo_timeline_content_box_bg'             => '',
            'osteo_timeline_content_box_padding_top'    => '',
            'osteo_timeline_content_box_padding_right'  => '',
            'osteo_timeline_content_box_padding_bottom' => '',
            'osteo_timeline_content_box_padding_left'   => '',
            'osteo_timeline_content_box_margin_top'     => '',
            'osteo_timeline_content_box_margin_right'   => '',
            'osteo_timeline_content_box_margin_bottom'  => '',
            'osteo_timeline_content_box_margin_left'    => '',
            'osteo_timeline_line_dot_color'             => '',
            'osteo_timeline_line_dot_bg'                => '',
            'osteo_timeline_text_align'                 => '',
            'osteo_timeline_line_dot_color'             => '',
            'osteo_timeline_line_color'                 => '',
            'osteo_timeline_content_box_shadow'         => '',
            'osteo_timeline_date_switch'                => 'yes',
            'osteo_timeline_date'                       => '',
            'osteo_timeline_date_color'                 => '',
            'osteo_timeline_date_font_size'             => '',
            'osteo_timeline_date_font_weight'           => '',
            'osteo_timeline_date_font_style'            => '',
            'osteo_timeline_date_letter_spacing'        => '',
            'osteo_timeline_date_padding_top'           => '',
            'osteo_timeline_date_padding_right'         => '',
            'osteo_timeline_date_padding_bottom'        => '',
            'osteo_timeline_date_padding_left'          => '',
            'osteo_timeline_date_margin_top'            => '',
            'osteo_timeline_date_margin_right'          => '',
            'osteo_timeline_date_margin_bottom'         => '',
            'osteo_timeline_date_margin_left'           => '',
            'osteo_timeline_image_switch'               => 'yes',
            'osteo_timeline_image_url'                  => '',
            'osteo_timeline_image_border_radius'        => '',
            'osteo_timeline_image_margin_top'           => '',
            'osteo_timeline_image_margin_right'         => '',
            'osteo_timeline_image_margin_bottom'        => '',
            'osteo_timeline_image_margin_left'          => '',
            'osteo_timeline_heading_switch'             => 'yes',
            'osteo_timeline_heading'                    => '',
            'osteo_timeline_heading_color'              => '',
            'osteo_timeline_heading_color_hover'        => '',
            'osteo_timeline_heading_font_size'          => '',
            'osteo_timeline_heading_font_weight'        => '',
            'osteo_timeline_heading_font_style'         => '',
            'osteo_timeline_heading_text_transform'     => '',
            'osteo_timeline_heading_letter_spacing'     => '',
            'osteo_timeline_heading_padding_top'        => '',
            'osteo_timeline_heading_padding_right'      => '',
            'osteo_timeline_heading_padding_bottom'     => '',
            'osteo_timeline_heading_padding_left'       => '',
            'osteo_timeline_heading_margin_top'         => '',
            'osteo_timeline_heading_margin_right'       => '',
            'osteo_timeline_heading_margin_bottom'      => '',
            'osteo_timeline_heading_margin_left'        => '',
            'osteo_timeline_paragraph_switch'           => 'yes',
            'osteo_timeline_paragraph'                  => '',
            'osteo_timeline_paragraph_color'            => '',
            'osteo_timeline_paragraph_font_size'        => '',
            'osteo_timeline_paragraph_font_weight'      => '',
            'osteo_timeline_paragraph_font_style'       => '',
            'osteo_timeline_paragraph_text_transform'   => '',
            'osteo_timeline_paragraph_letter_spacing'   => '',
            'osteo_timeline_paragraph_padding_top'      => '',
            'osteo_timeline_paragraph_padding_right'    => '',
            'osteo_timeline_paragraph_padding_bottom'   => '',
            'osteo_timeline_paragraph_padding_left'     => '',
            'osteo_timeline_paragraph_margin_top'       => '',
            'osteo_timeline_paragraph_margin_right'     => '',
            'osteo_timeline_paragraph_margin_bottom'    => '',
            'osteo_timeline_paragraph_margin_left'      => '',
            'osteo_timeline_button_switch'              => 'yes',
            'osteo_timeline_button_url'                 => '',
            'osteo_timeline_button_title'               => '',
            'osteo_timeline_button_icon'                => '',
            'osteo_timeline_button_icon_size'           => '',
            'osteo_timeline_button_icon_position'       => '',
            'osteo_timeline_button_color'               => '',
            'osteo_timeline_button_color_hover'         => '',
            'osteo_timeline_button_bg'                  => '',
            'osteo_timeline_button_bg_hover'            => '',
            'osteo_timeline_button_effect'              => '',
            'osteo_timeline_button_size'                => '',
            'osteo_timeline_button_font_size'           => '',
            'osteo_timeline_button_font_weight'         => '',
            'osteo_timeline_button_font_style'          => '',
            'osteo_timeline_button_text_transform'      => '',
            'osteo_timeline_button_letter_spacing'      => '',
            'osteo_timeline_button_box_shadow'          => '',
            'osteo_image_size'                          => '',
        ),
        $atts,
        'osteo_timeline_style_three'
    );

    //Features
    $items = vc_param_group_parse_atts( $settings['osteo_timeline_list'] );

    ?>
        <?php
if ( $items ) {
        ?>

		<div class="osteo-timeline-style-3">
            <?php foreach ( $items as $item ) {?>
                <?php
//Media
            $osteo_image_size = $item['osteo_image_size'];
            $osteo_timeline_image_url = wp_get_attachment_image_src( $item['osteo_timeline_image_url'], $osteo_image_size );

            //Button
            $osteo_timeline_button_url = vc_build_link( $item['osteo_timeline_button_url'] );
            $osteo_timeline_button_css_editor = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( esc_attr( $item['osteo_timeline_button_css_editor'] ), ' ' ), "osteo_timeline", $atts );
            ?>
				<div class="timeline-items <?php echo esc_attr( $item['osteo_timeline_mode'] ); ?>">
				    <div class="timeline-item">
                        <div class="timeline-icon" style="color: <?php echo esc_attr( $item['osteo_timeline_line_dot_color'] ); ?>; background-color: <?php echo esc_attr( $item['osteo_timeline_line_dot_bg'] ); ?>;">
                            <i class="<?php echo esc_attr( $item['osteo_timeline_icon'] ); ?>"></i>
						</div>
                        <div class="timeline-content <?php echo esc_attr( $item['osteo_timeline_content_box_shadow'] ); ?>" style="background-color: <?php echo esc_attr( $item['osteo_timeline_content_box_bg'] ); ?>; padding-top: <?php echo esc_attr( $item['osteo_timeline_content_box_padding_top'] ); ?>px; padding-right: <?php echo esc_attr( $item['osteo_timeline_content_box_padding_right'] ); ?>px; padding-bottom: <?php echo esc_attr( $item['osteo_timeline_content_box_padding_bottom'] ); ?>px; padding-left: <?php echo esc_attr( $item['osteo_timeline_content_box_padding_left'] ); ?>px; margin-top: <?php echo esc_attr( $item['osteo_timeline_content_box_margin_top'] ); ?>px; margin-right: <?php echo esc_attr( $item['osteo_timeline_content_box_margin_right'] ); ?>px; margin-bottom: <?php echo esc_attr( $item['osteo_timeline_content_box_margin_bottom'] ); ?>px; margin-left: <?php echo esc_attr( $item['osteo_timeline_content_box_margin_left'] ); ?>px;">
                            <?php
if ( 'yes' === $item['osteo_timeline_image_switch'] ) {
                ?>
                                        <img src="<?php echo esc_url( $osteo_timeline_image_url['0'] ); ?>" style="border-radius: <?php echo esc_attr( $item['osteo_timeline_image_border_radius'] ); ?>px; margin-top: <?php echo esc_attr( $item['osteo_timeline_image_margin_top'] ); ?>px; margin-right: <?php echo esc_attr( $item['osteo_timeline_image_margin_right'] ); ?>px; margin-bottom: <?php echo esc_attr( $item['osteo_timeline_image_margin_bottom'] ); ?>px; margin-left: <?php echo esc_attr( $item['osteo_timeline_image_margin_left'] ); ?>px;">
                                    <?php
}
            ?>
                            <?php
if ( 'yes' === $item['osteo_timeline_date_switch'] ) {
                ?>
                                        <div class="timeline-date" style="color: <?php echo esc_attr( $item['osteo_timeline_date_color'] ); ?>; font-size: <?php echo esc_attr( $item['osteo_timeline_date_font_size'] ); ?>px; font-weight: <?php echo esc_attr( $item['osteo_timeline_date_font_weight'] ); ?>; font-style: <?php echo esc_attr( $item['osteo_timeline_date_font_style'] ); ?>; letter-spacing: <?php echo esc_attr( $item['osteo_timeline_date_letter_spacing'] ); ?>px; padding-top: <?php echo esc_attr( $item['osteo_timeline_date_padding_top'] ); ?>px; padding-right: <?php echo esc_attr( $item['osteo_timeline_date_padding_right'] ); ?>px; padding-bottom: <?php echo esc_attr( $item['osteo_timeline_date_padding_bottom'] ); ?>px; padding-left: <?php echo esc_attr( $item['osteo_timeline_date_padding_left'] ); ?>px; margin-top: <?php echo esc_attr( $item['osteo_timeline_date_margin_top'] ); ?>px; margin-right: <?php echo esc_attr( $item['osteo_timeline_date_margin_right'] ); ?>px; margin-bottom: <?php echo esc_attr( $item['osteo_timeline_date_margin_bottom'] ); ?>px; margin-left: <?php echo esc_attr( $item['osteo_timeline_date_margin_left'] ); ?>px;">
                                            <span>
                                                <?php echo esc_html( $item['osteo_timeline_date'] ); ?>
                                            </span>
                                        </div>
                                    <?php
}
            ?>
                            <?php
if ( 'yes' === $item['osteo_timeline_heading_switch'] ) {
                ?>
                                        <h2 style="color: <?php echo esc_attr( $item['osteo_timeline_heading_color'] ); ?>; font-size: <?php echo esc_attr( $item['osteo_timeline_heading_font_size'] ); ?>px; font-weight: <?php echo esc_attr( $item['osteo_timeline_heading_font_weight'] ); ?>; font-style: <?php echo esc_attr( $item['osteo_timeline_heading_font_style'] ); ?>; text-transform: <?php echo esc_attr( $item['osteo_timeline_heading_text_transform'] ); ?>; letter-spacing: <?php echo esc_attr( $item['osteo_timeline_heading_letter_spacing'] ); ?>px; padding-top: <?php echo esc_attr( $item['osteo_timeline_heading_padding_top'] ); ?>px; padding-right: <?php echo esc_attr( $item['osteo_timeline_heading_padding_right'] ); ?>px; padding-bottom: <?php echo esc_attr( $item['osteo_timeline_heading_padding_bottom'] ); ?>px; padding-left: <?php echo esc_attr( $item['osteo_timeline_heading_padding_left'] ); ?>px; margin-top: <?php echo esc_attr( $item['osteo_timeline_heading_margin_top'] ); ?>px; margin-right: <?php echo esc_attr( $item['osteo_timeline_heading_margin_right'] ); ?>px; margin-bottom: <?php echo esc_attr( $item['osteo_timeline_heading_margin_bottom'] ); ?>px; margin-left: <?php echo esc_attr( $item['osteo_timeline_heading_margin_left'] ); ?>px;">
                                            <?php echo $item['osteo_timeline_heading']; ?>
                                        </h2>
                                        <style>
                                            .osteo-timeline-style-3 .timeline-content h2:hover {
                                                color: <?php echo esc_attr( $item['osteo_timeline_heading_color_hover'] ); ?>!important;
                                            }
                                        </style>
                                    <?php
}
            ?>
                            <?php
if ( 'yes' === $item['osteo_timeline_paragraph_switch'] ) {
                ?>
                                        <p style="color: <?php echo esc_attr( $item['osteo_timeline_paragraph_color'] ); ?>; font-size: <?php echo esc_attr( $item['osteo_timeline_paragraph_font_size'] ); ?>px; font-weight: <?php echo esc_attr( $item['osteo_timeline_paragraph_font_weight'] ); ?>; font-style: <?php echo esc_attr( $item['osteo_timeline_paragraph_font_style'] ); ?>; text-transform: <?php echo esc_attr( $item['osteo_timeline_paragraph_text_transform'] ); ?>; letter-spacing: <?php echo esc_attr( $item['osteo_timeline_paragraph_letter_spacing'] ); ?>px; padding-top: <?php echo esc_attr( $item['osteo_timeline_paragraph_padding_top'] ); ?>px; padding-right: <?php echo esc_attr( $item['osteo_timeline_paragraph_padding_right'] ); ?>px; padding-bottom: <?php echo esc_attr( $item['osteo_timeline_paragraph_padding_bottom'] ); ?>px; padding-left: <?php echo esc_attr( $item['osteo_timeline_paragraph_padding_left'] ); ?>px; margin-top: <?php echo esc_attr( $item['osteo_timeline_paragraph_margin_top'] ); ?>px; margin-right: <?php echo esc_attr( $item['osteo_timeline_paragraph_margin_right'] ); ?>px; margin-bottom: <?php echo esc_attr( $item['osteo_timeline_paragraph_margin_bottom'] ); ?>px; margin-left: <?php echo esc_attr( $item['osteo_timeline_paragraph_margin_left'] ); ?>px;">
                                            <?php echo $item['osteo_timeline_paragraph']; ?>
                                        </p>
                                    <?php
}
            ?>
                            <?php
if ( 'yes' === $item['osteo_timeline_button_switch'] ) {
                ?>
                                        <a href="<?php echo esc_url( $osteo_timeline_button_url['url'] ); ?>" class="cmk-button <?php echo esc_attr( $item['osteo_timeline_button_size'] ); ?> <?php echo esc_attr( $osteo_timeline_button_css_editor ); ?> <?php echo esc_attr( $item['osteo_timeline_button_effect'] ); ?> <?php echo esc_attr( $item['osteo_timeline_button_box_shadow'] ); ?>" style="color: <?php echo esc_attr( $item['osteo_timeline_button_color'] ); ?>; background-color: <?php echo esc_attr( $item['osteo_timeline_button_bg'] ); ?>; font-size: <?php echo esc_attr( $item['osteo_timeline_button_font_size'] ); ?>px; font-weight: <?php echo esc_attr( $item['osteo_timeline_button_font_weight'] ); ?>; font-style: <?php echo esc_attr( $item['osteo_timeline_button_font_style'] ); ?>; text-transform: <?php echo esc_attr( $item['osteo_timeline_button_text_transform'] ); ?>; letter-spacing: <?php echo esc_attr( $item['osteo_timeline_button_letter_spacing'] ); ?>;">
                                            <span class="<?php echo esc_attr( $item['osteo_timeline_button_icon_position'] ); ?>" style="font-size: <?php echo esc_attr( $item['osteo_timeline_button_icon_size'] ); ?>px;">
                                                <i class="<?php echo esc_attr( $item['osteo_timeline_button_icon'] ); ?>"></i>
                                            </span>
                                            <?php echo esc_html( $item['osteo_timeline_button_title'] ); ?>
                                        </a>
                                        <style>
                                            .cmk-button:hover {
                                                color: <?php echo esc_attr( $item['osteo_timeline_button_color_hover'] ); ?>!important;
                                            }
                                            .cmk-button:before,
                                            .cmk-button:after {
                                                background-color: <?php echo esc_attr( $item['osteo_timeline_button_bg_hover'] ); ?>!important;
                                            }
                                        </style>
                                    <?php
}
            ?>
                        </div>
				    </div>
				</div>
            <?php }?>
		</div>
        <?php
}
    ?>

        <style>
            .osteo-timeline-style-3 .timeline-content {
                text-align: <?php echo esc_attr( $settings['osteo_timeline_text_align'] ); ?>!important;
            }
            .osteo-timeline-style-3 .timeline-items::after {
                border-color: <?php echo esc_attr( $settings['osteo_timeline_line_dot_color'] ); ?>!important;
            }
            .osteo-timeline-style-3::after {
                background-color: <?php echo esc_attr( $settings['osteo_timeline_line_color'] ); ?>!important;
            }
        </style>

	<?php

    return ob_get_clean();
}
add_shortcode( 'osteo_timeline_style_three', 'osteo_timeline_style_three_shortcode' );