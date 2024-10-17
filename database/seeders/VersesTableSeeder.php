<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Verse;

class VersesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array containing the months' data
        $months = [
            'january' =>  [
                [
                    "day" => 1,
                    "morning" => "Matthew 1",
                    "evening" => "Genesis 1, 2, 3",
                    "mos" => 1
                ],
                [
                    "day" => 2,
                    "morning" => "Matthew 2",
                    "evening" => "Genesis 4, 5, 6",
                    "mos" => 1
                ],
                [
                    "day" => 3,
                    "morning" => "Matthew 3",
                    "evening" => "Genesis 7, 8, 9",
                    "mos" => 1
                ],
                [
                    "day" => 4,
                    "morning" => "Matthew 4",
                    "evening" => "Genesis 10, 11, 12",
                    "mos" => 1
                ],
                [
                    "day" => 5,
                    "morning" => "Matthew 5:1 - 26",
                    "evening" => "Genesis 13, 14, 15",
                    "mos" => 1
                ],
                [
                    "day" => 6,
                    "morning" => "Matthew 5:27 - 48",
                    "evening" => "Genesis 16, 17",
                    "mos" => 1
                ],
                [
                    "day" => 7,
                    "morning" => "Matthew 6:1 - 18",
                    "evening" => "Genesis 18, 19",
                    "mos" => 1
                ],
                [
                    "day" => 8,
                    "morning" => "Matthew 6:19 - 34",
                    "evening" => "Genesis 20, 21, 22",
                    "mos" => 1
                ],
                [
                    "day" => 9,
                    "morning" => "Matthew 7",
                    "evening" => "Genesis 23, 24",
                    "mos" => 1
                ],
                [
                    "day" => 10,
                    "morning" => "Matthew 8:1 - 17",
                    "evening" => "Genesis 25, 26",
                    "mos" => 1
                ],
                [
                    "day" => 11,
                    "morning" => "Matthew 8:18 - 34",
                    "evening" => "Genesis 27, 28",
                    "mos" => 1
                ],
                [
                    "day" => 12,
                    "morning" => "Matthew 9:1 - 17",
                    "evening" => "Genesis 29, 30",
                    "mos" => 1
                ],
                [
                    "day" => 13,
                    "morning" => "Matthew 9:18 - 38",
                    "evening" => "Genesis 31, 32",
                    "mos" => 1
                ],
                [
                    "day" => 14,
                    "morning" => "Matthew 10:1 - 24",
                    "evening" => "Genesis 33, 34, 35",
                    "mos" => 1
                ],
                [
                    "day" => 15,
                    "morning" => "Matthew 10:24 - 42",
                    "evening" => "Genesis 36, 37, 38",
                    "mos" => 1
                ],
                [
                    "day" => 16,
                    "morning" => "Matthew 11",
                    "evening" => "Genesis 39, 40",
                    "mos" => 1
                ],
                [
                    "day" => 17,
                    "morning" => "Matthew 12:1 - 21",
                    "evening" => "Genesis 41, 42",
                    "mos" => 1
                ],
                [
                    "day" => 18,
                    "morning" => "Matthew 12:22 - 50",
                    "evening" => "Genesis 43, 44, 45",
                    "mos" => 1
                ],
                [
                    "day" => 19,
                    "morning" => "Matthew 13:1 - 30",
                    "evening" => "Genesis 46, 47, 48",
                    "mos" => 1
                ],
                [
                    "day" => 20,
                    "morning" => "Matthew 13:31 - 58",
                    "evening" => "Genesis 49, 50",
                    "mos" => 1
                ],
                [
                    "day" => 21,
                    "morning" => "Matthew 14:1 - 21",
                    "evening" => "Exodus 1, 2, 3",
                    "mos" => 1
                ],
                [
                    "day" => 22,
                    "morning" => "Matthew 14:22 - 50",
                    "evening" => "Exodus 4, 5, 6",
                    "mos" => 1
                ],
                [
                    "day" => 23,
                    "morning" => "Matthew 15:1 - 20",
                    "evening" => "Exodus 7, 8",
                    "mos" => 1
                ],
                [
                    "day" => 24,
                    "morning" => "Matthew 15:21 - 39",
                    "evening" => "Exodus 9, 10, 11",
                    "mos" => 1
                ],
                [
                    "day" => 25,
                    "morning" => "Matthew 16",
                    "evening" => "Exodus 12, 13",
                    "mos" => 1
                ],
                [
                    "day" => 26,
                    "morning" => "Matthew 17",
                    "evening" => "Exodus 14, 15",
                    "mos" => 1
                ],
                [
                    "day" => 27,
                    "morning" => "Matthew 18:1 - 20",
                    "evening" => "Exodus 16, 17, 18",
                    "mos" => 1
                ],
                [
                    "day" => 28,
                    "morning" => "Matthew 18:21 - 35",
                    "evening" => "Exodus 19, 20",
                    "mos" => 1
                ],
                [
                    "day" => 29,
                    "morning" => "Matthew 19",
                    "evening" => "Exodus 21, 22",
                    "mos" => 1
                ],
                [
                    "day" => 30,
                    "morning" => "Matthew 20:1 - 16",
                    "evening" => "Exodus 23, 24",
                    "mos" => 1
                ],
                [
                    "day" => 31,
                    "morning" => "Matthew 20:17 - 35",
                    "evening" => "Exodus 25, 26",
                    "mos" => 1
                ]
            ],
            'february' => [
                [
                    "day" => 1,
                    "morning" => "Matthew 21:1 - 22",
                    "evening" => "Exodus 27, 28",
                    "mos" => 2
                ],
                [
                    "day" => 2,
                    "morning" => "Matthew 21:23 - 46",
                    "evening" => "Exodus 29, 30",
                    "mos" => 2
                ],
                [
                    "day" => 3,
                    "morning" => "Matthew 22:1 - 22",
                    "evening" => "Exodus 31, 32, 33",
                    "mos" => 2
                ],
                [
                    "day" => 4,
                    "morning" => "Matthew 22:23 - 46",
                    "evening" => "Exodus 34, 35",
                    "mos" => 2
                ],
                [
                    "day" => 5,
                    "morning" => "Matthew 23:1 - 28",
                    "evening" => "Exodus 36, 37, 38",
                    "mos" => 2
                ],
                [
                    "day" => 6,
                    "morning" => "Matthew 23:29 - 39",
                    "evening" => "Exodus 39, 40",
                    "mos" => 2
                ],
                [
                    "day" => 7,
                    "morning" => "Matthew 24:1 - 28",
                    "evening" => "Leviticus 1, 2, 3",
                    "mos" => 2
                ],
                [
                    "day" => 8,
                    "morning" => "Matthew 24:29 - 51",
                    "evening" => "Leviticus 4, 5",
                    "mos" => 2
                ],
                [
                    "day" => 9,
                    "morning" => "Matthew 25:1 - 30",
                    "evening" => "Leviticus 6, 7",
                    "mos" => 2
                ],
                [
                    "day" => 10,
                    "morning" => "Matthew 25:31 - 46",
                    "evening" => "Leviticus 8, 9, 10",
                    "mos" => 2
                ],
                [
                    "day" => 11,
                    "morning" => "Matthew 26:1 - 25",
                    "evening" => "Leviticus 11, 12",
                    "mos" => 2
                ],
                [
                    "day" => 12,
                    "morning" => "Matthew 26:26 - 56",
                    "evening" => "Leviticus 13",
                    "mos" => 2
                ],
                [
                    "day" => 13,
                    "morning" => "Matthew 26:57 - 75",
                    "evening" => "Leviticus 14",
                    "mos" => 2
                ],
                [
                    "day" => 14,
                    "morning" => "Matthew 27:1 - 26",
                    "evening" => "Leviticus 15, 16",
                    "mos" => 2
                ],
                [
                    "day" => 15,
                    "morning" => "Matthew 27:27 - 44",
                    "evening" => "Leviticus 17, 18",
                    "mos" => 2
                ],
                [
                    "day" => 16,
                    "morning" => "Matthew 27:45 - 66",
                    "evening" => "Leviticus 19, 20",
                    "mos" => 2
                ],
                [
                    "day" => 17,
                    "morning" => "Matthew 28",
                    "evening" => "Leviticus 21, 22",
                    "mos" => 2
                ],
                [
                    "day" => 18,
                    "morning" => "Mark 1:1 - 20",
                    "evening" => "Leviticus 23, 24",
                    "mos" => 2
                ],
                [
                    "day" => 19,
                    "morning" => "Mark 1:21 - 45",
                    "evening" => "Leviticus 25",
                    "mos" => 2
                ],
                [
                    "day" => 20,
                    "morning" => "Mark 2",
                    "evening" => "Leviticus 26, 27",
                    "mos" => 2
                ],
                [
                    "day" => 21,
                    "morning" => "Mark 3:1 - 19",
                    "evening" => "Numbers 1, 2",
                    "mos" => 2
                ],
                [
                    "day" => 22,
                    "morning" => "Mark 3:20 - 35",
                    "evening" => "Numbers 3, 4",
                    "mos" => 2
                ],
                [
                    "day" => 23,
                    "morning" => "Mark 4:1 - 20",
                    "evening" => "Numbers 5, 6",
                    "mos" => 2
                ],
                [
                    "day" => 24,
                    "morning" => "Mark 4:21 - 41",
                    "evening" => "Numbers 7, 8",
                    "mos" => 2
                ],
                [
                    "day" => 25,
                    "morning" => "Mark 5:1 - 20",
                    "evening" => "Leviticus 9, 10, 11",
                    "mos" => 2
                ],
                [
                    "day" => 26,
                    "morning" => "Mark 5:21 - 43",
                    "evening" => "Numbers 12, 13, 14",
                    "mos" => 2
                ],
                [
                    "day" => 27,
                    "morning" => "Mark 6:1 - 29",
                    "evening" => "Numbers 15, 16",
                    "mos" => 2
                ],
                [
                    "day" => 28,
                    "morning" => "Mark 6:30 - 56",
                    "evening" => "Numbers 17, 18, 19",
                    "mos" => 2
                ],
                [
                    "day" => 29,
                    "morning" => "Mark 7:1 - 13",
                    "evening" => "Numbers 20, 21, 22",
                    "mos" => 2
                ]
            ],
            'march' =>  [
                [
                    "day" => 1,
                    "morning" => "Mark 7:14 - 37",
                    "evening" => "Numbers 23, 24, 25",
                    "mos" => 3
                ],
                [
                    "day" => 2,
                    "morning" => "Mark 8:1 - 21",
                    "evening" => "Numbers 26, 27",
                    "mos" => 3
                ],
                [
                    "day" => 3,
                    "morning" => "Mark 8:22 - 38",
                    "evening" => "Numbers 28, 29, 30",
                    "mos" => 3
                ],
                [
                    "day" => 4,
                    "morning" => "Mark 9:1 - 29",
                    "evening" => "Numbers 31, 32, 33",
                    "mos" => 3
                ],
                [
                    "day" => 5,
                    "morning" => "Mark 9:30 - 50",
                    "evening" => "Numbers 34, 35, 36",
                    "mos" => 3
                ],
                [
                    "day" => 6,
                    "morning" => "Mark 10:1 - 32",
                    "evening" => "Deuteronomy 1, 2",
                    "mos" => 3
                ],
                [
                    "day" => 7,
                    "morning" => "Mark 10:33 - 52",
                    "evening" => "Deuteronomy 3, 4",
                    "mos" => 3
                ],
                [
                    "day" => 8,
                    "morning" => "Mark 11:1 - 19",
                    "evening" => "Deuteronomy 5, 6, 7",
                    "mos" => 3
                ],
                [
                    "day" => 9,
                    "morning" => "Mark 11:20 - 33",
                    "evening" => "Deuteronomy 8, 9, 10",
                    "mos" => 3
                ],
                [
                    "day" => 10,
                    "morning" => "Mark 12:1 - 27",
                    "evening" => "Deuteronomy 11, 12, 13",
                    "mos" => 3
                ],
                [
                    "day" => 11,
                    "morning" => "Mark 12:28 - 44",
                    "evening" => "Deuteronomy 14, 15, 16",
                    "mos" => 3
                ],
                [
                    "day" => 12,
                    "morning" => "Mark 13:1 - 23",
                    "evening" => "Deuteronomy 17, 18, 19",
                    "mos" => 3
                ],
                [
                    "day" => 13,
                    "morning" => "Mark 13:24 - 37",
                    "evening" => "Deuteronomy 20, 21, 22",
                    "mos" => 3
                ],
                [
                    "day" => 14,
                    "morning" => "Mark 14:1 - 26",
                    "evening" => "Deuteronomy 23, 24, 25",
                    "mos" => 3
                ],
                [
                    "day" => 15,
                    "morning" => "Mark 14:27 - 52",
                    "evening" => "Deuteronomy 26, 27",
                    "mos" => 3
                ],
                [
                    "day" => 16,
                    "morning" => "Mark 14:53 - 72",
                    "evening" => "Deuteronomy 28, 29",
                    "mos" => 3
                ],
                [
                    "day" => 17,
                    "morning" => "Mark 15:1 - 32",
                    "evening" => "Deuteronomy 30, 31",
                    "mos" => 3
                ],
                [
                    "day" => 18,
                    "morning" => "Mark 15:33 - 47",
                    "evening" => "Deuteronomy 32, 33, 34",
                    "mos" => 3
                ],
                [
                    "day" => 19,
                    "morning" => "Mark 16",
                    "evening" => "Joshua 1, 2, 3",
                    "mos" => 3
                ],
                [
                    "day" => 20,
                    "morning" => "Luke 1:1 - 25",
                    "evening" => "Joshua 4, 5, 6",
                    "mos" => 3
                ],
                [
                    "day" => 21,
                    "morning" => "Luke 1:26 - 38",
                    "evening" => "Joshua 7, 8, 9",
                    "mos" => 3
                ],
                [
                    "day" => 22,
                    "morning" => "Luke 1:39 - 56",
                    "evening" => "Joshua 10, 11, 12",
                    "mos" => 3
                ],
                [
                    "day" => 23,
                    "morning" => "Luke 1:57 - 80",
                    "evening" => "Joshua 13, 14, 15",
                    "mos" => 3
                ],
                [
                    "day" => 24,
                    "morning" => "Luke 2:1 - 21",
                    "evening" => "Joshua 16, 17, 18",
                    "mos" => 3
                ],
                [
                    "day" => 25,
                    "morning" => "Luke 2:22 - 52",
                    "evening" => "Joshua 19, 20, 21",
                    "mos" => 3
                ],
                [
                    "day" => 26,
                    "morning" => "Luke 3",
                    "evening" => "Joshua 22, 23, 24",
                    "mos" => 3
                ],
                [
                    "day" => 27,
                    "morning" => "Luke 4:1 - 30",
                    "evening" => "Judges 1, 2, 3",
                    "mos" => 3
                ],
                [
                    "day" => 28,
                    "morning" => "Luke 4:31 - 44",
                    "evening" => "Judges 4, 5, 6",
                    "mos" => 3
                ],
                [
                    "day" => 29,
                    "morning" => "Luke 5:1 - 16",
                    "evening" => "Judges 7, 8",
                    "mos" => 3
                ],
                [
                    "day" => 30,
                    "morning" => "Luke 5:17 - 39",
                    "evening" => "Judges 9, 10",
                    "mos" => 3
                ],
                [
                    "day" => 31,
                    "morning" => "Luke 6:1- 26",
                    "evening" => "Judges 11, 12",
                    "mos" => 3
                ]
            ],
            'april' => [
                [
                    "day" => 1,
                    "morning" => "Mark 7:14 - 37",
                    "evening" => "Numbers 23, 24, 25",
                    "mos" => 3
                ],
                [
                    "day" => 2,
                    "morning" => "Mark 8:1 - 21",
                    "evening" => "Numbers 26, 27",
                    "mos" => 3
                ],
                [
                    "day" => 3,
                    "morning" => "Mark 8:22 - 38",
                    "evening" => "Numbers 28, 29, 30",
                    "mos" => 3
                ],
                [
                    "day" => 4,
                    "morning" => "Mark 9:1 - 29",
                    "evening" => "Numbers 31, 32, 33",
                    "mos" => 3
                ],
                [
                    "day" => 5,
                    "morning" => "Mark 9:30 - 50",
                    "evening" => "Numbers 34, 35, 36",
                    "mos" => 3
                ],
                [
                    "day" => 6,
                    "morning" => "Mark 10:1 - 32",
                    "evening" => "Deuteronomy 1, 2",
                    "mos" => 3
                ],
                [
                    "day" => 7,
                    "morning" => "Mark 10:33 - 52",
                    "evening" => "Deuteronomy 3, 4",
                    "mos" => 3
                ],
                [
                    "day" => 8,
                    "morning" => "Mark 11:1 - 19",
                    "evening" => "Deuteronomy 5, 6, 7",
                    "mos" => 3
                ],
                [
                    "day" => 9,
                    "morning" => "Mark 11:20 - 33",
                    "evening" => "Deuteronomy 8, 9, 10",
                    "mos" => 3
                ],
                [
                    "day" => 10,
                    "morning" => "Mark 12:1 - 27",
                    "evening" => "Deuteronomy 11, 12, 13",
                    "mos" => 3
                ],
                [
                    "day" => 11,
                    "morning" => "Mark 12:28 - 44",
                    "evening" => "Deuteronomy 14, 15, 16",
                    "mos" => 3
                ],
                [
                    "day" => 12,
                    "morning" => "Mark 13:1 - 23",
                    "evening" => "Deuteronomy 17, 18, 19",
                    "mos" => 3
                ],
                [
                    "day" => 13,
                    "morning" => "Mark 13:24 - 37",
                    "evening" => "Deuteronomy 20, 21, 22",
                    "mos" => 3
                ],
                [
                    "day" => 14,
                    "morning" => "Mark 14:1 - 26",
                    "evening" => "Deuteronomy 23, 24, 25",
                    "mos" => 3
                ],
                [
                    "day" => 15,
                    "morning" => "Mark 14:27 - 52",
                    "evening" => "Deuteronomy 26, 27",
                    "mos" => 3
                ],
                [
                    "day" => 16,
                    "morning" => "Mark 14:53 - 72",
                    "evening" => "Deuteronomy 28, 29",
                    "mos" => 3
                ],
                [
                    "day" => 17,
                    "morning" => "Mark 15:1 - 32",
                    "evening" => "Deuteronomy 30, 31",
                    "mos" => 3
                ],
                [
                    "day" => 18,
                    "morning" => "Mark 15:33 - 47",
                    "evening" => "Deuteronomy 32, 33, 34",
                    "mos" => 3
                ],
                [
                    "day" => 19,
                    "morning" => "Mark 16",
                    "evening" => "Joshua 1, 2, 3",
                    "mos" => 3
                ],
                [
                    "day" => 20,
                    "morning" => "Luke 1:1 - 25",
                    "evening" => "Joshua 4, 5, 6",
                    "mos" => 3
                ],
                [
                    "day" => 21,
                    "morning" => "Luke 1:26 - 38",
                    "evening" => "Joshua 7, 8, 9",
                    "mos" => 3
                ],
                [
                    "day" => 22,
                    "morning" => "Luke 1:39 - 56",
                    "evening" => "Joshua 10, 11, 12",
                    "mos" => 3
                ],
                [
                    "day" => 23,
                    "morning" => "Luke 1:57 - 80",
                    "evening" => "Joshua 13, 14, 15",
                    "mos" => 3
                ],
                [
                    "day" => 24,
                    "morning" => "Luke 2:1 - 21",
                    "evening" => "Joshua 16, 17, 18",
                    "mos" => 3
                ],
                [
                    "day" => 25,
                    "morning" => "Luke 2:22 - 52",
                    "evening" => "Joshua 19, 20, 21",
                    "mos" => 3
                ],
                [
                    "day" => 26,
                    "morning" => "Luke 3",
                    "evening" => "Joshua 22, 23, 24",
                    "mos" => 3
                ],
                [
                    "day" => 27,
                    "morning" => "Luke 4:1 - 30",
                    "evening" => "Judges 1, 2, 3",
                    "mos" => 3
                ],
                [
                    "day" => 28,
                    "morning" => "Luke 4:31 - 44",
                    "evening" => "Judges 4, 5, 6",
                    "mos" => 3
                ],
                [
                    "day" => 29,
                    "morning" => "Luke 5:1 - 16",
                    "evening" => "Judges 7, 8",
                    "mos" => 3
                ],
                [
                    "day" => 30,
                    "morning" => "Luke 5:17 - 39",
                    "evening" => "Judges 9, 10",
                    "mos" => 3
                ],
                [
                    "day" => 31,
                    "morning" => "Luke 6:1- 26",
                    "evening" => "Judges 11, 12",
                    "mos" => 3
                ]
            ],
            'may' =>  [
                [
                    "day" => 1,
                    "morning" => "Luke 21:20 - 38",
                    "evening" => "1 Kings 10, 11",
                    "mos" => 5
                ],
                [
                    "day" => 2,
                    "morning" => "Luke 22:1 - 23",
                    "evening" => "1 Kings 12, 13",
                    "mos" => 5
                ],
                [
                    "day" => 3,
                    "morning" => "Luke 22:24 - 46",
                    "evening" => "1 Kings 14, 15",
                    "mos" => 5
                ],
                [
                    "day" => 4,
                    "morning" => "Luke 22:47 - 71",
                    "evening" => "1 Kings 16, 17, 18",
                    "mos" => 5
                ],
                [
                    "day" => 5,
                    "morning" => "Luke 23:1 - 25",
                    "evening" => "1 Kings 19, 20",
                    "mos" => 5
                ],
                [
                    "day" => 6,
                    "morning" => "Luke 23:26 - 56",
                    "evening" => "1 Kings 21, 22",
                    "mos" => 5
                ],
                [
                    "day" => 7,
                    "morning" => "Luke 24:1 - 35",
                    "evening" => "2 Kings 1, 2, 3",
                    "mos" => 5
                ],
                [
                    "day" => 8,
                    "morning" => "Luke 24:36 - 53",
                    "evening" => "2 Kings 4, 5, 6",
                    "mos" => 5
                ],
                [
                    "day" => 9,
                    "morning" => "John 1:1 - 28",
                    "evening" => "2 Kings 7, 8, 9",
                    "mos" => 5
                ],
                [
                    "day" => 10,
                    "morning" => "John 1:29 - 51",
                    "evening" => "2 Kings 10, 11, 12",
                    "mos" => 5
                ],
                [
                    "day" => 11,
                    "morning" => "John 2",
                    "evening" => "2 Kings 13, 14",
                    "mos" => 5
                ],
                [
                    "day" => 12,
                    "morning" => "John 3:1 - 21",
                    "evening" => "2 Kings 15, 16",
                    "mos" => 5
                ],
                [
                    "day" => 13,
                    "morning" => "John 3:22 - 38",
                    "evening" => "2 Kings 17, 18",
                    "mos" => 5
                ],
                [
                    "day" => 14,
                    "morning" => "John 4:1 - 30",
                    "evening" => "2 Kings 19, 20, 21",
                    "mos" => 5
                ],
                [
                    "day" => 15,
                    "morning" => "John 4:31 - 54",
                    "evening" => "2 Kings 22, 23",
                    "mos" => 5
                ],
                [
                    "day" => 16,
                    "morning" => "John 5:1 - 28",
                    "evening" => "2 Kings 24, 25",
                    "mos" => 5
                ],
                [
                    "day" => 17,
                    "morning" => "John 5:29 - 47",
                    "evening" => "1 Chronicles 1, 2, 3",
                    "mos" => 5
                ],
                [
                    "day" => 18,
                    "morning" => "John 6:1 - 24",
                    "evening" => "1 Chronicles 4, 5, 6",
                    "mos" => 5
                ],
                [
                    "day" => 19,
                    "morning" => "John 6:25 - 59",
                    "evening" => "1 Chronicles 7, 8, 9",
                    "mos" => 5
                ],
                [
                    "day" => 20,
                    "morning" => "John 6:60 - 71",
                    "evening" => "1 Chronicles 10, 11, 12",
                    "mos" => 5
                ],
                [
                    "day" => 21,
                    "morning" => "John 7:1 - 24",
                    "evening" => "1 Chronicles 13, 14, 15",
                    "mos" => 5
                ],
                [
                    "day" => 22,
                    "morning" => "John 7:25 - 52",
                    "evening" => "1 Chronicles 16, 17, 18",
                    "mos" => 5
                ],
                [
                    "day" => 23,
                    "morning" => "John 8:1 - 30",
                    "evening" => "1 Chronicles 19, 20, 21",
                    "mos" => 5
                ],
                [
                    "day" => 24,
                    "morning" => "John 8:31 - 59",
                    "evening" => "1 Chronicles 22, 23, 24",
                    "mos" => 5
                ],
                [
                    "day" => 25,
                    "morning" => "John 9:1 - 12",
                    "evening" => "1 Chronicles 25, 26, 27",
                    "mos" => 5
                ],
                [
                    "day" => 26,
                    "morning" => "John 9:13 - 41",
                    "evening" => "1 Chronicles 28, 29",
                    "mos" => 5
                ],
                [
                    "day" => 27,
                    "morning" => "John 10:1 - 21",
                    "evening" => "2 Chronicles 1, 2, 3",
                    "mos" => 5
                ],
                [
                    "day" => 28,
                    "morning" => "John 10:22 - 42",
                    "evening" => "2 Chronicles 4, 5, 6",
                    "mos" => 5
                ],
                [
                    "day" => 29,
                    "morning" => "John 11:1 - 27",
                    "evening" => "2 Chronicles 7, 8, 9",
                    "mos" => 5
                ],
                [
                    "day" => 30,
                    "morning" => "John 11:28 - 57",
                    "evening" => "2 Chronicles 10, 11, 12",
                    "mos" => 5
                ],
                [
                    "day" => 31,
                    "morning" => "John 12:1- 26",
                    "evening" => "2 Chronicles 13, 14",
                    "mos" => 5
                ]
            ],
            'june' =>  [
                [
                    "day" => 1,
                    "morning" => "John 12:27 - 50",
                    "evening" => "2 Chronicles 15, 16",
                    "mos" => 6
                ],
                [
                    "day" => 2,
                    "morning" => "John 13:1 - 20",
                    "evening" => "2 Chronicles 17, 18",
                    "mos" => 6
                ],
                [
                    "day" => 3,
                    "morning" => "John 13:21 - 38",
                    "evening" => "2 Chronicles 19 20",
                    "mos" => 6
                ],
                [
                    "day" => 4,
                    "morning" => "John 14",
                    "evening" => "2 Chronicles 21, 122",
                    "mos" => 6
                ],
                [
                    "day" => 5,
                    "morning" => "John 15",
                    "evening" => "2 Chronicles 23, 24",
                    "mos" => 6
                ],
                [
                    "day" => 6,
                    "morning" => "John 16",
                    "evening" => "2 Chronicles 25, 26, 27",
                    "mos" => 6
                ],
                [
                    "day" => 7,
                    "morning" => "John 17",
                    "evening" => "2 Chronicles 28, 29",
                    "mos" => 6
                ],
                [
                    "day" => 8,
                    "morning" => "John 18:1 - 18",
                    "evening" => "2 Chronicles 30, 31",
                    "mos" => 6
                ],
                [
                    "day" => 9,
                    "morning" => "John 18:19 - 40",
                    "evening" => "2 Chronicles 32, 33",
                    "mos" => 6
                ],
                [
                    "day" => 10,
                    "morning" => "John 19:1 - 27",
                    "evening" => "2 Chronicles 34, 35, 36",
                    "mos" => 6
                ],
                [
                    "day" => 11,
                    "morning" => "John 19:28 - 42",
                    "evening" => "Ezra 1, 2",
                    "mos" => 6
                ],
                [
                    "day" => 12,
                    "morning" => "John 20",
                    "evening" => "Ezra 3, 4, 5",
                    "mos" => 6
                ],
                [
                    "day" => 13,
                    "morning" => "John 21",
                    "evening" => "Ezra 6, 7, 8",
                    "mos" => 6
                ],
                [
                    "day" => 14,
                    "morning" => "Acts 1",
                    "evening" => "Ezra 9, 10",
                    "mos" => 6
                ],
                [
                    "day" => 15,
                    "morning" => "Acts 2:1 - 21",
                    "evening" => "Nehemiah 1, 2, 3",
                    "mos" => 6
                ],
                [
                    "day" => 16,
                    "morning" => "Acts 2:22 - 47",
                    "evening" => "Nehemiah 4, 5, 6",
                    "mos" => 6
                ],
                [
                    "day" => 17,
                    "morning" => "Acts 3",
                    "evening" => "Nehemiah1, 7, 8, 9",
                    "mos" => 6
                ],
                [
                    "day" => 18,
                    "morning" => "Acts 4:1 - 22",
                    "evening" => "Nehemiah 10, 11",
                    "mos" => 6
                ],
                [
                    "day" => 19,
                    "morning" => "Acts 4:23 - 39",
                    "evening" => "Nehemiah 12, 13",
                    "mos" => 6
                ],
                [
                    "day" => 20,
                    "morning" => "Acts 5:1 - 16",
                    "evening" => "Esther 1, 2",
                    "mos" => 6
                ],
                [
                    "day" => 21,
                    "morning" => "Acts 5:17 - 42",
                    "evening" => "Esther 3, 4, 5",
                    "mos" => 6
                ],
                [
                    "day" => 22,
                    "morning" => "Acts 6",
                    "evening" => "Esther 6, 7, 8",
                    "mos" => 6
                ],
                [
                    "day" => 23,
                    "morning" => "Acts 7:1 - 22",
                    "evening" => "Esther 9, 10",
                    "mos" => 6
                ],
                [
                    "day" => 24,
                    "morning" => "Acts 7:23 - 43",
                    "evening" => "Job 1, 2",
                    "mos" => 6
                ],
                [
                    "day" => 25,
                    "morning" => "Acts 7:44 - 60",
                    "evening" => "Job 3, 4",
                    "mos" => 6
                ],
                [
                    "day" => 26,
                    "morning" => "Acts 8:1 - 25",
                    "evening" => "Job 5, 6, 7",
                    "mos" => 6
                ],
                [
                    "day" => 27,
                    "morning" => "Acts 8:26 - 40",
                    "evening" => "Job 8, 9, 10",
                    "mos" => 6
                ],
                [
                    "day" => 28,
                    "morning" => "Acts 9:1 - 25",
                    "evening" => "Job 11, 12, 13",
                    "mos" => 6
                ],
                [
                    "day" => 29,
                    "morning" => "Acts 9:26 - 43",
                    "evening" => "Job 14, 15, 16",
                    "mos" => 6
                ],
                [
                    "day" => 30,
                    "morning" => "Acts 10:1 - 23",
                    "evening" => "Job 17, 18, 19",
                    "mos" => 6
                ]
            ],
            'july' => [
                [
                    "day" => 1,
                    "morning" => "Acts 10:24 - 48",
                    "evening" => "Job 20, 21",
                    "mos" => 7
                ],
                [
                    "day" => 2,
                    "morning" => "Acts 11",
                    "evening" => "Job 22, 23, 24",
                    "mos" => 7
                ],
                [
                    "day" => 3,
                    "morning" => "Acts 12",
                    "evening" => "Job 25, 26, 27",
                    "mos" => 7
                ],
                [
                    "day" => 4,
                    "morning" => "Acts 13:1 - 25",
                    "evening" => "Job 28, 29",
                    "mos" => 7
                ],
                [
                    "day" => 5,
                    "morning" => "Acts 13:26 - 52",
                    "evening" => "Job 30, 31",
                    "mos" => 7
                ],
                [
                    "day" => 6,
                    "morning" => "Acts 14",
                    "evening" => "Job 32, 33",
                    "mos" => 7
                ],
                [
                    "day" => 7,
                    "morning" => "Acts 15:1 - 21",
                    "evening" => "Job 34, 35",
                    "mos" => 7
                ],
                [
                    "day" => 8,
                    "morning" => "Acts 15:26 - 41",
                    "evening" => "Job 36, 37",
                    "mos" => 7
                ],
                [
                    "day" => 9,
                    "morning" => "Acts 16:1 - 24",
                    "evening" => "Job 38, 39, 40",
                    "mos" => 7
                ],
                [
                    "day" => 10,
                    "morning" => "Acts 16:25 - 40",
                    "evening" => "Job 41, 42",
                    "mos" => 7
                ],
                [
                    "day" => 11,
                    "morning" => "Acts 17:1 - 16",
                    "evening" => "Psalms 1, 2, 3",
                    "mos" => 7
                ],
                [
                    "day" => 12,
                    "morning" => "Acts 17:17 - 34",
                    "evening" => "Psalms 4, 5, 6",
                    "mos" => 7
                ],
                [
                    "day" => 13,
                    "morning" => "Acts 18",
                    "evening" => "Psalms 7, 8, 9",
                    "mos" => 7
                ],
                [
                    "day" => 14,
                    "morning" => "Acts 19:1 - 20",
                    "evening" => "Psalms 10, 11, 12",
                    "mos" => 7
                ],
                [
                    "day" => 15,
                    "morning" => "Acts 19:21 - 41",
                    "evening" => "Psalms 13, 14, 15",
                    "mos" => 7
                ],
                [
                    "day" => 16,
                    "morning" => "Acts 20:1 - 16",
                    "evening" => "Psalms 16, 17",
                    "mos" => 7
                ],
                [
                    "day" => 17,
                    "morning" => "Acts 20:17 - 38",
                    "evening" => "Psalms 18, 19",
                    "mos" => 7
                ],
                [
                    "day" => 18,
                    "morning" => "Acts 21:1 - 16",
                    "evening" => "Psalms 20, 21, 22",
                    "mos" => 7
                ],
                [
                    "day" => 19,
                    "morning" => "Acts 21:17 - 40",
                    "evening" => "Psalms 23, 24, 25",
                    "mos" => 7
                ],
                [
                    "day" => 20,
                    "morning" => "Acts 22",
                    "evening" => "Psalms 26, 27, 28",
                    "mos" => 7
                ],
                [
                    "day" => 21,
                    "morning" => "Acts 23:1 - 22",
                    "evening" => "Psalms 29, 30",
                    "mos" => 7
                ],
                [
                    "day" => 22,
                    "morning" => "Acts 24:23 - 35",
                    "evening" => "Psalms 31, 32",
                    "mos" => 7
                ],
                [
                    "day" => 23,
                    "morning" => "Acts 24",
                    "evening" => "Psalms 33, 34",
                    "mos" => 7
                ],
                [
                    "day" => 24,
                    "morning" => "Acts 25",
                    "evening" => "Psalms 35, 36",
                    "mos" => 7
                ],
                [
                    "day" => 25,
                    "morning" => "Acts 26",
                    "evening" => "Psalms 37, 38, 39",
                    "mos" => 7
                ],
                [
                    "day" => 26,
                    "morning" => "Acts 27:1 - 26",
                    "evening" => "Psalms 40, 41, 42",
                    "mos" => 7
                ],
                [
                    "day" => 27,
                    "morning" => "Acts 27:27 - 44",
                    "evening" => "Psalms 43, 44, 45",
                    "mos" => 7
                ],
                [
                    "day" => 28,
                    "morning" => "Acts 28",
                    "evening" => "Psalms 46, 47, 48",
                    "mos" => 7
                ],
                [
                    "day" => 29,
                    "morning" => "Romans 1",
                    "evening" => "Psalms 49, 50",
                    "mos" => 7
                ],
                [
                    "day" => 30,
                    "morning" => "Romans 2",
                    "evening" => "Psalms 51, 52, 53",
                    "mos" => 7
                ],
                [
                    "day" => 31,
                    "morning" => "Romans 3",
                    "evening" => "Psalms 54, 55, 56",
                    "mos" => 7
                ]
            ],
            'august' =>  [
   [
         "day" => 1, 
         "morning" => "Romans 4", 
         "evening" => "Psalms 57, 58, 59", 
         "mos" => 8 
      ], 
   [
            "day" => 2, 
            "morning" => "Romans 5", 
            "evening" => "Psalms 60, 61, 62", 
            "mos" => 8 
         ], 
   [
               "day" => 3, 
               "morning" => "Romans 6", 
               "evening" => "Psalms 63, 64, 65", 
               "mos" => 8 
            ], 
   [
                  "day" => 4, 
                  "morning" => "Romans 7", 
                  "evening" => "Psalms 66, 67", 
                  "mos" => 8 
               ], 
   [
                     "day" => 5, 
                     "morning" => "Romans 8:1 - 17", 
                     "evening" => "Psalms 68, 69", 
                     "mos" => 8 
                  ], 
   [
                        "day" => 6, 
                        "morning" => "Romans 8:18 - 39", 
                        "evening" => "Psalms 70, 71", 
                        "mos" => 8 
                     ], 
   [
                           "day" => 7, 
                           "morning" => "Romans 9:1 - 18", 
                           "evening" => "Psalms 72, 73", 
                           "mos" => 8 
                        ], 
   [
                              "day" => 8, 
                              "morning" => "Romans 9:19 - 33", 
                              "evening" => "Psalms 74, 75, 76", 
                              "mos" => 8 
                           ], 
   [
                                 "day" => 9, 
                                 "morning" => "Romans 10", 
                                 "evening" => "Psalms 77, 78", 
                                 "mos" => 8 
                              ], 
   [
                                    "day" => 10, 
                                    "morning" => "Romans 11:1 - 24", 
                                    "evening" => "Psalms 79, 80", 
                                    "mos" => 8 
                                 ], 
   [
                                       "day" => 11, 
                                       "morning" => "Romans 11:25 - 36", 
                                       "evening" => "Psalms 81, 82, 83", 
                                       "mos" => 8 
                                    ], 
   [
                                          "day" => 12, 
                                          "morning" => "Romans 12", 
                                          "evening" => "Psalms 84, 85, 86", 
                                          "mos" => 8 
                                       ], 
   [
                                             "day" => 13, 
                                             "morning" => "Romans 13", 
                                             "evening" => "Psalms 87, 88", 
                                             "mos" => 8 
                                          ], 
   [
                                                "day" => 14, 
                                                "morning" => "Romans 14", 
                                                "evening" => "Psalms 89, 90", 
                                                "mos" => 8 
                                             ], 
   [
                                                   "day" => 15, 
                                                   "morning" => "Romans 15:1 - 13", 
                                                   "evening" => "Psalms 91, 92, 93", 
                                                   "mos" => 8 
                                                ], 
   [
                                                      "day" => 16, 
                                                      "morning" => "Romans 15:14 - 33", 
                                                      "evening" => "Psalms 94, 95, 96", 
                                                      "mos" => 8 
                                                   ], 
   [
                                                         "day" => 17, 
                                                         "morning" => "Romans 16", 
                                                         "evening" => "Psalms 97, 98, 99", 
                                                         "mos" => 8 
                                                      ], 
   [
                                                            "day" => 18, 
                                                            "morning" => "1 Corinthians 1", 
                                                            "evening" => "Psalms 100, 101, 102", 
                                                            "mos" => 8 
                                                         ], 
   [
                                                               "day" => 19, 
                                                               "morning" => "1 Corinthians 2", 
                                                               "evening" => "Psalms 103, 104", 
                                                               "mos" => 8 
                                                            ], 
   [
                                                                  "day" => 20, 
                                                                  "morning" => "1 Corinthians 3", 
                                                                  "evening" => "Psalms 105, 106", 
                                                                  "mos" => 8 
                                                               ], 
   [
                                                                     "day" => 21, 
                                                                     "morning" => "1 Corinthians 4", 
                                                                     "evening" => "Psalms 107, 108, 109", 
                                                                     "mos" => 8 
                                                                  ], 
   [
                                                                        "day" => 22, 
                                                                        "morning" => "1 Corinthians 5", 
                                                                        "evening" => "Psalms 110, 111, 112", 
                                                                        "mos" => 8 
                                                                     ], 
   [
                                                                           "day" => 23, 
                                                                           "morning" => "1 Corinthians 6", 
                                                                           "evening" => "Psalms 113, 114, 115", 
                                                                           "mos" => 8 
                                                                        ], 
   [
                                                                              "day" => 24, 
                                                                              "morning" => "1 Corinthians 7:1 - 24", 
                                                                              "evening" => "Psalms 116, 117, 118", 
                                                                              "mos" => 8 
                                                                           ], 
   [
                                                                                 "day" => 25, 
                                                                                 "morning" => "1 Corinthians 7:25 - 40", 
                                                                                 "evening" => "Psalms 119:1 - 88", 
                                                                                 "mos" => 8 
                                                                              ], 
   [
                                                                                    "day" => 26, 
                                                                                    "morning" => "1 Corinthians 8", 
                                                                                    "evening" => "Psalms 119:89 - 176", 
                                                                                    "mos" => 8 
                                                                                 ], 
   [
                                                                                       "day" => 27, 
                                                                                       "morning" => "1 Corinthians 9", 
                                                                                       "evening" => "Psalms 120, 121, 122", 
                                                                                       "mos" => 8 
                                                                                    ], 
   [
                                                                                          "day" => 28, 
                                                                                          "morning" => "1 Corinthians 10:1 - 17", 
                                                                                          "evening" => "Psalms 123, 124, 125", 
                                                                                          "mos" => 8 
                                                                                       ], 
   [
                                                                                             "day" => 29, 
                                                                                             "morning" => "1 Corinthians 10:18 - 33", 
                                                                                             "evening" => "Psalms 126, 127, 128", 
                                                                                             "mos" => 8 
                                                                                          ], 
   [
                                                                                                "day" => 30, 
                                                                                                "morning" => "1 Corinthians 11:1 - 16", 
                                                                                                "evening" => "Psalms 129, 130, 131", 
                                                                                                "mos" => 8 
                                                                                             ], 
   [
                                                                                                   "day" => 31, 
                                                                                                   "morning" => "1 Corinthians 11:17 - 34", 
                                                                                                   "evening" => "Psalms 132, 133, 134", 
                                                                                                   "mos" => 8 
                                                                                                ] 
],

            'september' =>  [
   [
         "day" => 1, 
         "morning" => "1 Corinthians 12", 
         "evening" => "Psalms 135, 136", 
         "mos" => 9 
      ], 
   [
            "day" => 2, 
            "morning" => "1 Corinthians 13", 
            "evening" => "Psalms 137, 138, 139", 
            "mos" => 9 
         ], 
   [
               "day" => 3, 
               "morning" => "1 Corinthians 14:1 - 25", 
               "evening" => "Psalms 140, 141, 142", 
               "mos" => 9 
            ], 
   [
                  "day" => 4, 
                  "morning" => "1 Corinthians 14:26 - 40", 
                  "evening" => "Psalms 143, 144, 145", 
                  "mos" => 9 
               ], 
   [
                     "day" => 5, 
                     "morning" => "1 Corinthians 15:1 - 34", 
                     "evening" => "Psalms 146, 147", 
                     "mos" => 9 
                  ], 
   [
                        "day" => 6, 
                        "morning" => "1 Corinthians 15:35 - 58", 
                        "evening" => "Psalms 148, 149, 150", 
                        "mos" => 9 
                     ], 
   [
                           "day" => 7, 
                           "morning" => "1 Corinthians 16", 
                           "evening" => "Proverbs 1, 2", 
                           "mos" => 9 
                        ], 
   [
                              "day" => 8, 
                              "morning" => "2 Corinthians 1", 
                              "evening" => "Proverbs 3, 4, 5", 
                              "mos" => 9 
                           ], 
   [
                                 "day" => 9, 
                                 "morning" => "2 Corinthians 2", 
                                 "evening" => "Proverbs 6, 7", 
                                 "mos" => 9 
                              ], 
   [
                                    "day" => 10, 
                                    "morning" => "2 Corinthians 3", 
                                    "evening" => "Proverbs 8, 9", 
                                    "mos" => 9 
                                 ], 
   [
                                       "day" => 11, 
                                       "morning" => "2 Corinthians 4", 
                                       "evening" => "Proverbs 10, 11, 12", 
                                       "mos" => 9 
                                    ], 
   [
                                          "day" => 12, 
                                          "morning" => "2 Corinthians 5", 
                                          "evening" => "Proverbs 13, 14, 15", 
                                          "mos" => 9 
                                       ], 
   [
                                             "day" => 13, 
                                             "morning" => "2 Corinthians 6", 
                                             "evening" => "Proverbs 16, 17, 18", 
                                             "mos" => 9 
                                          ], 
   [
                                                "day" => 14, 
                                                "morning" => "2 Corinthians 7", 
                                                "evening" => "Proverbs 19, 20, 21", 
                                                "mos" => 9 
                                             ], 
   [
                                                   "day" => 15, 
                                                   "morning" => "2 Corinthians 8", 
                                                   "evening" => "Proverbs 22, 23, 24", 
                                                   "mos" => 9 
                                                ], 
   [
                                                      "day" => 16, 
                                                      "morning" => "2 Corinthians  9", 
                                                      "evening" => "Proverbs 25, 26", 
                                                      "mos" => 9 
                                                   ], 
   [
                                                         "day" => 17, 
                                                         "morning" => "2 Corinthians  10", 
                                                         "evening" => "Proverbs 27, 28, 29", 
                                                         "mos" => 9 
                                                      ], 
   [
                                                            "day" => 18, 
                                                            "morning" => "2 Corinthians 11:1 - 15", 
                                                            "evening" => "Proverbs 30, 31", 
                                                            "mos" => 9 
                                                         ], 
   [
                                                               "day" => 19, 
                                                               "morning" => "2 Corinthians 11:16 - 33", 
                                                               "evening" => "Ecclesiastes 1, 2, 3", 
                                                               "mos" => 9 
                                                            ], 
   [
                                                                  "day" => 20, 
                                                                  "morning" => "2 Corinthians 12", 
                                                                  "evening" => "Ecclesiastes 4, 5, 6", 
                                                                  "mos" => 9 
                                                               ], 
   [
                                                                     "day" => 21, 
                                                                     "morning" => "2 Corinthians 13", 
                                                                     "evening" => "Ecclesiastes 7, 8, 9", 
                                                                     "mos" => 9 
                                                                  ], 
   [
                                                                        "day" => 22, 
                                                                        "morning" => "Galatians 1", 
                                                                        "evening" => "Ecclesiastes 10, 11, 12", 
                                                                        "mos" => 9 
                                                                     ], 
   [
                                                                           "day" => 23, 
                                                                           "morning" => "Galatians 2", 
                                                                           "evening" => "Song of Songs 1, 2, 3", 
                                                                           "mos" => 9 
                                                                        ], 
   [
                                                                              "day" => 24, 
                                                                              "morning" => "Galatians 3", 
                                                                              "evening" => "Song of Songs 4, 5, 6", 
                                                                              "mos" => 9 
                                                                           ], 
   [
                                                                                 "day" => 25, 
                                                                                 "morning" => "Galatians 4", 
                                                                                 "evening" => "Song of Songs 7, 8", 
                                                                                 "mos" => 9 
                                                                              ], 
   [
                                                                                    "day" => 26, 
                                                                                    "morning" => "Galatians 5", 
                                                                                    "evening" => "Isaiah 1, 2", 
                                                                                    "mos" => 9 
                                                                                 ], 
   [
                                                                                       "day" => 27, 
                                                                                       "morning" => "Galatians 6", 
                                                                                       "evening" => "Isaiah 3, 4", 
                                                                                       "mos" => 9 
                                                                                    ], 
   [
                                                                                          "day" => 28, 
                                                                                          "morning" => "Ephesians 1", 
                                                                                          "evening" => "Isaiah 5, 6", 
                                                                                          "mos" => 9 
                                                                                       ], 
   [
                                                                                             "day" => 29, 
                                                                                             "morning" => "Ephesians 2", 
                                                                                             "evening" => "Isaiah 7, 8", 
                                                                                             "mos" => 9 
                                                                                          ], 
   [
                                                                                                "day" => 30, 
                                                                                                "morning" => "Ephesians 3", 
                                                                                                "evening" => "Isaiah 9, 10", 
                                                                                                "mos" => 9 
                                                                                             ] 
],
            'october' => [
                [
                    "day" => 1,
                    "morning" => "Ephesians 4",
                    "evening" => "Isaiah 11, 12, 13",
                    "mos" => 10
                ],
                [
                    "day" => 2,
                    "morning" => "Ephesians 5:1 - 20",
                    "evening" => "Isaiah 14, 15, 16",
                    "mos" => 10
                ],
                [
                    "day" => 3,
                    "morning" => "Ephesians 5:21 - 33",
                    "evening" => "Isaiah 17, 18, 19",
                    "mos" => 10
                ],
                [
                    "day" => 4,
                    "morning" => "Ephesians 6",
                    "evening" => "Isaiah 20, 21, 22",
                    "mos" => 10
                ],
                [
                    "day" => 5,
                    "morning" => "Philippians 1",
                    "evening" => "Isaiah 23, 24, 25",
                    "mos" => 10
                ],
                [
                    "day" => 6,
                    "morning" => "Philippians 2",
                    "evening" => "Isaiah 26, 27",
                    "mos" => 10
                ],
                [
                    "day" => 7,
                    "morning" => "Philippians 3",
                    "evening" => "Isaiah 28, 29",
                    "mos" => 10
                ],
                [
                    "day" => 8,
                    "morning" => "Philippians 4",
                    "evening" => "Isaiah 30, 31",
                    "mos" => 10
                ],
                [
                    "day" => 9,
                    "morning" => "Colossians 1",
                    "evening" => "Isaiah 32, 33",
                    "mos" => 10
                ],
                [
                    "day" => 10,
                    "morning" => "Colossians 2",
                    "evening" => "Isaiah 34, 35, 36",
                    "mos" => 10
                ],
                [
                    "day" => 11,
                    "morning" => "Colossians 3",
                    "evening" => "Isaiah 37, 38",
                    "mos" => 10
                ],
                [
                    "day" => 12,
                    "morning" => "Colossians 4",
                    "evening" => "Isaiah 39, 40",
                    "mos" => 10
                ],
                [
                    "day" => 13,
                    "morning" => "1 Thessalonians 1",
                    "evening" => "Isaiah 41, 42",
                    "mos" => 10
                ],
                [
                    "day" => 14,
                    "morning" => "1 Thessalonians 2",
                    "evening" => "Isaiah 43, 44",
                    "mos" => 10
                ],
                [
                    "day" => 15,
                    "morning" => "1 Thessalonians 3",
                    "evening" => "Isaiah 45, 46",
                    "mos" => 10
                ],
                [
                    "day" => 16,
                    "morning" => "1 Thessalonians 4",
                    "evening" => "Isaiah 47, 48, 49",
                    "mos" => 10
                ],
                [
                    "day" => 17,
                    "morning" => "1 Thessalonians 5",
                    "evening" => "Isaiah 50, 51, 52",
                    "mos" => 10
                ],
                [
                    "day" => 18,
                    "morning" => "2 Thessalonians 1",
                    "evening" => "Isaiah 53, 54, 55",
                    "mos" => 10
                ],
                [
                    "day" => 19,
                    "morning" => "2 Thessalonians 2",
                    "evening" => "Isaiah 56, 57, 58",
                    "mos" => 10
                ],
                [
                    "day" => 20,
                    "morning" => "2 Thessalonians 3",
                    "evening" => "Isaiah 59, 60, 61",
                    "mos" => 10
                ],
                [
                    "day" => 21,
                    "morning" => "1 Timothy 1",
                    "evening" => "Isaiah 62, 63, 64",
                    "mos" => 10
                ],
                [
                    "day" => 22,
                    "morning" => "1 Timothy 2",
                    "evening" => "Isaiah 65, 66",
                    "mos" => 10
                ],
                [
                    "day" => 23,
                    "morning" => "1 Timothy 3",
                    "evening" => "Jeremiah 1, 2",
                    "mos" => 10
                ],
                [
                    "day" => 24,
                    "morning" => "1 Timothy 4",
                    "evening" => "Jeremiah 3, 4, 5",
                    "mos" => 10
                ],
                [
                    "day" => 25,
                    "morning" => "1 Timothy 5",
                    "evening" => "Jeremiah 6, 7, 8",
                    "mos" => 10
                ],
                [
                    "day" => 26,
                    "morning" => "1 Timothy 6",
                    "evening" => "Jeremiah 9, 10, 11",
                    "mos" => 10
                ],
                [
                    "day" => 27,
                    "morning" => "2 Timothy 1",
                    "evening" => "Jeremiah 12, 13, 14",
                    "mos" => 10
                ],
                [
                    "day" => 28,
                    "morning" => "2 Timothy 2",
                    "evening" => "Jeremiah 15, 16, 17",
                    "mos" => 10
                ],
                [
                    "day" => 29,
                    "morning" => "2 Timothy 3",
                    "evening" => "Jeremiah 18, 19",
                    "mos" => 10
                ],
                [
                    "day" => 30,
                    "morning" => "2 Timothy 4",
                    "evening" => "Jeremiah 20, 21",
                    "mos" => 10
                ],
                [
                    "day" => 31,
                    "morning" => "Titus 1",
                    "evening" => "Jeremiah 22, 23",
                    "mos" => 10
                ]
            ],
            'november' => [
                [
                    "day" => 1,
                    "morning" => "Titus 2",
                    "evening" => "Jeremiah 24, 25, 26",
                    "mos" => 11
                ],
                [
                    "day" => 2,
                    "morning" => "Titus 3",
                    "evening" => "Jeremiah 27, 28, 29",
                    "mos" => 11
                ],
                [
                    "day" => 3,
                    "morning" => "Philemon 1",
                    "evening" => "Jeremiah 30, 31",
                    "mos" => 11
                ],
                [
                    "day" => 4,
                    "morning" => "Hebrews 1",
                    "evening" => "Jeremiah 32, 33",
                    "mos" => 11
                ],
                [
                    "day" => 5,
                    "morning" => "Hebrews 2",
                    "evening" => "Jeremiah 34, 35, 36",
                    "mos" => 11
                ],
                [
                    "day" => 6,
                    "morning" => "Hebrews 3",
                    "evening" => "Jeremiah 37, 38, 39",
                    "mos" => 11
                ],
                [
                    "day" => 7,
                    "morning" => "Hebrews 4",
                    "evening" => "Jeremiah 40, 41, 42",
                    "mos" => 11
                ],
                [
                    "day" => 8,
                    "morning" => "Hebrews 5",
                    "evening" => "Jeremiah 43, 44, 45",
                    "mos" => 11
                ],
                [
                    "day" => 9,
                    "morning" => "Hebrews 6",
                    "evening" => "Jeremiah 46, 47",
                    "mos" => 11
                ],
                [
                    "day" => 10,
                    "morning" => "Hebrews 7",
                    "evening" => "Jeremiah 48, 49",
                    "mos" => 11
                ],
                [
                    "day" => 11,
                    "morning" => "Hebrews 8",
                    "evening" => "Jeremiah 50",
                    "mos" => 11
                ],
                [
                    "day" => 12,
                    "morning" => "Hebrews 9",
                    "evening" => "Jeremiah 51, 52",
                    "mos" => 11
                ],
                [
                    "day" => 13,
                    "morning" => "Hebrews 10:1 - 18",
                    "evening" => "Lamentations 1, 2",
                    "mos" => 11
                ],
                [
                    "day" => 14,
                    "morning" => "Hebrews 10:19 - 39",
                    "evening" => "Lamentations 3, 4, 5",
                    "mos" => 11
                ],
                [
                    "day" => 15,
                    "morning" => "Hebrews 11:1 - 19",
                    "evening" => "Ezekiel 1, 2",
                    "mos" => 11
                ],
                [
                    "day" => 16,
                    "morning" => "Hebrews 11:20 - 40",
                    "evening" => "Ezekiel 3, 4",
                    "mos" => 11
                ],
                [
                    "day" => 17,
                    "morning" => "Hebrews 12",
                    "evening" => "Ezekiel 5, 6, 7",
                    "mos" => 11
                ],
                [
                    "day" => 18,
                    "morning" => "Hebrews 13",
                    "evening" => "Ezekiel 8, 9, 10",
                    "mos" => 11
                ],
                [
                    "day" => 19,
                    "morning" => "James 1",
                    "evening" => "Ezekiel 11, 12, 13",
                    "mos" => 11
                ],
                [
                    "day" => 20,
                    "morning" => "James 2",
                    "evening" => "Ezekiel 14, 15",
                    "mos" => 11
                ],
                [
                    "day" => 21,
                    "morning" => "James 3",
                    "evening" => "Ezekiel 16, 17",
                    "mos" => 11
                ],
                [
                    "day" => 22,
                    "morning" => "James 4",
                    "evening" => "Ezekiel 18, 19",
                    "mos" => 11
                ],
                [
                    "day" => 23,
                    "morning" => "James 5",
                    "evening" => "Ezekiel 20, 21",
                    "mos" => 11
                ],
                [
                    "day" => 24,
                    "morning" => "1 Peter 1",
                    "evening" => "Ezekiel 22, 23",
                    "mos" => 11
                ],
                [
                    "day" => 25,
                    "morning" => "1 Peter 2",
                    "evening" => "Ezekiel 24, 25, 26",
                    "mos" => 11
                ],
                [
                    "day" => 26,
                    "morning" => "1 Peter 3",
                    "evening" => "Ezekiel 27, 28, 29",
                    "mos" => 11
                ],
                [
                    "day" => 27,
                    "morning" => "1 Peter 4",
                    "evening" => "Ezekiel 30, 31, 32",
                    "mos" => 11
                ],
                [
                    "day" => 28,
                    "morning" => "1 Peter 5",
                    "evening" => "Ezekiel 33, 34",
                    "mos" => 11
                ],
                [
                    "day" => 29,
                    "morning" => "2 Peter 1",
                    "evening" => "Ezekiel 35, 36",
                    "mos" => 11
                ],
                [
                    "day" => 30,
                    "morning" => "2 Peter 2",
                    "evening" => "Ezekiel 37, 38, 39",
                    "mos" => 11
                ]
            ],
            'december' => [
                [
                    "day" => 1,
                    "morning" => "2 Peter 3",
                    "evening" => "Ezekiel 40, 41",
                    "mos" => 12
                ],
                [
                    "day" => 2,
                    "morning" => "1 John 1",
                    "evening" => "Ezekiel 42, 43, 44",
                    "mos" => 12
                ],
                [
                    "day" => 3,
                    "morning" => "1 John 2",
                    "evening" => "Ezekiel 45, 46",
                    "mos" => 12
                ],
                [
                    "day" => 4,
                    "morning" => "1 John 3",
                    "evening" => "Ezekiel 47, 48",
                    "mos" => 12
                ],
                [
                    "day" => 5,
                    "morning" => "1 John 4",
                    "evening" => "Daniel 1, 2",
                    "mos" => 12
                ],
                [
                    "day" => 6,
                    "morning" => "2 John 1",
                    "evening" => "Daniel 3, 4",
                    "mos" => 12
                ],
                [
                    "day" => 7,
                    "morning" => "3 John 1",
                    "evening" => "Daniel 5, 6, 7",
                    "mos" => 12
                ],
                [
                    "day" => 8,
                    "morning" => "Jude 1",
                    "evening" => "Daniel 8, 9, 10",
                    "mos" => 12
                ],
                [
                    "day" => 9,
                    "morning" => "Revelation 1",
                    "evening" => "Daniel 11, 12",
                    "mos" => 12
                ],
                [
                    "day" => 10,
                    "morning" => "Revelation 2",
                    "evening" => "Hosea 1, 2, 3, 4",
                    "mos" => 12
                ],
                [
                    "day" => 11,
                    "morning" => "Revelation 3",
                    "evening" => "Hosea 5, 6, 7, 8",
                    "mos" => 12
                ],
                [
                    "day" => 12,
                    "morning" => "Revelation 4",
                    "evening" => "Hosea 9, 10, 11",
                    "mos" => 12
                ],
                [
                    "day" => 13,
                    "morning" => "Revelation 5",
                    "evening" => "Hosea 12, 13, 14",
                    "mos" => 12
                ],
                [
                    "day" => 14,
                    "morning" => "Revelation 6",
                    "evening" => "Joel 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 15,
                    "morning" => "Revelation 7",
                    "evening" => "Amos 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 16,
                    "morning" => "Revelation 8",
                    "evening" => "Amos 4, 5, 6",
                    "mos" => 12
                ],
                [
                    "day" => 17,
                    "morning" => "Revelation 8",
                    "evening" => "Amos 7, 8, 9",
                    "mos" => 12
                ],
                [
                    "day" => 18,
                    "morning" => "Revelation 10",
                    "evening" => "Obadiah 1",
                    "mos" => 12
                ],
                [
                    "day" => 19,
                    "morning" => "Revelation 11",
                    "evening" => "Jonah 1, 2, 3, 4",
                    "mos" => 12
                ],
                [
                    "day" => 20,
                    "morning" => "Revelation 12",
                    "evening" => "Micah 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 21,
                    "morning" => "Revelation 13",
                    "evening" => "Micah 4, 5",
                    "mos" => 12
                ],
                [
                    "day" => 22,
                    "morning" => "Revelation 14",
                    "evening" => "Micah 6, 7",
                    "mos" => 12
                ],
                [
                    "day" => 23,
                    "morning" => "Revelation 14",
                    "evening" => "Nahum 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 24,
                    "morning" => "Revelation 15",
                    "evening" => "Habakuk 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 25,
                    "morning" => "Revelation 16",
                    "evening" => "Zephaniah 1, 2, 3",
                    "mos" => 12
                ],
                [
                    "day" => 26,
                    "morning" => "Revelation 17",
                    "evening" => "Haggai 1, 2",
                    "mos" => 12
                ],
                [
                    "day" => 27,
                    "morning" => "Revelation 18",
                    "evening" => "Zechariah 1, 2, 3, 4",
                    "mos" => 12
                ],
                [
                    "day" => 28,
                    "morning" => "Revelation 19",
                    "evening" => "Zechariah 5, 6, 7, 8",
                    "mos" => 12
                ],
                [
                    "day" => 29,
                    "morning" => "Revelation 20",
                    "evening" => "Zechariah 9, 10, 11, 12",
                    "mos" => 12
                ],
                [
                    "day" => 30,
                    "morning" => "Revelation 21",
                    "evening" => "Zechariah 13, 14",
                    "mos" => 12
                ],
                [
                    "day" => 31,
                    "morning" => "Revelation 22",
                    "evening" => "Malachi 1, 2, 3, 4",
                    "mos" => 12
                ]
            ]

        ];

        // Insert data into the verses table
        foreach ($months as $month => $verses) {
            
                foreach ($verses as $verse) {
                    Verse::create([
                        'month' => ucfirst($month),
                        'day' => $verse['day'],
                        'morning' => $verse['morning'],
                        'evening' => $verse['evening'],
                    ]);
                }
            
        }
    }
}
