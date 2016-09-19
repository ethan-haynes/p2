<?php

final class DataMapper {
    const FILE_NAME = "./data/data.json";
    private function __construct() { }

    public static function retrieveData() {
        $fileData;
        try {
            $fileData = file_get_contents(DataMapper::FILE_NAME, true);
            $json_a = json_decode($fileData, true);
        } catch (Exception $e) {
            error_log($e);
        }

        return $json_a;
    }
}
