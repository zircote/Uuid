Uuid
====

[![Build Status](https://secure.travis-ci.org/zircote/Uuid.png)](http://travis-ci.org/zircote/Uuid)

Uuid Object

Use:
==========

```php

var_dump(\Uuid\Uuid::generate());
// string(36) "bb39ae2d-44aa-9e82-9c55-d326c4f12f56"

var_dump(\Uuid\Uuid::generate('7bda4f1062bb11df9e4d5ecec8f8ce7d'));
// string(36) "7bda4f10-62bb-11df-9e4d-5ecec8f8ce7d"

$uuid = new \Uuid\Uuid;

echo $uuid;
// 324e26b2-3378-3c56-6f72-424b3e20b106
```
