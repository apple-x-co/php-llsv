<?php
declare(strict_types=1);
namespace Maison\Llsv;

use PHPUnit\Framework\TestCase;

final class LlsvTest extends TestCase
{
    public function testClass() {
        $this->assertSame(get_class(new \Maison\Llsv\Llsv()), 'Maison\Llsv\Llsv');
    }
}
