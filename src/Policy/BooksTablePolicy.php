<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\BooksTable;
use Authorization\IdentityInterface;
use Authorization\Policy\BeforePolicyInterface;
use Cake\Log\Log;

/**
 * Books policy
 */
class BooksTablePolicy //implements BeforePolicyInterface
{
//    public function before($user, $resource, $action)
//    {
//        return true;
//    }

    public function canIndex(IdentityInterface $user = null)
    {
        Log::debug("--- BooksTablePolicy ----");
        Log::debug(print_r($user,true));
        return true;
    }

}
