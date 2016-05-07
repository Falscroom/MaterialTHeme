<?php

class Parser {
    static function get_header_image($content) {
        if($content[3] == '[') {
            preg_match('/\[header\]([^\[]+)/', $content, $matches);
            return $matches[1];
        }
        return '';
    }
    static function delete_tags($content) {
        if($content[3] == '[' || $content[0] == '[') {
            return preg_replace('/\[[^#]+../', '', $content);
        }
        return $content;
    }
    static function get_classes($content) {
        if($content[0] == '[') {
            preg_match('/\[([^#]+)/', $content, $matches);
            return $matches[1];
        }
        return '';
    }
}