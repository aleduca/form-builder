<?php

namespace app\database;

use PDO;

class Connection
{
  private static ?PDO $pdo = null;

  public static function get()
  {
    if (!self::$pdo) {
      self::$pdo = new PDO(
        'mysql:host=localhost;dbname=filament_aula_dev',
        'root',
        ''
      );
    }

    return self::$pdo;
  }
}
