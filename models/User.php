<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules(){
        return [

        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;

        //if (Yii::$app->getSession()->has('user-'.$id)) {
        //    return new self(Yii::$app->getSession()->get('user-'.$id));
        //}else{
        return static::findOne($id);
        //}
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }
        return null;*/

        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by email
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        return null;*/
        return static::findOne(['email' => $email]);
    }

    public static function findByUserphone($user_phone)
    {
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        return null;*/
        return static::findOne(['phone' => $user_phone]);
    }

    public static function findByPasswordResetToken($token)
    {
        return static::findOne(['reset_password_token' => $token]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function generateAuthKey()
    {
        $this->auth_key = md5(uniqid().\Yii::$app->params['hash']);
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function setPassword($password)
    {
        $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
        $this->password = $hash;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->updated_at = time();
            }
            if($this->isNewRecord){
                $this->created_at = time();
                $this->generateAuthKey();
            }
            return true;
        }
        return false;
    }
}
