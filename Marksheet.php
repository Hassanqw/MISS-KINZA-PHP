<?php

//part 1
$urdu1 = $_POST["uUrdu"];
$UrduPer1 = number_format(($urdu1/75)*100,2);
$english1 = $_POST["uEng"];
$EngPer1= number_format(($english1 /75)*100,2);
$isla1 = $_POST["uIsla"];
$IslPer1 = number_format(($isla1 /50) *100,2);
$EngPer1= number_format(($english1 /75)*100,2);
$phys1 = $_POST["uPhys"];
$PhyPer1= number_format(($phys1 /85)*100,2);
$chem1 = $_POST["uChem"];
$ChemPer1= number_format(($chem1 /85)*100,2);
$math1 = $_POST["uMath"];
$MathPer1= number_format(($math1 /100)*100,2);
$total1 = (int)$urdu1 + (int)$english1 + (int)$isla1 + (int)$phys1 + (int)$chem1 + (int)$math1;
//part 2 
$urdu2 = $_POST["uUrdu2"];
$UrduPer2 = number_format(($urdu2/75)*100,2);
$english2 = $_POST["uEng2"];
$EngPer2= number_format(($english2 /75)*100,2);
$pakis2 = $_POST["uPakis2"];
$PakisPer2 = number_format(($pakis2 /50) *100,2);
$phys2= $_POST["uPhys2"];
$PhyPer2= number_format(($phys2 /85)*100,2);
$chem2 = $_POST["uChem2"];
$ChemPer2= number_format(($chem2 /85)*100,2);
$math2 = $_POST["uMath2"];
$MathPer2= number_format(($math2 /100)*100,2);
$total2 = (int)$urdu2 + (int)$english2 + (int)$phys2 + (int)$chem2 + (int)$math2 + (int)$pakis2;


// Combined Urdu Percentage
$totalUrdu = $urdu1 + $urdu2;
$combinedUrduPerc = number_format(($totalUrdu / 150) * 100, 2);

// Combined English Percentage
$totalEnglish = $english1 + $english2;
$combinedEnglishPerc = number_format(($totalEnglish / 150) * 100, 2);

// Islamic Studies (only Part 1)
$combinedIslaPerc = number_format(($isla1 / 50) * 100, 2);

// Pakistan Studies (only Part 2)
$combinedPakisPerc = number_format(($pakis2 / 50) * 100, 2);

// Combined Physics Percentage
$totalPhysics = $phys1 + $phys2;
$combinedPhysPerc = number_format(($totalPhysics / 170) * 100, 2);

// Combined Chemistry Percentage
$totalChem = $chem1 + $chem2;
$combinedChemPerc = number_format(($totalChem / 170) * 100, 2);

// Combined Math Percentage
$totalMath = $math1 + $math2;
$combinedMathPerc = number_format(($totalMath / 200) * 100, 2);

