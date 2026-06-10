<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'user';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys
     * are the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group
     * when using functions such as:
     *      $user->addGroup('superadmin');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://codeigniter4.github.io/shield/quick_start_guide/using_authorization/#change-available-groups for more info
     */

    public array $groups = [
        'superadmin' => [
            'title'       => 'Super Administrator',
            'description' => 'Full system access',
        ],
        'admin' => [
            'title'       => 'Administrator',
            'description' => 'Manage website content and users',
        ],
        'editor' => [
            'title'       => 'Content Editor',
            'description' => 'Create and edit content',
        ],
        'approver' => [
            'title'       => 'Content Approver',
            'description' => 'Review and publish content',
        ],
        'viewer' => [
            'title'       => 'Viewer',
            'description' => 'Read-only access',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system.
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'dashboard.view' => 'View dashboard',

        'users.view'       => 'View users',
        'users.create'     => 'Create users',
        'users.update'     => 'Update users',
        'users.delete'     => 'Delete users',
        'users.assignRole' => 'Assign user roles',

        'pages.view'    => 'View pages',
        'pages.create'  => 'Create pages',
        'pages.update'  => 'Update pages',
        'pages.delete'  => 'Delete pages',
        'pages.publish' => 'Publish pages',

        'products.view'    => 'View products',
        'products.create'  => 'Create products',
        'products.update'  => 'Update products',
        'products.delete'  => 'Delete products',
        'products.publish' => 'Publish products',

        'solutions.view'    => 'View solutions',
        'solutions.create'  => 'Create solutions',
        'solutions.update'  => 'Update solutions',
        'solutions.delete'  => 'Delete solutions',
        'solutions.publish' => 'Publish solutions',

        'projects.view'    => 'View projects',
        'projects.create'  => 'Create projects',
        'projects.update'  => 'Update projects',
        'projects.delete'  => 'Delete projects',
        'projects.publish' => 'Publish projects',

        'news.view'    => 'View news',
        'news.create'  => 'Create news',
        'news.update'  => 'Update news',
        'news.delete'  => 'Delete news',
        'news.publish' => 'Publish news',

        'media.view'   => 'View media',
        'media.upload' => 'Upload media',
        'media.update' => 'Update media',
        'media.delete' => 'Delete media',

        'inquiries.view'   => 'View inquiries',
        'inquiries.reply'  => 'Reply inquiries',
        'inquiries.delete' => 'Delete inquiries',
        'inquiries.export' => 'Export inquiries',

        'seo.view'   => 'View SEO',
        'seo.update' => 'Update SEO',

        'settings.view'   => 'View settings',
        'settings.update' => 'Update settings',

        'audit.view' => 'View audit logs',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     *
     * This defines group-level permissions.
     */
    public array $matrix = [
        'superadmin' => [
            'dashboard.*',
            'users.*',
            'pages.*',
            'products.*',
            'solutions.*',
            'projects.*',
            'news.*',
            'media.*',
            'inquiries.*',
            'seo.*',
            'settings.*',
            'audit.*',
        ],

        'admin' => [
            'dashboard.view',

            'users.view',
            'users.create',
            'users.update',
            'users.assignRole',

            'pages.*',
            'products.*',
            'solutions.*',
            'projects.*',
            'news.*',

            'media.*',

            'inquiries.view',
            'inquiries.reply',
            'inquiries.delete',
            'inquiries.export',

            'seo.*',
            'settings.*',
            'audit.view',
        ],

        'editor' => [
            'dashboard.view',

            'pages.view',
            'pages.create',
            'pages.update',

            'products.view',
            'products.create',
            'products.update',

            'solutions.view',
            'solutions.create',
            'solutions.update',

            'projects.view',
            'projects.create',
            'projects.update',

            'news.view',
            'news.create',
            'news.update',

            'media.view',
            'media.upload',

            'seo.view',
        ],

        'approver' => [
            'dashboard.view',

            'pages.view',
            'pages.update',
            'pages.publish',

            'products.view',
            'products.update',
            'products.publish',

            'solutions.view',
            'solutions.update',
            'solutions.publish',

            'projects.view',
            'projects.update',
            'projects.publish',

            'news.view',
            'news.update',
            'news.publish',

            'media.view',
            'inquiries.view',
            'seo.view',
            'seo.update',
        ],

        'viewer' => [
            'dashboard.view',
            'pages.view',
            'products.view',
            'solutions.view',
            'projects.view',
            'news.view',
            'media.view',
            'inquiries.view',
            'audit.view',
        ],
    ];
}
