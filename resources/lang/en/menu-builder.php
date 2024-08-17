<?php

declare(strict_types=1);

return [
    'form' => [
        'title' => 'Title',
        'url' => 'URL',
    ],
    'resource' => [
        'name' => [
            'label' => 'Name',
        ],
        'locations' => [
            'empty' => 'Unassigned',
        ],
        'is_visible' => [
            'label' => 'Visibility',
            'visible' => 'Visible',
            'hidden' => 'Hidden',
        ],
    ],
    'actions' => [
        'add' => [
            'label' => 'Add to Menu',
        ],
        'locations' => [
            'label' => 'Manage Locations',
            'description' => 'Choose which menu appears at each location.',
            'form' => [
                'location' => [
                    'label' => 'Location',
                ],
                'menu' => [
                    'label' => 'Assigned Menu',
                ],
            ],
        ],
    ],
    'items' => [
        'empty' => [
            'heading' => 'There are no items in this menu.',
        ],
    ],
    'custom_link' => 'Custom Link',
    'open_in' => [
        'label' => 'Open in',
        'options' => [
            'self' => 'Same tab',
            'blank' => 'New tab',
            'parent' => 'Parent tab',
            'top' => 'Top tab',
        ],
    ],
    'notifications' => [
        'created' => [
            'title' => 'Link created',
        ],
        'locations' => [
            'title' => 'Menu locations updated',
        ],
    ],
    'panel' => [
        'empty' => [
            'heading' => 'No items found',
            'description' => 'There are no items in this menu.',
        ],
        'pagination' => [
            'previous' => 'Previous',
            'next' => 'Next',
        ],
    ],
];
