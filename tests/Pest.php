<?php

use RowBloom\RowBloom\RowBloomServiceProvider;
use RowBloom\RowBloom\Support;
use RowBloom\SpreadsheetDataLoader\SpreadsheetDataLoader;

app()->make(RowBloomServiceProvider::class)->register();
app()->make(RowBloomServiceProvider::class)->boot();

app()->make(Support::class)->registerDataLoaderDriver(SpreadsheetDataLoader::NAME, SpreadsheetDataLoader::class);
