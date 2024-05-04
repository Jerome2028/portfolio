<?php

/**
 * Basic Session Helper Class
 * 
 * A simple helper class for handling session consistently
 * 
 * Usage Example:
 * <?php
 * require 'path/to/util.session.php';
 * 
 * // init session
 * $s = new Session();
 * 
 * // write session
 * $s->sessionSet('foo', 'bar');
 * 
 * // get session
 * echo $s->sessionGet('foo');
 * 
 * // compare session value
 * if (!$s->sessionCompare('foo', 'baz')) {
 *     echo 'baz is not equal to: ' . $s->sessionGet('foo');
 * }
 * 
 * // unset a session
 * $s->sessionUnset('bar');
 * 
 * // destroy whole session
 * $s->sessionEnd();
 * ?>
 * 
 * Copyright (c) 2020 John Paul Burato
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @copyright  Copyright (c) 2020, John Paul Burato
 * @version    Release: v.1.1
 * @link       https://jpburato.now.sh
 * @since      Class available since Release 1.0
 */

class Session {

    /**
     * Initialize session on class __construct
     * 
     * @param String $path optional session save path
     */
    public function __construct($path = false) {
        if ($path) {
            ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . $path));
        }
        $this->sessionStart();
    }

    /**
     * Call session_start() if $_SESSION is not set
     */
    public function sessionStart() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * Get a session value based on it's key.
     * this will return to false if the session specified is not set
     * 
     * @param String $key session key to fetch: $_SESSION[$key]
     * 
     * @return Mixed $_SESSION[$key] value or false if not set
     */
    public function sessionGet($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    /**
     * Set a session
     * 
     * @param String $key session key to be set: $_SESSION[$key]
     * @param Mixed $value session value to be set
     */
    public function sessionSet($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Compare a session value 
     * 
     * @param String $key session key to be compared: $_SESSION[$key]
     * @param Mixed $expected expected value of $_SESSION[$key]
     * @param Bool $strict wether comparison must use `===` or `==`. Defaults to true
     * 
     * @return Bool returns boolean wether $expected is equal to $_SESSION[$key]
     */
    public function sessionCompare($key, $expected, $strict = true) {
        $session = $this->sessionGet($key);
        if ($strict) {
            return ($session === $expected) ? true: false;
        }
        return ($session == $expected) ? true: false;
    }

    /**
     * Unset a session by key.
     * This will return to false if the session is not set in the first place
     * 
     * @param String $key session key to unset: $_SESSION[$key]
     * 
     * @return Bool returns wether $_SESSION[$key] is unset
     */

    public function sessionUnset($key) {
        $session = $this->sessionGet($key);
        if ($session) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    /**
     * Destroys the whole session
     * 
     * @param Bool $compatibility (optional) Set wether we should use session_unset() for older deprecated code that does not use $_SESSION. defaults to false
     * @param Bool $exit (optional) call exit() function after destroy. Defaults to false
     */
    public function sessionEnd ($compatibility = false, $exit = false) {
        if ($compatibility) { session_unset(); }
        session_destroy();
        if ($exit) {
            exit();
        }
    }
}

// End of file