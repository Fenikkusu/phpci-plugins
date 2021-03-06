<?php
    /**
     * PHP7 Phalcon Core Library
     *
     * @author    Phoenix <phoenix@twistersfury.com>
     * @license   http://www.opensource.org/licenses/mit-license.html MIT License
     * @copyright 2016 Twister's Fury
     */

    namespace TwistersFury\PhpCi;

    function define($constantName, $constantValue) {
        if (!defined($constantName)) {
            \define($constantName, $constantValue);
        }
    }