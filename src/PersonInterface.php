<?php
/**
 * Created by PhpStorm.
 * User: morakot
 * Date: 24.02.19
 * Time: 16:01
 */

namespace App;


interface PersonInterface
{
public function getName();

public function setName($name, $lastname);


}