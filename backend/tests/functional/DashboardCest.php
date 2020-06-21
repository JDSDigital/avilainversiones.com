<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class DashboardCest
{
    /**
     * Load fixtures before db transaction begin
     * Called in _before()
     * @see \Codeception\Module\Yii2::_before()
     * @see \Codeception\Module\Yii2::loadFixtures()
     * @return array
     */
    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ];
    }

    /**
     * @param FunctionalTester $I
     */
    public function checkDashboard(FunctionalTester $I)
    {
        $I->amOnPage('/site/login');
        $I->fillField('LoginForm[email]', 'erau@gmail.com');
        $I->fillField('LoginForm[password]', 'password_0');
        $I->click('login-button');

        $I->see('erau@gmail.com', 'span');
        $I->see('Ávila Inversiones', 'span');
        $I->dontSee('Incorrect email or password.', '.invalid-feedback');
        $I->dontSee('Inicia sesión', 'h5');

        $I->seeLink('Cursos');
        $I->click('Cursos');
        $I->see('Cursos', 'span');
        $I->seeCurrentUrlEquals('/index-test.php/courses/index');

        $I->seeLink('Eventos');
        $I->click('Eventos');
        $I->see('Eventos', 'span');
        $I->seeCurrentUrlEquals('/index-test.php/events/index');

        $I->seeLink('Blog');
        $I->click('Blog');
        $I->see('Blog', 'span');
        $I->seeCurrentUrlEquals('/index-test.php/blog/index');
    }
}