//total Secured Marks 
$tolUrdu = $urdu1 + $urdu2;
$tolEng = $english1 + $english2;
$tolPhys = $phys1+$phys2;
$tolChem = $chem1+$chem2;
$tolMath = $math1+$math2;
//total marks secured 
$TotalAllMarks = $tolUrdu+$tolEng+$tolPhys+$tolChem+$tolMath+$pakis2+$isla1;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Intermediate Marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
        }

        .marksheet {
            max-width: 900px;
            margin: 40px auto;
            border: 1px solid #000;
            padding: 30px;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000 !important;
        }

        .text-center-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sub-title {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }

        .signature-box {
            height: 50px;
            border-bottom: 1px solid #000;
            margin-bottom: 10px;
        }

        .fw-medium {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="marksheet">
        <div class="text-center">
            <p class="fw-bold">093090</p>
            <h4 class="text-center-title">Board of Intermediate Education Karachi</h4>
            <p class="sub-title">H.S.C Part - I & II Intermediate Examination (Annual - 2009)</p>
            <h5 class="text-center-title mt-2">Statement of Marks</h5>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <p><strong>Marks Sheet No:</strong> 0000001-1</p>
                <p><strong>Group:</strong>Commerce</p>
                <p><strong>Roll No:</strong> 325776</p>
                <p><strong>Enrollment/Registration No:</strong> -</p>
            </div>
            <div class="col-md-6">
                <p><strong>Name:</strong> MUHAMMAD HASSAN</p>
                <p><strong>Father's Name:</strong> MUHAMMAD ASLAM</p>
                <p><strong>College/Private:</strong> D.J. Sindh Govt. Science College</p>
            </div>
        </div>

        <table class="table table-bordered text-center mt-4">
            <thead class="table-light">
                <tr>
                    <th rowspan="2">Subject</th>
                    <th colspan="3">Part I Marks</th>
                    <th colspan="3">Part II Marks</th>
                    <th colspan="3">Combined</th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr>
                    <th>Max</th>
                    <th>Secured</th>
                    <th>%</th>
                    <th>Max</th>
                    <th>Secured</th>
                    <th>%</th>
                    <th>Max</th>
                    <th>Secured</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Urdu Normal</td>
                    <td>75</td>
                    <td><?= $urdu1 ?></td>
                    <td><?= $UrduPer1 ?></td>
                    <td>75</td>
                    <td><?= $urdu2?></td>
                    <td><?= $UrduPer2?></td>
                    <td>150</td>
                    <td><?= $tolUrdu?></td>
                    <td><?= $combinedUrduPerc?></td>
                    <td><?= ($urdu1 >= 33 && $urdu2 >= 33) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>English Normal</td>
                    <td>75</td>
                    <td><?= $english1 ?></td>
                    <td><?= $EngPer1?></td>
                    <td>75</td>
                    <td><?= $english2?> </td>
                    <td><?= $EngPer2?></td>
                    <td>150</td>
                    <td><?= $tolEng?></td>
                    <td><?= $combinedEnglishPerc?></td>
                    <td><?= ($english1 >= 33 && $english2 >= 33) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>Islamic Education</td>
                    <td>50</td>
                    <td><?= $isla1 ?></td>
                    <td><?= $IslPer1 ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>50</td>
                    <td><?= $isla1?></td>
                    <td><?= $combinedIslaPerc?></td>
                    <td><?= ($isla1 >= 28 ) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>Pakistan Studies</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>50</td>
                    <td><?= $pakis2?></td>
                    <td><?= $PakisPer2?></td>
                    <td>50</td>
                    <td><?= $pakis2?></td>
                    <td><?= $combinedPakisPerc?></td>
                    <td><?= ($pakis2 >= 28 ) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td>85</td>
                    <td><?= $phys1 ?></td>
                    <td><?= $PhyPer1?></td>
                    <td>85</td>
                    <td><?=  $phys2?></td>
                    <td><?= $PhyPer2?></td>
                    <td>170</td>
                    <td><?= $tolPhys?></td>
                    <td><?= $combinedPhysPerc?></td>
                    <td><?= ($phys1 >= 37 && $phys2 >= 37) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td>85</td>
                    <td><?= $chem1 ?></td>
                    <td><?= $ChemPer1?></td>
                    <td>85</td>
                    <td><?= $chem2?></td>
                    <td><?= $ChemPer2?></td>
                    <td>170</td>
                    <td><?= $tolChem?></td>
                    <td><?= $combinedChemPerc?></td>
                    <td><?= ($chem1 >= 37 && $chem2 >= 37) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr>
                    <td>Mathematics</td>
                    <td>100</td>
                    <td><?= $math1 ?></td>
                    <td><?= $MathPer1?></td>
                    <td>100</td>
                    <td><?= $math2?></td>
                    <td><?= $MathPer2?></td>
                    <td>200</td>
                    <td><?= $tolMath?></td>
                    <td><?= $combinedMathPerc?></td>
                    <td><?= ($math2 >= 40 && $math1 >= 40) ? "Pass" : "Fail" ?></td>
                </tr>
                <tr class="fw-bold">
                    <td>Total</td>
                    <td>470</td>
                    <td><?= $total1?></td>
                    <td></td>
                    <td>470</td>
                    <td><?= $total2 ?></td>
                    <td></td>
                    <td>940</td>
                    <td><?= $TotalAllMarks?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p class="mt-2"><strong>In Words:</strong> Eight Hundred Twenty Two Only.</p>
        <p><strong>Grace/Grade Raised:</strong> -</p>

        <div class="row mt-5">
            <div class="col-4 text-center">
                <div class="signature-box"></div>
                <p>Prepared By IT Department</p>
            </div>
            <div class="col-4 text-center">
                <div class="signature-box"></div>
                <p>Checked By</p>
            </div>
            <div class="col-4 text-center">
                <div class="signature-box"></div>
                <p>Controller of Examinations</p>
            </div>
        </div>

        <p class="text-end mt-3"><strong>Date:</strong> August 21, 2009</p>
    </div>
</body>

</html>