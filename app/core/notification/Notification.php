<?php
    class Notification {
        public static function setNotification($message, $action, $type) {
            $_SESSION["notification"] = [
                "message" => $message,
                "action" => $action,
                "type" => $type
            ];
        }

        public static function unset() {
            unset($_SESSION["notification"]);
        }
    }
?>