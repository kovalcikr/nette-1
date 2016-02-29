<?php

namespace App\Presenters;

use app\model\User;
use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
    private $userService;

    /**
     * HomepagePresenter constructor.
     * @param $userService
     */
    public function __construct($userService)
    {
        $this->userService = $userService;
    }


    public function renderDefault() {
        $user = new User();
        $user->username = "Fero";
        $user->email = "fero@hruska.sk";

        return $user;
    }

    public function actionEdit($userId)
    {
        $user = $this->userService->getUser($userId);
        if (!$user) {
            $this->error('Příspěvek nebyl nalezen');
        }
        $this['postForm']->setDefaults($user->toArray());
    }
}
