<?php

//array
$rray = ['miusa', 'esa', 'kamal'];
echo $rray[1] . '</br>';



//Associtive Array 
$addrase = [
    'name' => 'Md Abu saleh musa',
    'FathersName' => 'Md A. Kader Shikder',
    'MothersName' => 'Jasmin Naher',
    'Village' => 'Kopalvara',
    'Upzila' => 'Mirzaganj',
    'District' => 'Patuakhali',
    'Email' => 'mdabusalehmusa2021@gmail.com',
    'Age' => 20,
    'maritalStatus' => 'Unmaride',
    'Nationality' => 'Bangladeshi',
];

echo $addrase['FathersName'] . '</br>';


//Multidimensional Arrays

$multiDimensionalArray = [
    'name' => [
        'firstName' => 'Md Abu Saleh',
        'lastNAme'  => 'Musa',
    ],
    'address' => [
        'presentAddress' => [
            'Village'  => 'Kolapara',
            'Upzila'   => 'Patuakhali',
            'District' => 'Barishal',
        ],
        'parmenentAddress' => [
            'Village'  => 'Kopalvara',
            'Upzila'   => 'Mirzaganj',
            'District' => 'Patuakhali',
        ],
    ],
];


print_r($multiDimensionalArray['address'])

?>
