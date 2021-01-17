<?php
session_start();

// Flash Message Helper
// Example - flash('register_success', 'You are now registered')
// Display in view - echo flash('register_success')
function flash($name = '', $message = '', $class = 'alert alert-success')
{
    if (!empty($name)) {
        if (!empty($message)) {
            if (isset($_SESSION[$name])) {
                if (!empty($_SESSION[$name])) {
                    unset($_SESSION[$name]);
                }

                if (!empty($_SESSION[$name . '_class'])) {
                    unset($_SESSION[$name . '_class']);
                }
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (empty($message) && isset($_SESSION[$name])) {
            $class = isset($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo "<div class='$class' id='msg-flash'>{$_SESSION[$name]}</div>";

            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    }

    return false;
}