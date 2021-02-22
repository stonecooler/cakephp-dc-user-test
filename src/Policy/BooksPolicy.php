<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Books;
use Authorization\IdentityInterface;
use Cake\Log\Log;

/**
 * Books policy
 */
class BooksPolicy
{
    /**
     * Check if $user can add Books
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Books $books
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Books $books)
    {
    }

    /**
     * Check if $user can edit Books
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Books $books
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Books $books)
    {
    }

    /**
     * Check if $user can delete Books
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Books $books
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Books $books)
    {
    }

    /**
     * Check if $user can view Books
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Books $books
     * @return bool
     */
    public function canView(IdentityInterface $user, Books $books)
    {
    }

    /**
     * Check if $user can index Books
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Books $books
     * @return bool
     */
    public function canIndex(IdentityInterface $user = null, Books $books)
    {
        Log::debug("--- BooksPolicy ----");

        return true;
    }

}
