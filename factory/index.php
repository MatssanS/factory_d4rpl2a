<?php
include_once "Repairjob.php";
include_once "Repairjobfactory.php";

$repairJob1 = RepairJobFactory::createRepairJob("Tambal Ban", "Mengganti ban yang bocor", 15000);
echo "Pekerjaan " . $repairJob1->getNama() . ": " . $repairJob1->getJenis() . ", Biaya: Rp." . $repairJob1->getBiaya();

echo "<br>";

$repairJob2 = RepairJobFactory::createRepairJob("Ganti Oli", "Mengganti oli mesin", 70000);
echo "Pekerjaan " . $repairJob2->getNama() . ": " . $repairJob2->getJenis() . ", Biaya: Rp." . $repairJob2->getBiaya();