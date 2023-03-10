<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'status'         => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'color'             => 'Color',
            'color_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'priority'       => [
        'title'          => 'Priorities',
        'title_singular' => 'Priority',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'color'             => 'Color',
            'color_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'color'             => 'Color',
            'color_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'ticket'         => [
        'title'          => 'Tickets',
        'title_singular' => 'Ticket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'content'                 => 'Content',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priority',
            'priority_helper'         => '',
            'category'                => 'Category',
            'category_helper'         => '',
            'author_name'             => 'Enduser Name',
            'author_name_helper'      => '',
            'author_email'            => 'Enduser Email',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assigned To User',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comments',
            'comments_helper'         => '',
            'analyses'                => 'Analyses',
            'analyses_helper'         => '',
            'details'                 => 'Details',
            'details_helper'          => '',
            'resolutions'              => 'Resolution',
            'resolution_helper'       => '',
            'root_causes'              => 'Root Cause',
            'root_cause_helper'       => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'attachments'             => 'Attachments',
            'attachments_helper'      => '',
        ],
    ],
    'ticket_create' => [
        'title'          => 'New Ticket',
        'title_singular' => 'New Ticket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'content'                 => 'Content',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priority',
            'priority_helper'         => '',
            'category'                => 'Category',
            'category_helper'         => '',
            'author_name'             => 'Enduser Name',
            'author_name_helper'      => '',
            'author_email'            => 'Enduser Email',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assigned To User',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comments',
            'comments_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'attachments'             => 'Attachments',
            'attachments_helper'      => '',
        ],
    ],
    'ticket_open' => [
        'title'          => 'Open Tickets',
        'title_singular' => 'Open Ticket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'content'                 => 'Content',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priority',
            'priority_helper'         => '',
            'category'                => 'Category',
            'category_helper'         => '',
            'author_name'             => 'Enduser Name',
            'author_name_helper'      => '',
            'author_email'            => 'Enduser Email',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assigned To User',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comments',
            'comments_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'attachments'             => 'Attachments',
            'attachments_helper'      => '',
        ],
    ],
    'ticket_pending' => [
        'title'          => 'Pending Tickets',
        'title_singular' => 'Pending Ticket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'content'                 => 'Content',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priority',
            'priority_helper'         => '',
            'category'                => 'Category',
            'category_helper'         => '',
            'author_name'             => 'Enduser Name',
            'author_name_helper'      => '',
            'author_email'            => 'Enduser Email',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assigned To User',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comments',
            'comments_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'attachments'             => 'Attachments',
            'attachments_helper'      => '',
        ],
    ],
    'archive' => [
        'title'          => 'Archives',
        'title_singular' => 'Archive',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'content'                 => 'Content',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priority',
            'priority_helper'         => '',
            'category'                => 'Category',
            'category_helper'         => '',
            'author_name'             => 'Enduser Name',
            'author_name_helper'      => '',
            'author_email'            => 'Enduser Email',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assigned To User',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comments',
            'comments_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'attachments'             => 'Attachments',
            'attachments_helper'      => '',
        ],
    ],
    'comment'        => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Enduser Name',
            'author_name_helper'  => '',
            'author_email'        => 'Enduser Email',
            'author_email_helper' => '',
            'user'                => 'User',
            'user_helper'         => '',
            'comment_text'        => 'Comment Text',
            'comment_text_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'analyse'        => [
        'title'          => 'Analyses',
        'title_singular' => 'Analyse',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Enduser Name',
            'author_name_helper'  => '',
            'author_email'        => 'Enduser Email',
            'author_email_helper' => '',
            'user'                => 'User',
            'user_helper'         => '',
            'analyse_text'        => 'Analyse Text',
            'analyse_text_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],

    'detail'        => [
        'title'          => 'Details',
        'title_singular' => 'Detail',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Enduser Name',
            'author_name_helper'  => '',
            'author_email'        => 'Enduser Email',
            'author_email_helper' => '',
            'user'                => 'User',
            'user_helper'         => '',
            'detail_text'        => 'Detail Text',
            'detail_text_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'resolution'        => [
        'title'          => 'Resolutions',
        'title_singular' => 'Resolution',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Enduser Name',
            'author_name_helper'  => '',
            'author_email'        => 'Enduser Email',
            'author_email_helper' => '',
            'user'                => 'User',
            'user_helper'         => '',
            'resolution_text'        => 'Resolution Text',
            'resolution_text_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'root_cause'        => [
        'title'          => 'Root Causes',
        'title_singular' => 'Root Cause',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Enduser Name',
            'author_name_helper'  => '',
            'author_email'        => 'Enduser Email',
            'author_email_helper' => '',
            'user'                => 'User',
            'user_helper'         => '',
            'root_cause_text'        => 'Root Cause Text',
            'root_cause_text_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
];
