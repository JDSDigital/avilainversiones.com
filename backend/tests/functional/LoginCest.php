<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class LoginCest
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
    public function loginUser(FunctionalTester $I)
    {
        $I->amOnPage('/site/login');
        $I->fillField('LoginForm[email]', 'erau@gmail.com');
        $I->fillField('LoginForm[password]', 'password_0');
        $I->click('login-button');

        $I->see('erau@gmail.com', 'span');
        $I->see('Ávila Inversiones', 'span');
        $I->dontSee('Incorrect email or password.', '.invalid-feedback');
        $I->dontSee('Inicia sesión', 'h5');
    }
}
