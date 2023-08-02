<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Coops_Card_Widget extends \Elementor\Widget_Base
{
    /**
     * Get widget name.
     *
     * Retrieve Coops_Card_Widget widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name()
    {
        return 'card';
    }

    /**
     * Get widget title.
     *
     * Retrieve Coops_Card_Widget widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */

    public function get_title()
    {
        return esc_html__('Card', 'coops-widgets');
    }

    /**
     * Get widget icon.
     *
     * Retrieve Coops_Card_Widget widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */

    public function get_icon()
    {
        return 'eicon-header';
    }

    /**
     * Gets custom help URL.
     * 
     * Retrieve Coops_Card_Widget widget custom help URL.
     * 
     * @since 1.0.0
     * @access public
     * @return string Widget custom help URL.
     */
    public function get_custom_help_url()
    {
        return 'https://www.google.com/';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Coops_Card_Widget widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['general'];
    }

    /**
     * Get widget keywords.
     * 
     * Retrieve the list of keywords the Coops_Card_Widget widget belongs to.
     * 
     * @since 1.0.0
     * @access public
     * @return array Widget keywords.
     */
    public function get_keywords()
    {
        return ['card', 'coops', 'elementor'];
    }

    /**
     * Register Coops_Card_Widget widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     * 
     * @return void
     */

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'coops-widgets'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'card_title',
            [
                'label' => esc_html__('Card title', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => esc_html__('Your card title here', 'coops-widgets'),
            ]
        );

        $this->add_control(
            'card_description',
            [
                'label' => esc_html__('Card description', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'placeholder' => esc_html__('Your card description here', 'coops-widgets'),
            ]
        );

        $this->end_controls_section();

        // Style tab

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Style', 'coops-widgets'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_options',
            [
                'label' => esc_html__('Title Options', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separtor' => 'before',
            ]
        );

        

        $this->add_control(
            'card_title_color',
            [
                'label' => esc_html__('Card title color', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
                'selectors' => [
                    '{{WRAPPER}} .card-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'card_title_typography',
                'label' => esc_html__('Card title typography', 'coops-widgets'),
                'selector' => '{{WRAPPER}} .card-title',
            ]
        );

        $this->add_control(
            'description_options',
            [
                'label' => esc_html__('Description Options', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separtor' => 'before',
            ]
        );

        $this->add_control(
            'card_description_color',
            [
                'label' => esc_html__('Card description color', 'coops-widgets'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
                'selectors' => [
                    '{{WRAPPER}} .card-text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'card_description_typography',
                'label' => esc_html__('Card description typography', 'coops-widgets'),
                'selector' => '{{WRAPPER}} .card-text',
            ]
        );




        // $this->add_control(
        //     'card_background_color',
        //     [
        //         'label' => esc_html__('Card background color', 'coops-widgets'),
        //         'type' => \Elementor\Controls_Manager::COLOR,
        //         'default' => '#ffffff',
        //         'selectors' => [
        //             '{{WRAPPER}} .card' => 'background-color: {{VALUE}}',
        //         ],
        //     ]
        // );



        $this->end_controls_section();
    }

    /**
     * Render Coops_Card_Widget widget output on the frontend.
     * 
     * Written in PHP and used to generate the final HTML.
     * 
     * @since 1.0.0
     * @access protected
     */

    protected function render()
    {
        // get our widget settings
        $settings = $this->get_settings_for_display();
        // get our variables from the widget settings
        $card_title = $settings['card_title'];
        $card_description = $settings['card_description'];

        ?>
        <!-- HTML output -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"><?php echo $card_title; ?></h3>
                <p class="card-text"><?php echo $card_description; ?></p>
            </div>
        </div>
        <!-- /HTML output -->
        <?php
    }
}
