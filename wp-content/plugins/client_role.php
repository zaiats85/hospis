<?php
/*
Plugin Name: Add client role
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: Plugin add client role.
Version: 0.1
Author: ZG-Web
Author URI: z-g.pp.ua

Copyright 2017  ZG-Web  (email: z.g-web@ykr.net)

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

register_activation_hook(__FILE__, 'true_new_role_plugin_activate');

function true_new_role_plugin_activate(){
    add_role('client', __('Client'), [
        'create_sites' => false,
        'delete_sites' => false,
        'manage_network' => false,
        'manage_sites' => false,
        'manage_network_users' => false,
        'manage_network_plugins' => false,
        'manage_network_themes' => false,
        'manage_network_options' => false,
        'upload_plugins' => false,
        'upload_themes' => false,
        'upgrade_network' => false,
        'setup_network' => false,
        'activate_plugins' => false,
        'create_users' => false,
        'delete_plugins' => false,
        'delete_themes' => false,
        'delete_users' => false,
        'edit_files' => false,
        'edit_plugins' => false,
        'edit_theme_options' => false,
        'edit_themes' => false,
        'edit_users' => false,
        'export' => false,
        'import' => false,
        'install_plugins' => false,
        'install_themes' => false,
        'list_users' => false,
        'manage_options' => false,
        'promote_users' => false,
        'remove_users' => false,
        'switch_themes' => false,
        'update_core' => false,
        'update_plugins' => false,
        'update_themes' => false,
        'edit_dashboard' => false,
        'customize' => false,
        'delete_site' => false,
        'moderate_comments' => true,
        'manage_categories' => false,
        'manage_links' => false,
        'edit_others_posts' => true,
        'edit_pages' => false,
        'edit_others_pages' => false,
        'edit_published_pages' => false,
        'publish_pages' => false,
        'delete_pages' => false,
        'delete_others_pages' => false,
        'delete_published_pages' => false,
        'delete_others_posts' => true,
        'delete_private_posts' => false,
        'edit_private_posts' => false,
        'read_private_posts' => false,
        'delete_private_pages' => false,
        'edit_private_pages' => false,
        'read_private_pages' => false,
        'unfiltered_html' => false,
        'edit_published_posts' => true,
        'upload_files' => true,
        'publish_posts' => true,
        'delete_published_posts' => true,
        'edit_posts' => true,
        'delete_posts' => true,
        'read' => true,
    ]);
}

register_deactivation_hook(__FILE__,'true_new_role_plugin_delete');

function true_new_role_plugin_delete()
{
    remove_role('client');
}