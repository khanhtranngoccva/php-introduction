<?php
namespace Project;
require_once(__DIR__ . "/../vendor/autoload.php");
$log = new \Monolog\Logger("main");
$log->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout'));

class Console {
    static function _get_output($data): string {
        return var_export($data, true);
    }

    public static function info($data) {
        global $log;
        $output = Console::_get_output($data);
        $log->info($output);
    }

    public static function log($data) {
        global $log;
        $output = Console::_get_output($data);
        $log->info($output);
    }

    public static function warning($data) {
        global $log;
        $output = Console::_get_output($data);
        $log->warning($output);
    }

    public static function error($data) {
        global $log;
        $output = Console::_get_output($data);
        $log->error($output);
    }
}