<?php

class RepairJobFactory {
    public static function createRepairJob($nama, $jenis, $biaya) {
        return new RepairJob($nama, $jenis, $biaya);
    }
}