<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Orm;

use Swoft\Log\Log;

/**
 * Class DbCoResult
 *
 * @package Swoft\Orm
 */
class DbCoResult extends DbResult
{
    /**
     * @param array ...$params
     * @return mixed
     */
    public function getResult(...$params)
    {
      
        $this->recv(true, false);
       
        $result = $this->getResultByClassName();
        $this->release();

        foreach ($this->decorators ?? [] as $decorator) {
            $result = value($decorator($result));
        }
        Log::profileEnd($this->profileKey);
        return $result;
    }
}
