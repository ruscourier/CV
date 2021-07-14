<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/ruscourier/Documents/Projects/CV/personal/user/pages/left/resume.md',
    'modified' => 1619804394,
    'data' => [
        'header' => [
            'title' => 'Resume',
            'blog_url' => 'resume',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 5,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Resume Description',
                'limit' => 10
            ]
        ],
        'frontmatter' => 'title: Resume
blog_url: resume

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Resume Description
    limit: 10',
        'markdown' => ''
    ]
];
