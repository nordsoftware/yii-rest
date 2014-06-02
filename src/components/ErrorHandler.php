<?php
/**
 * ErrorHandler class file.
 * @author Christoffer Lindqvist <christoffer.lindqvist@nordsoftware.com>
 * @copyright Copyright &copy; Nord Software 2014-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package nordsoftware.yii-rest.components
 */

namespace nordsoftware\yii_rest\components;

class ErrorHandler extends \CErrorHandler
{
    /**
     * @inheritdoc
     */
    protected function handleError($event)
    {
        \Yii::app()->displayError($event->code, $event->message, $event->file, $event->line);
    }

    /**
     * @inheritdoc
     */
    protected function handleException($exception)
    {
        \Yii::app()->displayException($exception);
    }
}