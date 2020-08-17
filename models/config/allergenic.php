<?php

return [
    'list' => [
        'filter' => [
            'search' => [
                'prompt' => 'lang:yak0d3.allergenics::default.text_filter_search',
                'mode' => 'all',
            ],
        ],
        'toolbar' => [
           'buttons' => [
               'create' => [
                   'label' => 'lang:admin::lang.button_new',
                   'class' => 'btn btn-primary',
                   'href' => 'yak0d3/allergenics/allergenics/create'
               ],
               'delete' => [
                   'label' => 'lang:admin::lang.button_delete',
                   'class' => 'btn btn-danger',
                   'data-attach-loading' => '',
                   'data-request-form' => '#list-form',
                   'data-request' => 'onDelete',
                   'data-request-data' => "_method:'DELETE'",
                   'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm'
               ],
           ],
        ],
        'columns' => [
            'edit' => [
                'type' => 'button',
                'iconCssClass' => 'fa fa-pencil',
                'attributes' => [
                    'class' => 'btn btn-edit',
                    'href' => 'yak0d3/allergenics/allergenics/edit/{id}',
                ],
            ],
            'id' => [
                'label' => 'yak0d3.allergenics::default.menu.label_id'
            ],
            'icon' => [
                'label' => 'yak0d3.allergenics::default.menu.label_icon',
            ],
            'name' => [
                'label' => 'yak0d3.allergenics::default.menu.label_name',
            ],
        ],
    ],
    'form' => [
        'toolbar' => [
           'buttons' => [
               'save' => [
                   'label' => 'lang:admin::lang.button_save',
                   'class' => 'btn btn-primary',
                   'data-request' => 'onSave',
                   'data-progress-indicator' => 'lang:admin::lang.text_saving'
               ],
               'saveClose' => [
                   'label' => 'lang:admin::lang.button_save_close',
                   'class' => 'btn btn-default',
                   'data-request' => 'onSave',
                   'data-request-data' => 'close:1',
                   'data-progress-indicator' => 'lang:admin::lang.text_saving',
               ],
               'delete' => [
                   'label' => 'lang:admin::lang.button_icon_delete', 'class' => 'btn btn-danger',
                   'data-request' => 'onDelete', 'data-request-data' => "_method:'DELETE'",
                   'data-progress-indicator' => 'lang:admin::lang.text_deleting',
                   'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm', 'context' => ['edit'],
               ],
           ],
        ],
        'fields' => [
            'icon' => [
                'label' => 'yak0d3.allergenics::default.menu.label_icon',
                'type' => 'select',
                'required' => true,
                'span' => 'left',
            ],
            'name' => [
                'label' => 'yak0d3.allergenics::default.menu.label_name',
                'type' => 'addon',
                'required' => true,
                'span' => 'right',
            ],
            'description' => [
                'label' => 'yak0d3.allergenics::default.menu.label_description',
                'type' => 'addon',
            ],
        ],
    ],
];