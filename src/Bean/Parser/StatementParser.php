<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Orm\Bean\Parser;

use Swoft\Bean\Parser\AbstractParser;
use Swoft\Orm\Bean\Annotation\Statement;
use Swoft\Orm\Bean\Collector\StatementCollector;

/**
 * StatementParser
 */
class StatementParser extends AbstractParser
{
    /**
     * @param string    $className
     * @param Statement $objectAnnotation
     * @param string    $propertyName
     * @param string    $methodName
     * @param null      $propertyValue
     *
     * @return null
     */
    public function parser(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    ) {
        StatementCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);

        return null;
    }
}
