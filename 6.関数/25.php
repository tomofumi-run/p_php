<?php

declare(strict_types=1);

function getAward(int $score): ?string{ // ?string(nullかstringかを返す。)
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL; //Gold Medal
echo getAward(40) . PHP_EOL; // null