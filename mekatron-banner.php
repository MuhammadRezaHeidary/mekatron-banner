<?php

/**
Plugin Name: Mekatron Banner
Plugin URI: https://github.com/MuhammadRezaHeidary/mekatron-banner
Description: This plugin shows a banner on your webpage!
Version: 1.0.0
Requires at least: 5.6
Requires PHP:      7.4
Author: Muhammmad Reza Heidary
Author URI: https://www.linkedin.com/in/muhammad-reza-heidary/
License: GPL v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Update URI: https://github.com/MuhammadRezaHeidary/mekatron-banner
 */

/*
mekatron-banner is a free Wordpress plugin which shows a banner on your webpage.
Copyright (C)  2023  Muhammad Reza Heidary

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

mekatron-banner Copyright (C)  2023  Muhammad Reza Heidary
This program comes with ABSOLUTELY NO WARRANTY.
This is free software, and you are welcome to redistribute it
under certain conditions.
 */

define('MEKATRON_BANNER_IMAGES_PATH',plugin_dir_url(__FILE__).'assets/images/');

function mekatron_show_banner() {
    $mekatron_banner_url = MEKATRON_BANNER_IMAGES_PATH.'mekatron.jpg';
    $mekatron_banner_forward_link = 'https://mekatronik.ir/';
    ?>
    <style>
        a.mekatron-banner {
            display: block;
            position: fixed;
            left: 10px;
            bottom: 10px;
            z-index: 99;
        }
        img.mekatron-banner-container {
            border-radius: 8px;
            box-shadow: 0 3px 5px #00000088;
        }
    </style>
    <a href="<?php echo $mekatron_banner_forward_link;?>" class="mekatron-banner" target="_blank">
        <img class="mekatron-banner-container" src="<?php echo $mekatron_banner_url;?>" alt="mekatronik" width="300px" height="">
    </a>
    <?php
}

add_action('wp_footer', 'mekatron_show_banner');