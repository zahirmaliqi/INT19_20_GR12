<?php

namespace Facebook\Authentication;

class AccessToken
{
    protected $value = '';

    protected $expiresAt;

    public function __construct($accessToken, $expiresAt = 0)
    {
        $this->value = $accessToken;
        if ($expiresAt) {
            $this->setExpiresAtFromTimeStamp($expiresAt);
        }
    }

   
    public function getAppSecretProof($appSecret)
    {
        return hash_hmac('sha256', $this->value, $appSecret);
    }

    /**
     * Getter for expiresAt.
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Determines whether or not this is an app access token.
     *
     * @return bool
     */
    public function isAppAccessToken()
    {
        return strpos($this->value, '|') !== false;
    }

    /**
     * Determines whether or not this is a long-lived token.
     *
     * @return bool
     */
    public function isLongLived()
    {
        if ($this->expiresAt) {
            return $this->expiresAt->getTimestamp() > time() + (60 * 60 * 2);
        }

        if ($this->isAppAccessToken()) {
            return true;
        }

        return false;
    }

    /**
     * Checks the expiration of the access token.
     *
     * @return boolean|null
     */
    public function isExpired()
    {
        if ($this->getExpiresAt() instanceof \DateTime) {
            return $this->getExpiresAt()->getTimestamp() < time();
        }

        if ($this->isAppAccessToken()) {
            return false;
        }

        return null;
    }

    /**
     * Returns the access token as a string.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the access token as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * Setter for expires_at.
     *
     * @param int $timeStamp
     */
    protected function setExpiresAtFromTimeStamp($timeStamp)
    {
        $dt = new \DateTime();
        $dt->setTimestamp($timeStamp);
        $this->expiresAt = $dt;
    }
}
