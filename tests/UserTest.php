<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    public function testSetAndGetName()
    {
        $user = new User();
        $user->setName('Mouna');
        $this->assertEquals('Mouna', $user->getName());
    }

    public function testSetAndGetEmail()
    {
        $user = new User();
        $user->setEmail('mouna@email.com');
        $this->assertEquals('mouna@email.com', $user->getEmail());
    }

    public function testSetAndGetAge()
    {
        $user = new User();
        $user->setAge('20');
        $this->assertEquals('20', $user->getAge());
    }

    public function testGetInitialsWithValidName()
    {
        $user = new User();
        $user->setName('MounaMouna');
        $this->assertEquals('MO', $user->getInitials());
    }

    public function testGetInitialsWithShortName()
    {
        $user = new User();
        $user->setName('Mo');
        $this->assertEquals('User name must be longer than ' . User::MINCHARS . ' characters', $user->getInitials());
    }

    public function testGetInitialsWithExactName()
    {
        $user = new User();
        $user->setName('AliAli');
        $this->assertEquals('User name must be longer than ' . User::MINCHARS . ' characters', $user->getInitials());
    }

    public function testGetInitialsWithEmptyName()
    {
        $user = new User();
        $user->setName('');
        $this->assertEquals('User name must be longer than ' . User::MINCHARS . ' characters', $user->getInitials());
    }
}
