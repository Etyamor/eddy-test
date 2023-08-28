<?php

namespace SecurityAuthorData\Fields;

class FieldFactory
{
    static $fields = [];

    /**
     * Create field depend on field type (we can add more classes like Date, Checkbox, Radio, etc)
     *
     * @param $name
     * @param $args
     * @param $type
     * @return void
     */
    public static function createField($name, $args, $type): void
    {
        switch ($type) {
            case "input":
                self::$fields[] = new Input($name, $args);
                break;
            case "textarea":
                self::$fields[] = new Textarea($name, $args);
                break;
        }
    }

    /**
     * get full HTML of all fields
     *
     * @return string
     */
    public static function getHtml(): string
    {
        $fields = self::$fields;
        self::clear();
        return implode('', $fields);
    }

    /**
     * Clear static variable for future using (another widgets)
     *
     * @return void
     */
    private static function clear(): void
    {
        self::$fields = [];
    }
}