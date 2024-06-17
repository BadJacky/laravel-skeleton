<?php

return [

    'label' => '查询构建器',

    'form' => [

        'operator' => [
            'label' => '运算符',
        ],

        'or_groups' => [

            'label' => '组',

            'block' => [
                'label' => '逻辑或 (或者)',
                'or' => '或者',
            ],

        ],

        'rules' => [

            'label' => '规则',

            'item' => [
                'and' => '并且',
            ],

        ],

    ],

    'no_rules' => '（无规则）',

    'item_separators' => [
        'and' => '并且',
        'or' => '或者',
    ],

    'operators' => [

        'is_filled' => [

            'label' => [
                'direct' => '有输入',
                'inverse' => '空白',
            ],

            'summary' => [
                'direct' => ':attribute 有输入',
                'inverse' => ':attribute 是空白',
            ],

        ],

        'boolean' => [

            'is_true' => [

                'label' => [
                    'direct' => '真',
                    'inverse' => '假',
                ],

                'summary' => [
                    'direct' => ':attribute 为真',
                    'inverse' => ':attribute 为假',
                ],

            ],

        ],

        'date' => [

            'is_after' => [

                'label' => [
                    'direct' => '之后',
                    'inverse' => '之前',
                ],

                'summary' => [
                    'direct' => ':attribute 在 :date 之后',
                    'inverse' => ':attribute 在 :date 之前',
                ],

            ],

            'is_before' => [

                'label' => [
                    'direct' => '之前',
                    'inverse' => '之后',
                ],

                'summary' => [
                    'direct' => ':attribute 在 :date 之前',
                    'inverse' => ':attribute 在 :date 之后',
                ],

            ],

            'is_date' => [

                'label' => [
                    'direct' => '是日期',
                    'inverse' => '不是日期',
                ],

                'summary' => [
                    'direct' => ':attribute 是 :date',
                    'inverse' => ':attribute 不是 :date',
                ],

            ],

            'is_month' => [

                'label' => [
                    'direct' => '是月份',
                    'inverse' => '不是月份',
                ],

                'summary' => [
                    'direct' => ':attribute 是 :month',
                    'inverse' => ':attribute 不是 :month',
                ],

            ],

            'is_year' => [

                'label' => [
                    'direct' => '是年份',
                    'inverse' => '不是年份',
                ],

                'summary' => [
                    'direct' => ':attribute 是 :year',
                    'inverse' => ':attribute 不是 :year',
                ],

            ],

            'form' => [

                'date' => [
                    'label' => '日',
                ],

                'month' => [
                    'label' => '月',
                ],

                'year' => [
                    'label' => '年',
                ],

            ],

        ],

        'number' => [

            'equals' => [

                'label' => [
                    'direct' => '等于',
                    'inverse' => '不等于',
                ],

                'summary' => [
                    'direct' => ':attribute 等于 :number',
                    'inverse' => ':attribute 不等于 :number',
                ],

            ],

            'is_max' => [

                'label' => [
                    'direct' => '最大',
                    'inverse' => '超过',
                ],

                'summary' => [
                    'direct' => ':attribute 小于或等于 :number',
                    'inverse' => 'attribute 大于 :number',
                ],

            ],

            'is_min' => [

                'label' => [
                    'direct' => '最小',
                    'inverse' => '以下',
                ],

                'summary' => [
                    'direct' => ':attribute 大于或等于 :number',
                    'inverse' => ':attribute 小于 :number',
                ],

            ],

            'aggregates' => [

                'average' => [
                    'label' => '平均',
                    'summary' => ':attribute 的平均值',
                ],

                'max' => [
                    'label' => '最大值',
                    'summary' => ':attribute 的最大值',
                ],

                'min' => [
                    'label' => '最小值',
                    'summary' => ':attribute 的最小值',
                ],

                'sum' => [
                    'label' => '总和',
                    'summary' => ':attribute 的总和',
                ],

            ],

            'form' => [

                'aggregate' => [
                    'label' => '汇总',
                ],

                'number' => [
                    'label' => '数字',
                ],

            ],

        ],

        'relationship' => [

            'equals' => [

                'label' => [
                    'direct' => '有',
                    'inverse' => '没有',
                ],

                'summary' => [
                    'direct' => '保持 :count 个 :relationship',
                    'inverse' => '非保持 :count 个 :relationship',
                ],

            ],

            'has_max' => [

                'label' => [
                    'direct' => '最多',
                    'inverse' => '超过',
                ],

                'summary' => [
                    'direct' => '保持 :count 个或以下的 :relationship',
                    'inverse' => '保持超过 :count 个 :relationship',
                ],

            ],

            'has_min' => [

                'label' => [
                    'direct' => '最少',
                    'inverse' => '少于',
                ],

                'summary' => [
                    'direct' => '保持 :count 个或以上的 :relationship',
                    'inverse' => '保持少于 :count 个 :relationship',
                ],

            ],

            'is_empty' => [

                'label' => [
                    'direct' => '为空',
                    'inverse' => '不为空',
                ],

                'summary' => [
                    'direct' => ':relationship 为空',
                    'inverse' => ':relationship 不为空',
                ],

            ],

            'is_related_to' => [

                'label' => [

                    'single' => [
                        'direct' => '是',
                        'inverse' => '不是',
                    ],

                    'multiple' => [
                        'direct' => '包含',
                        'inverse' => '不包含',
                    ],

                ],

                'summary' => [

                    'single' => [
                        'direct' => ':relationship 是 :values',
                        'inverse' => ':relationship 不是 :values',
                    ],

                    'multiple' => [
                        'direct' => ':relationship 包含 :values',
                        'inverse' => ':relationship 不包含 :values',
                    ],

                    'values_glue' => [
                        0 => ', ',
                        'final' => ' 或者 ',
                    ],

                ],

                'form' => [

                    'value' => [
                        'label' => '值',
                    ],

                    'values' => [
                        'label' => '值',
                    ],

                ],

            ],

            'form' => [

                'count' => [
                    'label' => '数量',
                ],

            ],

        ],

        'select' => [

            'is' => [

                'label' => [
                    'direct' => '是',
                    'inverse' => '不是',
                ],

                'summary' => [
                    'direct' => ':attribute 是 :values',
                    'inverse' => ':attribute 不是 :values',
                    'values_glue' => [
                        ', ',
                        'final' => ' 或者 ',
                    ],
                ],

                'form' => [

                    'value' => [
                        'label' => '值',
                    ],

                    'values' => [
                        'label' => '值',
                    ],

                ],

            ],

        ],

        'text' => [

            'contains' => [

                'label' => [
                    'direct' => '包含',
                    'inverse' => '不包含',
                ],

                'summary' => [
                    'direct' => ':attribute 包含 :text',
                    'inverse' => ':attribute 不包含 :text',
                ],

            ],

            'ends_with' => [

                'label' => [
                    'direct' => '以...结尾',
                    'inverse' => '不以...结尾',
                ],

                'summary' => [
                    'direct' => ':attribute 以 :text 结尾',
                    'inverse' => ':attribute 不以 :text 结尾',
                ],

            ],

            'equals' => [

                'label' => [
                    'direct' => '等于',
                    'inverse' => '不等于',
                ],

                'summary' => [
                    'direct' => ':attribute 等于 :text',
                    'inverse' => ':attribute 不等于 :text',
                ],

            ],

            'starts_with' => [

                'label' => [
                    'direct' => '以...开始',
                    'inverse' => '不以...开始',
                ],

                'summary' => [
                    'direct' => ':attribute 以 :text 开始',
                    'inverse' => ':attribute 不以 :text 开始',
                ],

            ],

            'form' => [

                'text' => [
                    'label' => '文本',
                ],

            ],

        ],

    ],

    'actions' => [

        'add_rule' => [
            'label' => '添加规则',
        ],

        'add_rule_group' => [
            'label' => '添加规则组',
        ],

    ],

];
