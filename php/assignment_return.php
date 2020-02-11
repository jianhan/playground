<?php

$array = [
    "key1" => 1,
    "key2" => 2,
    "key3" => 3,
    "key4" => 4,
    "key5" => 5,
];


$ev = true;
$bool = false;

if ($ev === $bool and $found = array_search(1, $array, true)) {
    var_dump($found);
}

exit;


if ($found = array_search(1, $array, true)) {
    var_dump($found);
} else {
    var_dump(" NOT FOUND");
}


private function callingEnd() {
    // this is demo of how to use it
    $this->mapMediaIdsWithJob(
        $job,
        $job->getMediaItemIds(),
        $this->mediaItemSetterFunc('setTags', [])
    );
    $this->mapMediaIdsWithJob(
        $job,
        $job->getMediaItemIds(),
        $this->mediaItemSetterFunc('setDefaultLandingPage', null)
    );
}

private function mediaItemSetterFunc(string $setterFunc, array $args): callable {
    return function ($mediaItem) use ($args) {

        $mediaItem->{$setterFunc}($args);
        return $mediaItem;
    }
}

private function mapMediaIdsWithJob(RedisJobState $job, array $mediaItemIds, callback $func) {
    foreach ($mediaItemIds as $mediaItemId) {
        try {
            $mediaItem = $job->getMediaItem($mediaItemId);
        } catch (Exception $e) {
            continue;

        }

        $job->addMediaItem($func($mediaItem));
    }
}

