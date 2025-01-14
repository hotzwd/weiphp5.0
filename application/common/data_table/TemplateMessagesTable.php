<?php
/**
 * TemplateMessages数据模型
 */
class TemplateMessagesTable {
    // 数据表模型配置
    public $config = [
      'name' => 'template_messages',
      'title' => '模板消息群发记录',
      'search_key' => 'title:根据消息标题搜索',
      'add_button' => 0,
      'del_button' => 1,
      'search_button' => 1,
      'check_all' => 1,
      'list_row' => 20,
      'addon' => 'core'
  ];

    // 列表定义
    public $list_grid = [
      'title' => [
          'title' => '消息标题'
      ],
      'content' => [
          'title' => '消息内容'
      ],
      'sender' => [
          'title' => '发起人'
      ],
      'jamp_url' => [
          'title' => '跳转链接'
      ],
      'send_type' => [
          'title' => '发送方式'
      ],
      'send_count' => [
          'title' => '成功发送人数'
      ]
  ];

    // 字段定义
    public $fields = [
      'pbid' => [
          'title' => '公众号id',
          'type' => 'num',
          'field' => 'int(10) NULL'
      ],
      'cTime' => [
          'title' => '创建时间',
          'type' => 'datetime',
          'field' => 'int(10) NULL'
      ],
      'title' => [
          'title' => '消息标题',
          'type' => 'string',
          'field' => 'varchar(255) NULL',
          'is_show' => 1
      ],
      'content' => [
          'title' => '消息内容',
          'type' => 'textarea',
          'field' => 'text NULL',
          'is_show' => 1
      ],
      'sender' => [
          'title' => '发起人',
          'type' => 'string',
          'field' => 'varchar(255) NULL',
          'is_show' => 1
      ],
      'jamp_url' => [
          'title' => '跳转url',
          'type' => 'string',
          'field' => 'varchar(555) NULL',
          'is_show' => 1
      ],
      'send_type' => [
          'title' => '发送方式',
          'type' => 'radio',
          'field' => 'char(10) NULL',
          'extra' => '0:按用户组发送
1:指定OpenID发送',
          'is_show' => 1,
          'value' => 0
      ],
      'send_openids' => [
          'title' => '发送openid',
          'type' => 'string',
          'field' => 'varchar(255) NULL',
          'is_show' => 1
      ],
      'group_id' => [
          'title' => '发送分组id',
          'type' => 'num',
          'field' => 'int(10) NULL',
          'is_show' => 1
      ],
      'send_count' => [
          'title' => '发送人数',
          'type' => 'num',
          'field' => 'int(10) NULL',
          'is_show' => 1,
          'value' => 0
      ]
  ];
}