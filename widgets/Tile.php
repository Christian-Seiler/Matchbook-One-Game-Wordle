<?php

namespace fhnw\modules\games\wordle\widgets;

use humhub\libs\Html;
use humhub\widgets\BootstrapComponent;

/**
 * @package wordle\widgets
 */
class Tile extends BootstrapComponent
{
    public const STATUS_EMPTY = 'empty';

    public const STATUS_GUESS = 'guess';

    public const STATUS_GREEN = 'green';

    public const STATUS_YELLOW = 'yellow';

    public const STATUS_RED = 'red';

    /** @var ?string */
    public $letter;

    /**
     * Creates an empty Tile
     *
     * @return static
     * @static
     */
    public static function empty()
    {
        return new Tile(['type' => self::STATUS_EMPTY]);
    }

    /**
     * @param string $handler
     *
     * @return $this
     */
    public function action($handler)
    {
        $this->htmlOptions['data-action-click'] = $handler;

        return $this;
    }

    /**
     * @return string the css base class
     */
    public function getComponentBaseClass() { return 'tile'; }

    /**
     * @param string $type
     *
     * @return string
     */
    public function getTypedClass($type)
    {
        return "tile-$type";
    }

    /**
     * @return array all options required for rendering the widget
     */
    public function getWidgetOptions()
    {
        $options = parent::getWidgetOptions();
        $options['letter'] = $this->letter;

        return $options;
    }

    /**
     * @param int $row
     * @param int $column
     *
     * @return $this
     */
    public function location($row, $column)
    {
        $this->htmlOptions['data-row'] = $row;
        $this->htmlOptions['data-column'] = $column;

        return $this;
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function renderComponent()
    {
        $front = Html::tag('div', '', ['class' => 'front']);
        $back = Html::tag('div', '', ['class' => 'back']);

        return Html::tag('div', "$front $back", $this->htmlOptions);
    }

}
