jqGrid Widget for Yii2
========================
Yii2 wrapper for a powerful ajax-enabled grid [free jqGrid](https://github.com/free-jqgrid/jqGrid) jQuery plugin.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```
php composer.phar require  "apaoww/yii2-jqgrid-widget" "dev-master"
```

or add

```json
"apaoww/yii2-jqgrid-widget" : "dev-master"
```

to the require section of your application's `composer.json` file.

* Add action in the controller (optional), for example:

```php
use apaoww\jqgrid\actions\JqGridActiveAction;

public function actions()
{
    return [
        'jqgrid' => [
            'class' => JqGridActiveAction::className(),
            'model' => Page::className(),
            'scope' => function ($query) {
                /** @var \yii\db\ActiveQuery $query */
                $query->select(['title', 'author', 'language']);
            },
        ],
    ];
}
```

* View's example:

```php
use apaoww\jqgrid\JqGridWidget;
use yii\helpers\Url;

<?= JqGridWidget::widget([
    'requestUrl' => Url::to('jqgrid'),
    'gridSettings' => [
        'colNames' => ['Title', 'Author', 'Language'],
        'colModel' => [
            ['name' => 'title', 'index' => 'title', 'editable' => true],
            ['name' => 'author', 'index' => 'author', 'editable' => true],
            ['name' => 'language', 'index' => 'language', 'editable' => true]
        ],
        'rowNum' => 15,
        'autowidth' => true,
        'height' => 'auto',
    ],
    'pagerSettings' => [
        'edit' => true,
        'add' => true,
        'del' => true,
        'search' => ['multipleSearch' => true]
    ],
    'enableFilterToolbar' => true,
]) ?>
```
