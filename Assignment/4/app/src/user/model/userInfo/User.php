<?php

namespace App\src\user\model\userInfo;

class User
{
    private string $fname;
    private string $lname;
    private string $email;
    private string $password;

    public function getFname(): string
    {
        return $this->fname;
    }

    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    public function getLname(): string
    {
        return $this->lname;
    }

    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}