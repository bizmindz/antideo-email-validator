<?php

namespace ADEV_EmailValidation;

defined('ABSPATH') or die('Nope nope nope...');

interface EmailDataProviderInterface
{
    /**
     * @return array
     */
    public function getEmailProviders(): array;

    /**
     * @return array
     */
    public function getTopLevelDomains(): array;

    /**
     * @return array
     */
    public function getDisposableEmailProviders(): array;

    /**
     * @return array
     */
    public function getRoleEmailPrefixes(): array;
}