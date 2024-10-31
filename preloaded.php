<?php
/*
Plugin Name: Pre Loaded
Plugin URI:  http://krisjaydesigns.com
Description: Preload Images Contained Within ALL Referenced CSS Files. Uses jQuery to Preload to DOM. Plug n Play. Upload, Activate and Sit Back!
Author: Kris Jonasson
Version: 0.1

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/ 

// Addition To WordPress Functions
add_action('wp_head','get_pre_loaded_js');
add_action('wp_head','get_pre_loaded_drf');
add_action('login_head','login_pre_loaded_js');
add_action('login_head','login_pre_loaded_drf');
add_action('admin_head','admin_pre_loaded_js');
add_action('admin_head','admin_pre_loaded_drf');


function get_pre_loaded_js() { ?>
   <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/pre-loaded/preloaded.js"></script>
<? }
function get_pre_loaded_drf() { ?>
	<script type="text/javascript">

		$(document).ready(function(){
				$.getpreLoaded();
			}); 
	</script>
<? }
function login_pre_loaded_js() { ?>
   <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/pre-loaded/preloaded.js"></script>
<? }
function login_pre_loaded_drf() { ?>
	<script type="text/javascript">

		$(document).ready(function(){
				$.getpreLoaded();
			}); 
	</script>
<? }
function admin_pre_loaded_js() { ?>
   <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/pre-loaded/preloaded.js"></script>
<? }
function admin_pre_loaded_drf() { ?>
	<script type="text/javascript">

		$(document).ready(function(){
				$.getpreLoaded();
			}); 
	</script>
<? } ?>